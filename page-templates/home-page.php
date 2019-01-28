<?php
/*
Template Name: home-page
*/

while(have_posts()) : the_post(); ?>

<div class="grid-x">

	<div class="cell small-12 medium-6 post-title">
		<h3 data-aos="fade-left"><?php the_title(); ?></h3>
		<div class="page_thumbnail align-center" data-aos="fade-up">
			<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail() ;
				} 
			?>
		</div>
	</div>
	<div class="cell small-12 medium-6">
		<div class=”post-content”><?php the_content(); ?></div>
	</div>

<?php endwhile; ?>