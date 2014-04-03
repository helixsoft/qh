<?php
/*
Template Name: Blogs
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
        <!--<div class="row-full filter-cont clearfix">
            <h3>Filter</h3>
            <p><a href="#">click here</a> for filtering options</p>
            <div class="filter-icon"><img src="<?php  echo get_template_directory_uri();  ?>/images/filter-icon.png"></div>
        </div>-->
        <h1 class="big-title">Blog</h1>
        <div class="row-full media-box clearfix">
          <?php
          $count_posts = wp_count_posts('Blog');
          $published_posts = $count_posts->publish;
          //echo "this is total post type".$published_posts;
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
           'post_type'        => 'Blog',
           'post_mime_type'   => '',
           'post_parent'      => '',
           'post_status'      => 'publish',
           'suppress_filters' => true );
           $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post );
          ?>        
          <?php
          //show two post if page first time open 
          if($cnt<=2){ ?>    
			      <div class="row-full media-box clearfix">
            <div class="box-inner blog-page">
            	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="blog-cat red-font">
				        <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
                ?>
              </p>
              <!--<p class="blog-date"><?php the_time('D M j Y')?></p>-->
              <p><?php the_content_rss('', TRUE, '', 44); ?></p>
            	<div class="box-inner">
                <div class="blog-pic">
                  <?php
					         $blog_id = get_the_ID();
                    $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($blog_id));
					        ?>
                  <img src="<?php echo $feat_image_path ?>" height="456" width="678"/>
                </div>
              </div>
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
            <!--list first end-->
            </div>
          <?php } else { ?>
	          <div class='b_see_more' style='display:none'>
              <div class="row-full media-box clearfix">
            <div class="box-inner blog-page">
            	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="blog-cat red-font">
				      <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
              ?>
              </p>
              <!--<p class="blog-date"><?php the_time('D M j Y')?></p>-->
              <p><?php the_content_rss('', TRUE, '', 44); ?></p>
            	<div class="box-inner">
                <div class="blog-pic">
                    <?php
					           $blog_id = get_the_ID();
                    $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($blog_id));
					           ?>
                    <img src="<?php echo $feat_image_path ?>" height="456" width="678"/>
                </div>
              </div>
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
            <!--list first end-->
              </div>
	          </div>
          <?php } ?>
          <?php $cnt++; endforeach; ?>             

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
    <!--left body end-->
    </div>
       <!--sidebar-->
    <?php get_sidebar();?>
    <!--sidebar end-->
</div>
<?php 
get_footer();
?>