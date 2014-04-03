<?php

/*
Template Name: Event
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
<div class="main-container main-contant clearfix">
<div class="row-full clearfix">
<?php
include_once("main_slider.php");
?>
</div>
<div class="body-left inner-page">
  <!-- heading-qatar-awards-start -->
  <div class="inner-page-dot-divider"></div>
  <h1 class="big-title">Event</h1>
  <!-- heading-qatar-awards-end -->
<?php
	 $cnt=1;
 $args = array(
 'posts_per_page'   => '',
 'offset'           => 0,
 'cat'              => '',
 'orderby'          => 'post_date',
 'order'            => 'DESC',
 'include'          => '',
 'exclude'          => '',
 'meta_key'         => '',
 'meta_value'       => '',
 'post_type'        => 'Event',
 'post_mime_type'   => '',
 'post_parent'      => '',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );
?>        
         <!-- images-qatar-awards-start -->
         <?php if($cnt<=2){ ?> 
         <div class="top-border-cinemas-again clearfix">
              <div class="photos-first-part-again">
                <?php
  					      $event_id = get_the_ID();
                  $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($event_id));
                ?>
                <img src="<?php echo $feat_image_path ?>" height="173" width="260"/>
              </div>
              <div class="photos-second-part-again">
              	<span class="glaxy-text"><a href="<?php the_permalink()?>" target='_blank'><?php the_title(); ?></a></span><br />
                <span class="ArtsCulturetext">
                <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
                ?>
				        </span><br />
                <!--<span class="date-text"><?php the_time('D M j Y')?></span><br />-->
                <span class="glaxy-text-more"><?php the_content_rss('', TRUE, '', 44); ?></span>
              </div>
              <div class="box-inner">
                <div class="blog-link">
                  <div class="contest-share">
                      <?php 
                      $title=get_the_title($post->ID);$link=get_permalink($post->ID);
                      ?>
                      <?php echo do_shortcode("[hupso title='$title' url='$link']"); ?>
                  </div>
                  <a href="<?php the_permalink()?>" class="contest-plus"></a>
                </div>
                <div class="blog-lower-border margin-lower"></div>
              </div>
            </div>
            <?php } else { ?>
              <div class='b_see_more' style='display:none'>
              <div class="top-border-cinemas-again clearfix">
              <div class="photos-first-part-again">
                <?php
                   $event_id = get_the_ID();
                  $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($event_id));
                ?>

                    <img src="<?php echo $feat_image_path ?>" height="173" width="260"/>

                </div>

                <div class="photos-second-part-again">

                <span class="glaxy-text"><a href="<?php the_permalink()?>" target='_blank'><?php the_title(); ?></a></span><br />

                <span class="ArtsCulturetext">

                <?php

                $category = get_the_category();

                echo $category[0]->cat_name;

                ?>

        

        </span><br />

                <!--<span class="date-text"><?php the_time('D M j Y')?></span><br />-->

                <span class="glaxy-text-more"><?php the_content_rss('', TRUE, '', 44); ?></span>
              </div>
                <div class="box-inner">
                  <div class="blog-link">
                    <div class="contest-share">
                      <?php 
                      $title=get_the_title($post->ID);$link=get_permalink($post->ID);
                      ?>
                      <?php echo do_shortcode("[hupso title='$title' url='$link']"); ?>
                    </div>
                    <a href="<?php the_permalink()?>" class="contest-plus"></a>
                  </div>
                  <div class="blog-lower-border margin-lower"></div>
                </div>
              </div>
            </div>
            <?php } ?>
                <?php

                if($cnt==2) {?>

            <!--Advertisement Banner-->

            <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads=ot_get_option( 'entertainment_ad8' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads=ot_get_option( 'arts-culture_ad8' );
          }
          else if (strpos($url,'community') !== false) {
            $ads=ot_get_option( 'community_ad8' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads=ot_get_option( 'food-dining_ad8' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads=ot_get_option( 'qh-sensation_ad8' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads=ot_get_option( 'sports_ad8' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads=ot_get_option( 'movie_ad8' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads=ot_get_option( 'about-qh_ad8' );
          }
          else{
            $ads=ot_get_option( 'ad8' );
          }
          
        ?>
        <div class="center-ad">
           <?php echo $ads; ?>


            <div class="box-inner">

               <div class="meadia-heading-border margin-lower"></div>

            </div>
          </div>
            <?php

			

			 }

			 ?>

                

         <!-- images-qatar-awards-end -->

<?php $cnt++; endforeach; ?>           

          <!-- images-qatar-awards-start -->

         

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

    <!--left body end-->

    

    <!--sidebar-->


    <?php get_sidebar();?>

    <!--sidebar end-->

</div>

<?php 

get_footer();

?>