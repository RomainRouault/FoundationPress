<?php
/*
 * Sub-template for header
 *
 * display all the information between top page and nav
 */
?>
<div class="front-hero" role="banner">
    
    <div class="grid-container">
        <div class="grid-x align-spaced">
              
            <?php if ( is_active_sidebar( 'header-left-widgets' ) ) : ?>
                 <aside id="adress" class="cell medium-3 text-left hide-for-small-only" role="complementary">

                     <?php dynamic_sidebar( 'header-left-widgets' ); ?>
                 </aside>
             <?php endif; ?>
            </aside>
            <div id="branding" class="cell medium-6 small-12 text-center">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
            </div>
            <aside id="social-media" class="cell medium-3 text-left hide-for-small-only">
                <?php dynamic_sidebar( 'header-right-widgets' ); ?>
            </aside>
        </div>
    </div>
</div>
