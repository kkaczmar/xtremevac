<?php
/*
Template Name: Product
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

<div class="inquire">
	<div class="row">
		<div class="small-12 large-9 columns small-only-text-center">
			<h3>CONTACT FOR QUOTE</h3>
		</div>
		<div class="small-12 large-3 columns text-right small-only-text-center">
			<a href="#" data-reveal-id="myModal"><button class="btn radius">GET QUOTE</button></a>
		</div>
	
		<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
			<h2 id="modalTitle" class="text-center" style="font-weight: 600; margin: 1em 0;">PRODUCT INQUIRY</h2>
			<div class="small-10 large-centered small-centered columns"><?php echo do_shortcode('[contact-form-7 id="56" title="Product Inquiry"]'); ?></div>
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>
