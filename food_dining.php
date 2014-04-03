<?php

/*
Template Name: entertainment
*/
get_header(); ?>
<!-- Hover Menu -->
 <div class="main-container clearfix">
  <?php
//hover navigation
  include_once("Entertainment_Slider.php");
  include_once("Art_culture_slider.php");
  include_once("community_slider.php");
  include_once("food_slider.php");
  include_once("qh_slider.php");
  include_once("sport_slider.php");
//hover navigation ends here  
  ?>
</div>
<!--index top emds here
<!-- body start -->
<div class="main-container main-contant clearfix">
<div class="row-full clearfix">
<?php
include_once("ent_main_slider.php");
?>
</div>
    <div class="row-full clearfix">
    <div class="body-left inner-page">
        <div class="inner-page-dot-divider"></div>
        <h1 class="big-title">Food & Dining</h1>
        <div class="row-full media-box clearfix">
<?php
$idObj = get_category_by_slug('food_dining');
$cat_id = $idObj->term_id;
$total_p=$p_t-1;
//echo $total_p."this is total post";
 $cnt=0;
 $art_culture = array(
 'posts_per_page'   => '100',
 'cat' => $cat_id,
 'orderby'          => 'post_date',
 'order'            => 'DESC',
 'include'          => '',
 'exclude'          => '',
 'meta_key'         => '',
 'meta_value'       => '',
 'post_type' => array( 'It_happened', 'Event','Top_picks'),
 'post_mime_type'   => '',
 'post_parent'      => '',
 'post_status'      => 'publish',
);
 $loop = new WP_Query($art_culture);
 $total=$loop->post_count;
 ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>         
      <?php
      $cat=get_post_type(get_the_ID());
      $cat_sub=str_replace('_',' ',$cat);
      $cat_sub = ucwords($cat_sub);             // HELLO WORLD!
    $cat_sub = ucwords(strtolower($cat_sub));
      $blog_id = get_the_ID();
    $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($blog_id));
    ?>
<?php if($cnt==6) {?>
    <div class='b_see_more' style='display:none'>
<?php } ?>
<?php if ($cnt==4) {?>
  <?php include_once('center-ad.php') ?>
<?php } ?>
<?php if($cnt%2==0){ ?>
         <div class="box-inner">
<?php } ?>
<?php if($cnt==0 || $cnt%2==0){?>
        <div class="column">
<?php }if($cnt==1 || $cnt%2!=0){ ?>
        <div class="column ent-list-cont-second">
<?php } ?>
          <div class="clearfix">
            <div class="list-full-pic ent-list-cont clearfix">
              <img src="<?php echo $feat_image_path ?>" height="215" width="315"/>
              <a href="<?php the_permalink() ?>">
                <div class="list-full-pic-heading"><?php the_title(); ?></div>
              </a>
              <a href="<?php echo $feat_image_path ?>" class="list-full-pic-plus"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png"></a>
            </div>
          </div>
          <div class="ent-box-detail">
            <!--<p class="ent-date"><?php the_time('D M j Y')?></p>-->
            <h4 class="purple-font"><?php echo $cat_sub ?></h4>
            <p><?php the_content_rss('', TRUE, '', 44); ?></p>
          </div>
        </div>
<?php $cnt++;if($cnt%2==0) { ?>
          <div class="meadia-heading-border margin-lower"></div>
          </div>
<?php } ?>
<?php if($cnt==$total) { ?>
<?php if($cnt%2!=0 && $cnt>6) { ?>
  </div>
<?php } ?>
    </div>
<?php } ?>
<?php endwhile; ?>                 
            <!--sixth end-->
            <div class="top-margin">
                <div class="box-inner">
                    <div class="see-more-border"></div>
                 </div>
                    <div class="box-inner see-more-button">
                    <span id="b_but"><img src="<?php echo get_template_directory_uri(); ?>/images/see-more.png"></span>
                </div>
            </div>
            <div class="row-full clearfix">
              <?php include_once('body-lower-banner.php') ?>
            </div>
        </div>
        <!--media box end-->
       </div> 
        <!--sidebar-->
    <?php get_sidebar();?>
    <!--sidebar end-->
        </div>
</div>
<?php 
get_footer();
?>