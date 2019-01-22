<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

    
	<header id="header" class="site-header full-height" role="banner">

        <?php get_template_part( 'template-parts/front-hero' ); ?>
        <div id="nav-container" data-sticky-container data-magellan data-animation-easing="swing" data-animation-duration="800">
            <div data-sticky data-margin-top="0" data-top-anchor="header:bottom" data-sticky-on="small" class="sticky">
                <nav id="main-nav" class="site-navigation top-bar grid-x align-center" role="navigation" data-magellan-target="main-nav">
                    <div id="tab-bar" data-animate="fade-in fade-out" class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
                        <div class="title-bar-left">
                            <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="hamburger hamburger--spring" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>">
                                  <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                  </span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="cell small-12 grid-container">
                        <div class="grid-x full-height align-middle">
                            <div class="cell small-12 top-bar-left">
                                <?php foundationpress_top_bar_r(); ?>
                            </div>
                        </div>
                    </div>
                    <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
                        <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>
