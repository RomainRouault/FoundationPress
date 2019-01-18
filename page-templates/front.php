<?php
/*
Template Name: Front
*/

get_header('one-page');


$menu_items = wp_get_nav_menu_items('menu-one-page');

if( $menu_items ) {
foreach ($menu_items as $menu_item ) {
$args = array('p' => $menu_item->object_id, 'post_type' => 'any');
 
global $wp_query;
$wp_query = new wp_query($args);

if ($menu_item->title !== 'Contact'){ 
?>
<div id="sections">
	<section <?php post_class('section-divider'); ?> data-magellan-target="<?php echo sanitize_title($menu_item->title); ?>" id="<?php echo sanitize_title($menu_item->title); ?>">
		
		<div class="grid-container">
		<?php 
		if ( have_posts() ){
			include(locate_template('page-templates/home-page.php'));
		} ?>
		</div>

	</section>
</div>

<?php }}};

get_footer();
