<?php

/*
Template Name: it_happened
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
include_once("main_slider.php");
?>
</div>
    <div class="body-left inner-page">
        <div class="inner-page-dot-divider"></div>
        <h2 class="title-top-picks">IT HAPPENED</h2>
        <h2 class="title-top-picks-border"></h2>

<?php
 $cnt=0;
 $posts_t=1;
 $args = array(
 'posts_per_page'   => '100',
 'offset'           => 0,
 'cat'              => '',
 'orderby'          => 'post_date',
 'order'            => 'DESC',
 'include'          => '',
 'exclude'          => '',
 'meta_key'         => '',
 'meta_value'       => '',
 'post_type'        => 'It_happened',
 'post_mime_type'   => '',
 'post_parent'      => '',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts( $args );
$total=sizeof($myposts);
foreach ( $myposts as $post ) : setup_postdata( $post );
 $time_gen=get_the_time('D M j, Y');
 $post_id=get_the_ID();
 $img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
 $category = get_the_category();
?> 
<?php 
$count_posts = wp_count_posts('Out_About');
$t_posts = $count_posts->publish;
?>
<?php if($cnt==6) {?>
    <div class='b_see_more' style='display:none'>
<?php } ?>
<?php if($cnt%3==0){ ?>
          <div class="content-out-about-again clearfix">
<?php } ?>
            <div class="out-about-image-first">
                <img src="<?php echo $img_url ?>" width="217" height="144" />
                <div class="community-text"><?php echo $category[0]->cat_name; ?></div>
                <!--<div class="date-text-out-about"><?php echo $time_gen ?></div>-->
                <div class="Mathaf-Knows-Best"><a href="<?php the_permalink()?>" target='_blank'><?php the_title() ?></a></div> 
                <p class="Mathaf-Knows-Best-again"> <?php the_content_rss('',TRUE,'',20); ?> </p>
                <a class="fancybox-effects-c" href="<?php echo $img_url  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 
                  <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />
                </a>
            </div>
<?php $cnt++;if($cnt%3==0) { ?>
          </div>
<?php } ?>
<?php if($cnt==$total) { ?>
<?php if($cnt%3!=0 && $cnt>6) { ?>
  </div>
<?php } ?>
    </div>
<?php } ?>
<?php endforeach; ?>             
          <!--sixth end-->
          <div class="box-inner">
            <div class="see-more-border"></div>
          </div>
          <div class="box-inner see-more-button">
              <span id="b_but"><img src="<?php echo get_template_directory_uri(); ?>/images/see-more.png"></span>
          </div>
          <!--media box end-->
          <div class="row-full clearfix">
            <?php include_once('body-lower-banner.php') ?>
          </div>
          
      </div>
        <?php get_sidebar();?>
    </div>  
</div>
<script>
$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,
				openEffect : 'none',
				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});
</script>
<?php 
get_footer();
?>