<?php
/*
Template Name: home-blog
*/

while(have_posts()) : the_post(); ?>

<div class="grid-x">

	<div class="cell small-12 post-title">
		<h3 data-aos="fade-left"><?php the_title(); ?></h3>
	</div>
	<div class="cell small-12">
		<div class=”post-content”><?php the_content(); ?></div>
	</div>

<?php endwhile; ?>