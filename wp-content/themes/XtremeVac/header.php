<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		} elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800,700,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>
		
		<!-- New Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-128.png" sizes="128x128" />
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>
	
	<nav class="tab-bar">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
			<h1 class="title"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>

		</section>
	</nav>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
