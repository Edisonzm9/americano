<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * CLI script to set up all the behat test environment.
 *
 * @package    tool_behat
 * @copyright  2013 David Monllaó
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (isset($_SERVER['REMOTE_ADDR'])) {
    die(); // No access from web!
}

// Force OPcache reset if used, we do not want any stale caches
// when preparing test environment.
if (function_exists('opcache_reset')) {
    opcache_reset();
}

// Is not really necessary but adding it as is a CLI_SCRIPT.
define('CLI_SCRIPT', true);
define('CACHE_DISABLE_ALL', true);

// It makes no sense to use BEHAT_CLI for this script (the Behat launch scripts expect to start
// from the normal environment), so in case user has set tne environment variable, disable it.
putenv('BEHAT_CLI=0');

// Basic functions.
require_once(__DIR__ . '/../../../../lib/clilib.php');
require_once(__DIR__ . '/../../../../lib/behat/lib.php');

list($options, $unrecognized) = cli_get_params(
    array(
        'parallel' => 0,
        'maxruns'  => false,
        'help'     => false,
        'fromrun'  => 1,
        'torun'    => 0,
        'optimize-runs' => '',
        'add-core-features-to-theme' => false,
        'axe'      => null,
        'disable-composer' => false,
        'composer-upgrade' => true,
        'composer-self-update' => true,
    ),
    array(
        'j' => 'parallel',
        'm' => 'maxruns',
        'h' => 'help',
        'o' => 'optimize-runs',
        'a' => 'add-core-features-to-theme',
    )
);

// Checking run.php CLI script usage.
$help = "
Behat utilities to initialise behat tests

Usage:
  php init.php      [--parallel=value [--maxruns=value] [--fromrun=value --torun=value]]
                    [--no-axe] [-o | --optimize-runs] [-a | --add-core-features-to-theme]
                    [--no-composer-self-update] [--no-composer-upgrade]
                    [--disable-composer]
                    [--help]

Options:
-j, --parallel      Number of parallel behat run to initialise
-m, --maxruns       Max parallel processes to be executed at one time
--fromrun           Execute run starting from (Used for parallel runs on different vms)
--torun             Execute run till (Used for parallel runs on different vms)
--no-axe            Disable axe accessibility tests.

-o, --optimize-runs
                    Split features with specified tags in all parallel runs.

-a, --add-core-features-to-theme
                    Add all core features to specified theme's

--no-composer-self-update
                    Prevent upgrade of the composer utility using its self-update command

--no-composer-upgrade
                    Prevent update development dependencies using composer

--disable-composer
                    A shortcut to disable composer self-update and dependency update
                    Note: Installation of composer and/or dependencies will still happen as required

-h, --help          Print out this help

Example from Moodle root directory:
\$ php admin/tool/behat/cli/init.php --parallel=2

More info in https://moodledev.io/general/development/tools/behat/running
";

if (!empty($options['help'])) {
    echo $help;
    exit(0);
}

if ($options['axe']) {
    echo "Axe accessibility tests are enabled by default, to disable them, use the --no-axe option.\n";
} else if ($options['axe'] === false) {
    echo "Axe accessibility tests have been disabled.\n";
}

// Check which util file to call.
$utilfile = 'util_single_run.php';
$commandoptions = "";
// If parallel run then use utilparallel.
if ($options['parallel'] && $options['parallel'] > 1) {
    $utilfile = 'util.php';
    // Sanitize all input options, so they can be passed to util.
    foreach ($options as $option => $value) {
        $commandoptions .= behat_get_command_flags($option, $value);
    }
} else {
    // Only sanitize options for single run.
    $cmdoptionsforsinglerun = [
        'add-core-features-to-theme',
        'axe',
    ];

    foreach ($cmdoptionsforsinglerun as $option) {
        $commandoptions .= behat_get_command_flags($option, $options[$option]);
    }
}

// Changing the cwd to admin/tool/behat/cli.
$cwd = getcwd();
$output = null;

if ($options['disable-composer']) {
    // Disable self-update and upgrade easily.
    // Note: Installation will still occur regardless of this setting.
    $options['composer-self-update'] = false;
    $options['composer-upgrade'] = false;
}

// Install and update composer and dependencies as required.
testing_update_composer_dependencies($options['composer-self-update'], $options['composer-upgrade']);

// Check whether the behat test environment needs to be updated.
chdir(__DIR__);
exec("php $utilfile --diag $commandoptions", $output, $code);

if ($code == 0) {
    echo "Behat test environment already installed\n";

} else if ($code == BEHAT_EXITCODE_INSTALL) {
    // Behat and dependencies are installed and we need to install the test site.
    chdir(__DIR__);
    passthru("php $utilfile --install $commandoptions", $code);
    if ($code != 0) {
        chdir($cwd);
        exit($code);
    }

} else if ($code == BEHAT_EXITCODE_REINSTALL) {
    // Test site data is outdated.
    chdir(__DIR__);
    passthru("php $utilfile --drop $commandoptions", $code);
    if ($code != 0) {
        chdir($cwd);
        exit($code);
    }

    chdir(__DIR__);
    passthru("php $utilfile --install $commandoptions", $code);
    if ($code != 0) {
        chdir($cwd);
        exit($code);
    }

} else {
    // Generic error, we just output it.
    echo implode("\n", $output)."\n";
    chdir($cwd);
    exit($code);
}

// Enable editing mode according to config.php vars.
chdir(__DIR__);
passthru("php $utilfile --enable $commandoptions", $code);
if ($code != 0) {
    echo "Error enabling site" . PHP_EOL;
    chdir($cwd);
    exit($code);
}

exit(0);
