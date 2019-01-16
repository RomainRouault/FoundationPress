<?php
/*
 * Sub-template for header
 *
 * display all the information between top page and nav
 */
?>
<div class="front-hero" role="banner">
    <div class="black-overlay grid-x align-middle align-center full-height">
        <div class="hero-container grid-x cell align-spaced">
            <?php if ( is_active_sidebar( 'header-left-widgets' ) ) : ?>
                 <aside class="adress text-left show-for-large" role="complementary">

                     <?php dynamic_sidebar( 'header-left-widgets' ); ?>
                 </aside>
            <?php endif; ?>
            <div id="branding" class="cell large-6 medium-12 grid-x">
                <div>
                    <h1 class="head-title text-left"><?php bloginfo( 'name' ); ?></h1>
                    <h2 class="subheader text-right"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'header-right-widgets' ) ) : ?>
                <aside class="social-media show-for-large">
                    <?php dynamic_sidebar( 'header-right-widgets' ); ?>
                </aside>
             <?php endif; ?>
        </div> 
        <div class="bottom-footer grid-x cell align-center" data-magellan data-animation-easing="swing" data-animation-duration="800" data-offset="-27">
            <a class="angle-down" href="#nav-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M24.5,12.399c0-6.627-5.373-12-12-12s-12,5.373-12,12s5.373,12,12,12S24.5,19.026,24.5,12.399z M6.495,10.831L7.91,9.417
                l4.59,4.574l4.579-4.574l1.416,1.414L12.5,16.819C12.5,16.819,6.495,10.831,6.495,10.831z"/></svg>
            </a>
        </div>
   
    </div>
</div>