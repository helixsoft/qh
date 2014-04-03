<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<!-- Hover Menu -->
<div class="main-container clearfix">
  <?php
  include_once("Entertainment_Slider.php");
  include_once("Art_culture_slider.php");
  include_once("community_slider.php");
  include_once("food_slider.php");
  include_once("qh_slider.php");
  include_once("sport_slider.php");
  ?>
</div>
<div class="main-container main-contant clearfix">
	<div class="row-full clearfix">
	<?php
		include_once("main_slider.php");
	?>
	</div>
	<div class="box-inner">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven' ); ?></h1>
		</header>
		<div class="entry-content">
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven' ); ?></p>
		</div><!-- .entry-content -->
	</div><!-- #content -->
	<?php get_sidebar();?>
</div><!-- #primary -->
<?php get_footer(); ?>