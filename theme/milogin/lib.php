<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Adds our custom SCSS to the Moodle theme.
 *
 * @param theme_config $theme The theme configuration.
 * @return string The SCSS code.
 */
function theme_milogin_get_pre_scss($theme) {
    // Carga el contenido de nuestro archivo SCSS.
    // 'get_pre_scss' asegura que nuestras reglas se carguen antes
    // que las de Boost, permitiéndonos sobreescribirlas fácilmente.
    return file_get_contents($theme->dir . '/scss/prescss.scss');
}