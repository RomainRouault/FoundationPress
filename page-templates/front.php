<?php
/*
Template Name: Front
*/

get_header();


$menu_items = wp_get_nav_menu_items('menu-one-page');

if( $menu_items ) {
foreach ($menu_items as $menu_item ) {
$args = array('p' => $menu_item->object_id, 'post_type' => 'any');
 
global $wp_query;
$wp_query = new wp_query($args);

?>
 
<section <?php post_class('section-divider'); ?> id="<?php echo sanitize_title($menu_item->title); ?>">

<?php 
if ( have_posts() ){
	include(locate_template('page-templates/home-page.php'));
} ?>

</section>


<?php }};

get_footer();
