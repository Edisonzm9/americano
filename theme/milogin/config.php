<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'milogin';
$THEME->parents = ['boost'];
$THEME->sheets = []; // No usamos hojas de estilo CSS directas.

// Esta línea es clave. Le dice a Moodle que llame a la función
// 'theme_milogin_get_pre_scss' para obtener el SCSS.
// Moodle construye el nombre de la función con el nombre de tu tema.
$THEME->prescsscallback = 'theme_milogin_get_pre_scss';