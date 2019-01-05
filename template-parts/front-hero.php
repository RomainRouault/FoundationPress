<?php
/*
 * Sub-template for header
 *
 * display all the information between top page and nav
 */
?>
<div class="front-hero grid-x" role="banner">
    
    <div class="grid-container">
        <div class="grid-x align-spaced">
              
            <?php if ( is_active_sidebar( 'header-left-widgets' ) ) : ?>
                 <aside id="adress" class="medium-3 small-12 text-left" role="complementary">
                     <?php dynamic_sidebar( 'header-left-widgets' ); ?>
                 </aside>
             <?php endif; ?>
            </aside>
            <div id="branding" class="medium-6 small-12 text-center">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
            </div>
            <aside id="social-media" class="medium-3 small-12 text-left">
                <?php dynamic_sidebar( 'header-right-widgets' ); ?>
            </aside>
        </div>
    </div>
</div>
