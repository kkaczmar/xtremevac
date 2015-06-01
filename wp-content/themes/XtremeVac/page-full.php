<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div id="title-bar">
	<header>
		<div class="row">
			<div class="large-12 columns">
				<h1 class="entry-title small-only-text-center"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
</div>

<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content secondary">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
