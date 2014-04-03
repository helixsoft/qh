<?php

/**

 * The Template for displaying all event single posts.

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

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
<div class="main-container main-contant clearfix">
    <div class="body-left inner-page">
        <div class="row-full media-box clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="box-inner">
				<div class="event-image-thumb">
					<?php echo get_the_post_thumbnail($post->ID,'full'); ?>
				</div>
                <div class="event_area">
                    <h3><?php the_title(); ?></h3>
                    <!--<p class="small-date"> <?php the_time('D M j,Y')?></p>-->
                    <p class="event-cat contest-cat anc-font"><?php echo $cat;?></p>
                    <p>published by <?php the_author(); ?> </p>
                </div>
                <div class="event_social">
                    <div class="share_button">
                    <?php 
                        $title=get_the_title($post->ID);$link=current_page_url();
                    ?>
                    <?php echo do_shortcode("[hupso title='$title' url='$link']"); ?>
                    </div>
                </div>
            </div>
            <div class="box-inner">
                <div class="meadia-heading-border margin-lower"></div>
            </div>
            <p><?php the_content(); ?></p>
            <div class="box-inner">
                <div class="meadia-heading-border margin-upper"></div>
            </div>
            <div class="event-comments">Leave Comments</div>
            <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo ot_get_option( 'facebook_app_id' );?>";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-comments" data-href="<?php echo get_permalink( $post->ID ); ?>" data-numposts="5" data-width="678"></div>
            <?php endwhile ?>
            <!--seventh end-->
        </div>
        <!--media box end-->
        <div class="row-full clearfix">
            <div class="body-lower-banner">
                <a href="<?php echo ot_get_option( 'ad7_url' );?>"><img src="<?php echo ot_get_option( 'ad7_image' );?>" width="680" height="136"></a>
            </div>
        </div>
    </div>
    <!--left body end-->
    <!--sidebar-->
    <?php get_sidebar();?>
    <!--sidebar end-->
</div>

<?php get_footer(); ?>