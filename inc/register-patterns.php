<?php
/**
 * Block pattern registration.
 *
 * @package Extendable
 */

if ( ! function_exists( 'extendable_register_block_patterns' ) ) {
	/**
	 * Registers block patterns.
	 *
	 * @since 2.0.22
	 * @return void
	 */
	function extendable_register_block_patterns() {
		$block_patterns = array(
			'footer-call-to-action-dark' => array(
				'title'      => esc_html__( 'Dark Footer, Call to Action', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-call-to-action' => array(
				'title'      => esc_html__( 'Footer, Call to Action', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-logo-desc-two-nav' => array(
				'title'      => esc_html__( 'Footer with logo and two column nav', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-default' => array(
				'title'      => esc_html__( 'Footer (Logo, Copyright, Social)', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-logo-nav' => array(
				'title'      => esc_html__( 'Footer, Logo and Navigation TEST', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-offset-heading-buttons-dark' => array(
				'title'      => esc_html__( 'Dark Footer with offset heading and buttons', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-offset-heading-buttons-primary' => array(
				'title'      => esc_html__( 'Footer with offset heading and buttons', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'footer-offset-heading-buttons' => array(
				'title'      => esc_html__( 'Footer with offset heading and buttons (Primary)', 'extendable' ),
				'categories' => array( 'footer' ),
				'blockTypes' => array( 'core/template-part/footer' ),
			),
			'general-cta' => array(
				'title'      => esc_html__( 'Call to action', 'extendable' ),
				'categories' => array( 'text' ),
			),
			'general-three-boxes' => array(
				'title'      => esc_html__( 'Featured Three boxes with text, image.', 'extendable' ),
				'categories' => array( 'columns' ),
			),
			'header-default' => array(
				'title'      => esc_html__( 'Header (Logo, Site Title, Navigation)', 'extendable' ),
				'categories' => array( 'header' ),
				'blockTypes' => array( 'core/template-part/header' ),
			),
			'header-title-nav-button' => array(
				'title'      => esc_html__( 'Header (Site Title, Navigation, Button)', 'extendable' ),
				'categories' => array( 'header' ),
				'blockTypes' => array( 'core/template-part/header' ),
			),
			'header-title-social-nav' => array(
				'title'      => esc_html__( 'Header (Site Title, Social, Navigation)', 'extendable' ),
				'categories' => array( 'header' ),
				'blockTypes' => array( 'core/template-part/header' ),
			),
			'hidden-404' => array(
				'title'    => esc_html__( '404 error content.', 'extendable' ),
				'inserter' => false,
			),
			'hidden-no-products' => array(
				'title'    => esc_html__( 'No products', 'extendable' ),
				'inserter' => false,
			),
			'hidden-no-results' => array(
				'title'    => esc_html__( 'No results', 'extendable' ),
				'inserter' => false,
			),
			'hidden-search' => array(
				'title'    => esc_html__( 'Search', 'extendable' ),
				'inserter' => false,
			),
			'hidden-woo-related-products' => array(
				'title'    => esc_html__( 'Related-Products', 'extendable' ),
				'inserter' => false,
			),
			'posts-1-col' => array(
				'title'       => esc_html__( 'List of posts, 1 column', 'extendable' ),
				'categories'  => array( 'query' ),
				'blockTypes'  => array( 'core/query' ),
			),
		);

		foreach ( $block_patterns as $block_pattern => $properties ) {
			$pattern_content = '';
			$pattern_file    = get_theme_file_path( '/patterns/' . $block_pattern . '.php' );
			if ( file_exists( $pattern_file ) ) {
				ob_start();
				include $pattern_file;
				$pattern_content = ob_get_clean();
			}

			register_block_pattern(
				'extendable/' . $block_pattern,
				array(
					'title'       => $properties['title'],
					'content'     => $pattern_content,
					'categories'  => $properties['categories'],
					'blockTypes'  => $properties['blockTypes'],
				)
			);
		}
	}
}
add_action( 'init', 'extendable_register_block_patterns', 9 );


