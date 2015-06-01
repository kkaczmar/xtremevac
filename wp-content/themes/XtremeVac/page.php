<?php get_header(); ?>

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
	<div class="small-12 large-8 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content secondary">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
