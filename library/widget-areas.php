<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {

		register_sidebar(
			array(
				'id'            => 'header-left-widgets',
				'name'          => __( 'header left widgets', 'foundationpress' ),
				'description'   => __( 'Widget affichés dans la partie gauche de l\'en tête', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'header-right-widgets',
				'name'          => __( 'header right widgets', 'foundationpress' ),
				'description'   => __( 'Widget affichés dans la partie droite de l\'en tête', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-left-widgets',
				'name'          => __( 'Footer left widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-right-widgets',
				'name'          => __( 'Footer right widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-bottom-widgets',
				'name'          => __( 'Footer bottom widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-top-widgets',
				'name'          => __( 'Footer top widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);

	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
