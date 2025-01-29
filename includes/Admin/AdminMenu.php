<?php

namespace PageFlash\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * AdminMenu Class.
 *
 * This class handles the administration-related functionality for the PageFlash plugin.
 *
 * @package PageFlash
 * @since PageFlash 1.0.0
 */

class AdminMenu {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
	}

	public function add_menu() {
		add_menu_page(
			'PageFlash',
			'PageFlash',
			'manage_options',
			'pageflash',
			array( $this, 'page' ),
			'dashicons-admin-generic'
		);
		// setting page
		add_submenu_page(
			'pageflash',
			'Settings',
			'Settings',
			'manage_options',
			'pageflash_settings',
		);
	}

	public function page() {
		?>
		<div class="wrap pageflash" id="root">
			<h2>PageFlash</h2>
			<p>PageFlash is a plugin that allows you to create beautiful and interactive pages for your WordPress site.</p>
		</div>
		<?php
	}
}
