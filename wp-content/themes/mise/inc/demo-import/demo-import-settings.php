<?php
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
if ( ! function_exists( 'mise_ocdi_import_files' ) ) :
	function mise_ocdi_import_files() {
	  return array(
		array(
		  'import_file_name'             => esc_html__( 'Mise Demo Content', 'mise' ),
		  'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-import/mise-content-demo.xml',
		  'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-import/mise-customizer-demo.dat',
		  'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'screenshot.png',
		  'import_notice'                => esc_html__( 'We recommend importing the demo content to new websites without content. This is to avoid filling the website with new pages and posts that could create confusion with existing content. After you import the demo, the main menu, widgets, and some parts of the theme (like the site logo) must be set manually.', 'mise' ),
		  'preview_url'                  => 'https://crestaproject.com/demo/mise/',
		),
	  );
	}
	add_filter( 'pt-ocdi/import_files', 'mise_ocdi_import_files' );
endif;

if ( ! function_exists( 'mise_ocdi_after_import_setup' ) ) :
	function mise_ocdi_after_import_setup() {
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Menu 1', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		);
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Page' );
		$blog_page_id  = get_page_by_title( 'Blog Page' );
		// Assign block pages for the onepage template.
		$aboutus_page_id = get_page_by_title( 'Mise Free WP Theme by CrestaProject' );
		$features1 = get_page_by_title( 'Easy to use' );
		$features2 = get_page_by_title( 'Many Sections' );
		$features3 = get_page_by_title( 'Upgradeable to PRO' );
		$services1 = get_page_by_title( 'Aliquam pretium consectetur nulla' );
		$services2 = get_page_by_title( 'Nunc sit amet volutpat purus, et accumsan nisi' );
		$services3 = get_page_by_title( 'Aenean in ultrices elit. Donec arcu dolor' );
		$services4 = get_page_by_title( 'Sed nec ante varius, malesuada velit non' );
		$team1 = get_page_by_title( 'Beverly B Miner' );
		$team2 = get_page_by_title( 'Scott M Davis' );
		$team3 = get_page_by_title( 'Celeste E Linthicum' );
		$team4 = get_page_by_title( 'William N Kelso' );

		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
		$options = get_option('mise_theme_options');
		$options['_onepage_choosepage_aboutus'] = $aboutus_page_id->ID;
		$options['_onepage_choosepage_1_features'] = $features1->ID;
		$options['_onepage_choosepage_2_features'] = $features2->ID;
		$options['_onepage_choosepage_3_features'] = $features3->ID;
		$options['_onepage_choosepage_1_services'] = $services1->ID;
		$options['_onepage_choosepage_2_services'] = $services2->ID;
		$options['_onepage_choosepage_3_services'] = $services3->ID;
		$options['_onepage_choosepage_4_services'] = $services4->ID;
		$options['_onepage_choosepage_1_team'] = $team1->ID;
		$options['_onepage_choosepage_2_team'] = $team2->ID;
		$options['_onepage_choosepage_3_team'] = $team3->ID;
		$options['_onepage_choosepage_4_team'] = $team4->ID;
		$options['_onepage_image_1_slider'] = mise_get_upload_dir_var('baseurl') . '/2018/02/mise-demo.jpg';
		$options['_onepage_image_2_slider'] = mise_get_upload_dir_var('baseurl') . '/2018/01/mise_slider_example_1.jpg';
		$options['_onepage_image_3_slider'] = mise_get_upload_dir_var('baseurl') . '/2018/01/mise_slider_example_3.jpg';
		$options['_onepage_imgback_features'] = mise_get_upload_dir_var('baseurl') . '/2016/12/image-features.jpg';
		$options['_onepage_imgback_cta'] = mise_get_upload_dir_var('baseurl') . '/2016/12/image-cta.jpg';
		$options['_onepage_servimage_services'] = mise_get_upload_dir_var('baseurl') . '/2016/12/image-services.jpg';
		$options['_onepage_imgback_contact'] = mise_get_upload_dir_var('baseurl') . '/2016/12/image-contact.jpg';
		update_option('mise_theme_options', $options);
	}
	add_action( 'pt-ocdi/after_import', 'mise_ocdi_after_import_setup' );
endif;

/* Fix for wp_upload_dir() to return https if the website is SSL */
if ( ! function_exists( 'mise_get_upload_dir_var' ) ) :
	function mise_get_upload_dir_var( $param, $subfolder = '' ) {
		$upload_dir = wp_upload_dir();
		$url = $upload_dir[ $param ];
		if ( $param === 'baseurl' && is_ssl() ) {
			$url = str_replace( 'http://', 'https://', $url );
		}
		return $url . $subfolder;
	}
endif;