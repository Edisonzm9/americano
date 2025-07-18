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

$string['admindirname'] = 'Direutoriu d\'alministración';
$string['availablelangs'] = 'Paquetes d\'idioma disponibles';
$string['chooselanguagehead'] = 'Escueya idioma';
$string['chooselanguagesub'] = 'Escueya un idioma NAMÁS pa la instalación. va poder escoyer l\'idioma del sitiu y l\'idioma d\'usuariu nes pantayes vinientes.';
$string['dataroot'] = 'Direutoriu de datos';
$string['dbprefix'] = 'Prefixu de les tables';
$string['dirroot'] = 'Direutoriu Moodle';
$string['environmenthead'] = 'Verificando\'l so ámbitu ...';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'Desgraciadamente l\'idioma "{$a}" nun ta instaláu. El procesu d\'instalación va siguir n\'inglés.';
$string['memorylimithelp'] = '<p>La llende de memoria del PHP del so servidor ta actualmente establecida en {$a}.</p>

<p>Esto va facer que Moodle tenga problemes de memoria más tarde, especialmente si tien munchos módulos y/o munchos usuarios.</p>

<p>Recomendamos que configure PHP con una llende más grande si ye posible, como por exemplu 40M.
   Esisten varies formes nes que pue intentar facer esta modificación:</p>
<ol>
<li>Si pue, recompile PHP con <i>--enable-memory-limit</i>.
   Esto va permitir que\'l propiu Moodle modifique la llende de memoria.</li>
<li>Si tien accesu al so ficheru php.ini pue modificar el valor de <b>memory_limit</b> a daqué paecío a 40M.  Si nun tien accesu a esi ficheru igual pue pidir al alministrador del sistema que lo faiga.</li>
<li>En dellos servidores PHP pue crear un ficheru .htaccess nel direutoriu Moodle cola ringlera que vien darréu:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>De toles maneres, en dellos servidores esto va provocar que <b>nun funcione nenguna</b>páxina en PHP (va ver erros de la qu\'intente ver les páxines) polo que va tener qu\'esborrar el ficheru .htaccess.</p></li>
</ol>';
$string['phpversion'] = 'Versión PHP';
$string['phpversionhelp'] = '<p>Moodle necesita una versión de PHP de 4.3.0 como mínimo o 5.1.0 (5.0.x tien problemes conocíos).</p>
<p>Actualmente tien instalada la versión {$a}</p>
<p>Tien d\'actualizar el PHP o migrar a otru servidor con una versión más nueva de PHP!<br/>
(Nel casu de tener una versión 5.0.x pue tornar a una versión 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Ta viendo esta páxina porque consiguió instalar y arrancar el paquete <strong>{$a->packname} {$a->packversion}</strong> nel so ordeandor. ¡Felicidaes!';
$string['welcomep30'] = 'Esta versión de <strong>{$a->installername}</strong> inclúi les aplicaciones pa crear l\'ámbitu nel que <strong>Moodle</strong> pue funcionar, llamaes:';
$string['welcomep40'] = 'El paquete tamién inclúi <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'usu de toles aplicaciones d\'esti paquete ta reguláu poles respeutives llicencies. El paquete <strong>{$a->installername}</strong> completu ye <a href="http://www.opensource.org/docs/definition_plain.html"> códigu abiertu</a>  distribuyíu nos términos de la llicencia <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Les páxines siguientes van llevalu per dellos pasos fáciles de siguir pa configurar <strong>Moodle</strong> nel ordenador. Pue aceptar la configuración por defeutu o, opcionalmente, usar otres más adaptaes a les sos necesidaes.';
$string['welcomep70'] = 'Calque\'l botón "Siguiente" qu\'hai embaxo pa siguir cola configuración de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Direición web';
