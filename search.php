<?php

/**

 * The template for displaying Search Results pages.

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
<!--index top emds here
<!-- body start -->
<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id(92) );
//echo '$feat_image';
?>
<div class="main-container main-contant clearfix">
<div class="row-full clearfix">
<?php
include_once("main_slider.php");
?>
</div>
  <div class="body-left inner-page">
  <?php if ( have_posts() ) : ?>
    <div class="search-result-text"> Search Result for <span class="s_head"> <?php echo $_GET['s']; ?></span> </div>
  <?php while ( have_posts() ) : the_post(); ?>
         <?php
		get_template_part( 'content', get_post_format() );
		?>
  <?php endwhile; ?>
    <?php else : ?>
        <article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">Nothing Found</h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords</p>
						<div style="margin-left:-22px;">
              <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="text" class="header-serach" name="s" id="s" placeholder="Search">
                <input type="submit" value="" name="submit" id="searchsubmit" class="header-search-btn">
              </form>
            </div>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
    <?php endif; ?>
  </div>
    <!--left body end-->
      <!--sidebar-->
    <?php get_sidebar();?>
    <!--sidebar end-->
</div>
<?php 
get_footer();
?>