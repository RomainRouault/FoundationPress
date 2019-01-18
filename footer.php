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

<footer class="footer" id="contact" data-magellan-target="contact">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell grid-x small-12">
                <h3 data-aos="fade-top">Contact</h3>
            </div>
            <div class="footer-content grid-x cell small-12">
                <div class="cell small-12" id="contact-text" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1500">
                    <?php dynamic_sidebar( 'footer-top-widgets' ); ?>
                </div>
            	<div class="cell medium-4 small-12 text-left adress">
                	<?php dynamic_sidebar( 'footer-left-widgets' ); ?>
            	</div>
            	<div class="cell medium-8 small-12 text-left" id="contact-form">
                	<?php dynamic_sidebar( 'footer-right-widgets' ); ?>
            	</div>
            </div>
            <div class="cell grid-x small-12 align-center social-media">
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