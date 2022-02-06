<?php

/**
 * Autoloading
 *
 * @package KyTheme
 */

namespace Ky;

defined('ABSPATH') || die("Can't access directly");

define('KY_ACF_DOMAIN', 'ky_acf');

require_once __DIR__ . '/ajax/generate-acf-file.php';
require_once __DIR__ . '/admin/setup.php';
