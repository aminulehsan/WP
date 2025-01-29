<?
/**
 * LandmarkList
 *
 * This class is used to register the Landmark for your PageFlash plugin.
 *
 * @since PageFlash 1.0.0
 */
class LandmarkList {
	/**
	 * Initialize the Landmark.
	 *
	 * This method initializes the Landmark for your PageFlash plugin.
	 *
	 * @since PageFlash 1.0.0
	 * @access public
	 */
	public function __construct() {
		// Register the Landmark
		add_action( 'init', array( $this, 'pageflash_register_landmark' ) );
	}

	/**
	 * Register the Landmark.
	 *
	 * This method registers the Landmark for your PageFlash plugin.
	 *
	 * @since PageFlash 1.0.0
	 * @access public
	 */
	public function pageflash_register_landmark() {
		$landmark = array(
			'quicklink'  => array(
				'_id' 	=> uniqid(),
				'slug'    => 'quicklink',
				'title'   => 'Quicklink',
				'status'  => 'active',
				'package' => 'free',
				"description" => "Quicklink is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",

			),
			'speculation-rules' => array(
				'_id' 	=> uniqid(),
				'slug'    => 'speculation-rules',
				'title'   => 'Speculation Rules',
				'status'  => 'active',
				'package' => 'free',
				"description" => "Speculation Rules is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",
			),
			'navigation' => array(
				'_id' 	=> uniqid(),
				'slug'    => 'navigation',
				'title'   => 'Navigation',
				'status'  => 'active',
				'package' => 'free',
				"description" => "Navigation is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",
			),

			'wc-quicklink' => array(
				'_id' 	=> uniqid(),
				'slug'    => 'wc-quicklink',
				'title'   => 'WooCommerce Quicklink',
				'status'  => 'active',
				'package' => 'pro',
				"description" => "WooCommerce Quicklink is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",
			),
			'wc-speculation-rules' => array(
				'_id' 	=> uniqid(),
				'slug'    => 'wc-speculation-rules',
				'title'   => 'WooCommerce Speculation Rules',
				'status'  => 'active',
				'package' => 'pro',
				"description" => "WooCommerce Speculation Rules is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",
			),

			'wc-navigation' => array(
				'_id' 	=> uniqid(),
				'slug'    => 'wc-navigation',
				'title'   => 'WooCommerce Navigation',
				'status'  => 'active',
				'package' => 'pro',
				"description" => "WooCommerce Navigation is a plugin that allows you to create beautiful and interactive pages for your WordPress site.",
			),
		);

		$landmark = apply_filters( 'pageflash_landmark_list', $landmark );
		add_option( 'pageflash_landmark', $landmark );

	}

}