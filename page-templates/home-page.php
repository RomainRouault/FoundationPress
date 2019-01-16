<?php
/*
Template Name: home-page
*/

while(have_posts()) : the_post(); ?>

<div class="grid-x">

	<div data-aos="fade-left" class="cell small-12 medium-6">
		<h3 class=”post-title”><?php the_title(); ?></h3>
	</div>
	<div class="celle small-12 medium-6">
		<div class=”post-content”><?php the_content(); ?></div>
	</div>

<?php endwhile; ?>