<?php

/**
 * Functions and definitions
 *
 * @link https://github.com/dicky54putra/ky
 *
 * @package Ky
 */

require_once __DIR__ . '/setup/theme.php';

/**
 * The main function responsible for returning the one true theme Instance to functions everywhere.
 * Use this function like you would a global variable, except without needing to declare the global.
 *
 * @since 1.0.0
 * @return object main object of theme
 */
function setup_theme()
{
	global $ky_theme;

	if (!isset($ky_theme)) {
		$ky_theme = new Theme();
		$ky_theme->initialize();
	}

	return $ky_theme;
}
// initialize!
setup_theme();
