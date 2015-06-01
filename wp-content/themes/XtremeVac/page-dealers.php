<?php
/*
Template Name: Dealers
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

<div class="states">
	<script type="text/javascript">
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
	</script>	
	<div class="row">
		<div class="small-12 hide-for-small columns">
			<h3 class="small-only-text-center">SELECT A STATE</h3>
			<!-- Buttons -->
			<ul class="button-group stack-for-small even-6">
			<li><a href="#Alabama" class="button">Alabama</a></li>
			<li><a href="#Arkansas" class="button">Arkansas</a></li>
			<li><a href="#Connecticut" class="button">Connecticut</a></li>
			<li><a href="#Georgia" class="button">Georgia</a></li>
			<li><a href="#Illinois" class="button">Illinois</a></li>
			<li><a href="#Indiana" class="button">Indiana</a></li>
			</ul>
			
			<ul class="button-group stack-for-small even-6">
			<li><a href="#Iowa" class="button">Iowa</a></li>
			<li><a href="#Kansas" class="button">Kansas</a></li>
			<li><a href="#Kentucky" class="button">Kentucky</a></li>
			<li><a href="#Maine" class="button">Maine</a></li>
			<li><a href="#Maryland" class="button">Maryland</a></li>
			<li><a href="#Minnesota" class="button">Minnesota</a></li>
			</ul>
			
			<ul class="button-group stack-for-small even-6">
			<li><a href="#Mississippi" class="button">Mississippi</a></li>
			<li><a href="#Michigan" class="button">Michigan</a></li>
			<li><a href="#Missouri" class="button">Missouri</a></li>
			<li><a href="#Nebraska" class="button">Nebraska</a></li>
			<li><a href="#NewHampshire" class="button">New Hampshire</a></li>
			<li><a href="#NewJersey" class="button">New Jersey</a></li>
			</ul>
			
			<ul class="button-group stack-for-small even-6">
			<li><a href="#NewYork" class="button">New York</a></li>
			<li><a href="#NorthCarolina" class="button">North Carolina</a></li>
			<li><a href="#Ohio" class="button">Ohio</a></li>
			<li><a href="#Oklahoma" class="button">Oklahoma</a></li>
			<li><a href="#Pennsylvania" class="button">Pennsylvania</a></li>
			<li><a href="#SouthCarolina" class="button">SouthCarolina</a></li>
			</ul>
			
			<ul class="button-group stack-for-small even-6">
			<li><a href="#Tennesee" class="button">Tennesee</a></li>
			<li><a href="#Texas" class="button">Texas</a></li>
			<li><a href="#Vermont" class="button">Vermont</a></li>
			<li><a href="#Virginia" class="button">Virginia</a></li>
			<li><a href="#Washington" class="button">Washington</a></li>
			<li><a href="#Wisconsin" class="button">Wisconsin</a></li>
			</ul>
		</div>
		
		<div class="small-12 show-for-small columns">
			<h3 class="small-only-text-center">SELECT A STATE</h3>
			<!-- Buttons -->
			<ul class="button-group stack">
			<li><a href="#Alabama" class="button">Alabama</a></li>
			<li><a href="#Arkansas" class="button">Arkansas</a></li>
			<li><a href="#Connecticut" class="button">Connecticut</a></li>
			<li><a href="#Georgia" class="button">Georgia</a></li>
			<li><a href="#Illinois" class="button">Illinois</a></li>
			<li><a href="#Indiana" class="button">Indiana</a></li>
			<li><a href="#Iowa" class="button">Iowa</a></li>
			<li><a href="#Kansas" class="button">Kansas</a></li>
			<li><a href="#Kentucky" class="button">Kentucky</a></li>
			<li><a href="#Maine" class="button">Maine</a></li>
			<li><a href="#Maryland" class="button">Maryland</a></li>
			<li><a href="#Minnesota" class="button">Minnesota</a></li>
			<li><a href="#Mississippi" class="button">Mississippi</a></li>
			<li><a href="#Michigan" class="button">Michigan</a></li>
			<li><a href="#Missouri" class="button">Missouri</a></li>
			<li><a href="#Nebraska" class="button">Nebraska</a></li>
			<li><a href="#NewHampshire" class="button">New Hampshire</a></li>
			<li><a href="#NewJersey" class="button">New Jersey</a></li>
			<li><a href="#NewYork" class="button">New York</a></li>
			<li><a href="#NorthCarolina" class="button">North Carolina</a></li>
			<li><a href="#Ohio" class="button">Ohio</a></li>
			<li><a href="#Oklahoma" class="button">Oklahoma</a></li>
			<li><a href="#Pennsylvania" class="button">Pennsylvania</a></li>
			<li><a href="#SouthCarolina" class="button">SouthCarolina</a></li>
			<li><a href="#Tennesee" class="button">Tennesee</a></li>
			<li><a href="#Texas" class="button">Texas</a></li>
			<li><a href="#Vermont" class="button">Vermont</a></li>
			<li><a href="#Virginia" class="button">Virginia</a></li>
			<li><a href="#Washington" class="button">Washington</a></li>
			<li><a href="#Wisconsin" class="button">Wisconsin</a></li>
			</ul>
		</div>
	</div>
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
