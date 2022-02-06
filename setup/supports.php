<?php

/**
 * Setting up theme support
 *
 * @package KyTheme
 */

namespace KyTheme\Setup;

defined('ABSPATH') || die("Can't access directly");

/**
 * Supports file to manage theme supports
 */
class Supports
{

	/**
	 * Setup the flow
	 */
	public function __construct()
	{
		add_action('after_setup_theme', [$this, 'add_supports']);
	}

	/**
	 * Prepare all required setup for ov theme, like theme support and tranlations
	 *
	 * @return void
	 */
	public function add_supports()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			]
		);

		// add post format support.
		// add_theme_support( 'post-formats', array( 'video' ) );

		// register menu locations.
		register_nav_menus(
			[
				'landing_page__bottom' => esc_html__('Landing page: bottom', 'themedomain'),
				'loggedin_page__top'   => esc_html__('Logged-in page: top', 'themedomain'),
				'loggedin_page__side'  => esc_html__('Logged-in page: side', 'themedomain'),
			]
		);

		add_theme_support(
			'custom-logo',
			[
				'flex-height' => true,
				'flex-width'  => true,
			]
		);
	}
}

new Supports();
