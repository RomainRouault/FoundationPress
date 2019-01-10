<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="grid-container">
        <div class="grid-x">
        	<div class="cell medium-3 small-12 text-left">
            	<?php dynamic_sidebar( 'footer-left-widgets' ); ?>
        	</div>
        	<div class="cell medium-9 small-12 text-left">
            	<?php dynamic_sidebar( 'footer-right-widgets' ); ?>
        	</div>
        </div>
        <div class="grid-x align-center">
        	<?php dynamic_sidebar( 'footer-bottom-widgets' ); ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>