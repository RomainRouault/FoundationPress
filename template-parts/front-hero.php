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
    </div>
    <div class="bottom-footer">
        <a href="#menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
    </div>
</div>
