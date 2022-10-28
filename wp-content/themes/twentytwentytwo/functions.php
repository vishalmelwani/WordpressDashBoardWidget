<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

//add react root element into wordpress admin dashboard widget
add_action('wp_dashboard_setup', function () {
  wp_add_dashboard_widget('graph_widget', 'Graph Widget', 'graph_dashboard_display_widget');
  function graph_dashboard_display_widget() {
    ?>
    <div id="dashboard_widget_for_rankMath"></div>
    <?php
  }
});

//add react app in wordpress admin dashboard widget
add_action('admin_enqueue_scripts', function ($hook) {
	// only load scripts on dashboard
	if ($hook != 'index.php') {
	  return;
	}
	
	$js_to_load = 'http://localhost:3000/static/js/bundle.js';

	wp_enqueue_script('graph_demo_js', $js_to_load, '', mt_rand(10,1000), true);

});


add_action('rest_api_init', function () {
	register_rest_route('graphData/v1', '/proxy', array(
	  'methods'  => WP_REST_Server::READABLE,
	  'callback' => 'graph_demo_api_proxy',
	));
});

function graph_demo_api_proxy($request) {
	global $wpdb;
	$params = $request->get_query_params();
	$getDataForDays = $params['days'];
	$day_before = date( 'Y-m-d', strtotime( date("Y-m-d") . ' -'.$getDataForDays.' day' ) );
	$table_name = $wpdb->prefix . "demoData where demoDataTimestamp > '".$day_before."' ORDER BY demoDataTimestamp ASC";
	$records = $wpdb->get_results( "SELECT * FROM $table_name" );
	return json_encode($records);
}

  
// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
