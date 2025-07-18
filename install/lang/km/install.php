<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link https://moodledev.io/general/projects/api/amos}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'ថតអ្នកគ្រប់គ្រង';
$string['availablelangs'] = 'កញ្ចប់ភាសាដែលមាន';
$string['chooselanguagehead'] = 'ជ្រើសភាសា';
$string['chooselanguagesub'] = 'សូមជ្រើសភាសា សម្រាប់តែការដំឡើងនេះ ។ អ្នកនឹងអាចជ្រើសភាសាសម្រាប់តំបន់បណ្ដាញ និងអ្នកប្រើ នៅផ្នែកក្រោយៗទៀត ។';
$string['dataroot'] = 'ថតទិន្នន័យ';
$string['dbprefix'] = 'បុព្វបទតារាង';
$string['dirroot'] = 'ថត Moodle';
$string['environmenthead'] = 'កំពុងពិនិត្យបរិស្ថានរបស់អ្នក...';
$string['installation'] = 'ការដំឡើង';
$string['langdownloaderror'] = 'ភាសា "{$a}" មិនត្រូវបានដំឡើងឡើយ ។ វានឹងបន្តដំឡើងជាភាសាអង់គ្លេស ។';
$string['memorylimithelp'] = '<p>បច្ចុប្បន្ន សតិកំណត់របស់ PHP សម្រាប់ម៉ាស៊ីនបម្រើរបស់អ្នក ត្រូវបានកំណត់ជា {$a} ។</p>

<p>វាអាចបង្កឲ្យ Moodle មានបញ្ហាជាមួយសតិនៅពេលក្រោយ ជាពិសេសនៅពេលអ្នកមានម៉ូឌុលបើកច្រើន និង/ឬអ្នកប្រើច្រើន ។</p>

<p>យើងផ្ដល់អនុសាសន៍ថា អ្នកគួរតែកំណត់រចនាសម្ព័ន្ធ PHP ជាមួយចំនួនកំណត់ខ្ពស់ជាងនេះតាមដែលអាច ដូចជា 40M ។
មានវិធីជាច្រើន ក្នុងការធ្វើវា ដែលអ្នកអាចសាកល្បងបាន ៖</p>
<ol>
<li>ប្រសិនបើអ្នកអាចចងក្រង PHP ឡើងវិញបានដោយប្រើ <i>--enable-memory-limit</i> ។
នោះ Moodle នឹងអាចកំណត់សតិកំណត់ដោយខ្លួនឯង ។</li>
<li>ប្រសិនបើអ្នកមានសិទ្ធិចូលដំណើរការឯកសារ php.ini របស់អ្នក អ្នកអាចផ្លាស់ប្ដូរការកំណត់ <b>memory_limit</b> ក្នុងទីនោះទៅតម្លៃផ្សេង ដូចជា 40M ។ ប្រសិនបើអ្នកមិនមានសិទ្ធិចូលដំណើរការទេនោះ អ្នកអាចស្នើឲ្យអ្នកគ្រប់គ្រងរបស់អ្នកធ្វើឲ្យអ្នកតែម្ដង ។</li>
<li>នៅលើម៉ាស៊ីនបម្រើ PHP មួយចំនួន អ្នកអាចបង្កើតឯកសារ .htaccess នៅក្នុងថត Moodle ដែលមានបន្ទាត់នេះ ៖
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>ទោះយ៉ាងណា នៅលើម៉ាស៊ីនបម្រើមួយចំនួន ទង្វើរនេះនឹងរារាំងទំព័រ PHP <b>ទាំងអស់</b> មិនឲ្យដំណើរការ
(អ្នកនឹងឃើញកំហុស នៅពេលអ្នកមើលទំព័រ) ដូច្នេះអ្នកត្រូវតែយកឯកសារ .htaccess ចេញ ។</p></li>
</ol>';
$string['phpversion'] = 'កំណែ PHP';
$string['phpversionhelp'] = '<p>Moodle ទាមទារកំណែ PHP យ៉ាងហោចណាស់ត្រឹម 4.3.0 ឬ 5.1.0 (5.0.x នៅមានបញ្ហាមួយចំនួន) ។</p>
<p>អ្នកកំពុងរត់កំណែ {$a}</p>
<p>អ្នកត្រូវតែធ្វើឲ្យ PHP ប្រសើរ ឬផ្លាស់ទីទៅម៉ាស៊ីនដែលមានកំណែ PHP ថ្មី ‌!<br/>(ក្នុងករណី 5.0.x អ្នកក៏អាចបន្ទាបទៅកំណែ 4.4.x ផងដែរ)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'អ្នកកំពុងមើលទំព័រនេះ ពីព្រោះអ្នកបានដំឡើង និងចាប់ផ្ដើមដំណើរការកញ្ចប់ <strong>{$a->packname} {$a->packversion}</strong> ដោយជោគជ័យ ក្នុងកុំព្យូទ័ររបស់អ្នក ។ សូមអបអរសាទរ!';
$string['welcomep30'] = 'ការចេញផ្សាយ <strong>{$a->installername}</strong> នេះ រួមបញ្ចូលនូវកម្មវិធីសម្រាប់បង្កើតបរិស្ថានមួយដែល <strong>Moodle</strong> នឹងប្រតិបត្តិ ។ វាមានឈ្មោះថា ៖';
$string['welcomep40'] = 'កញ្ចប់ក៏រួមបញ្ចូលផងដែរនូវ <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> ។';
$string['welcomep50'] = 'ការប្រើប្រាស់កម្មវិធីទាំងអស់ក្នុងកញ្ចប់នេះ ត្រូវបានគ្រប់គ្រងដោយអាជ្ញាបណ្ណរបស់ពួកវារៀងៗខ្លួន ។ កញ្ចប់ <strong>{$a->installername}</strong> ពេញលេញគឺជា <a href="http://www.opensource.org/docs/definition_plain.html">កម្មវិធីកូដបើកចំហ</a> ហើយត្រូវបានចែកចាយក្រោមអាជ្ញាបណ្ណ <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> ។';
$string['welcomep60'] = 'ទំព័រខាងក្រោម នឹងណែនាំអ្នកតាមជំហានដ៏ងាយស្រួល ដើម្បីកំណត់រចនាសម្ព័ន្ធ និងរៀបចំ <strong>Moodle</strong> នៅលើកុំព្យូទ័ររបស់អ្នក ។ អ្នកអាចទទួលយកនូវការកំណត់លំនាំដើម ឬកែប្រែពួកវាឲ្យត្រូវទៅនឹងតម្រូវការរបស់អ្នកផ្ទាល់ ។';
$string['welcomep70'] = 'ចុចប៊ូតុង "បន្ទាប់" នៅខាងក្រោម ដើម្បីបន្តរៀបចំ <strong>Moodle</strong> ។';
$string['wwwroot'] = 'អាសយដ្ឋានបណ្ដាញ';
