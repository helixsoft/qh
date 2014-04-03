<?php

/**

 * The Template for displaying all movie single posts.

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
					<?php echo get_post_meta($post->ID, 'Trailer', true);?>
				</div>
                <div class="event_area">
                    <h3><?php the_title(); ?></h3>
                    <?php
                            $category = get_the_category();
                            $a=array();
                            $k=0;
                            foreach ($category as $key) {
                                $a[$k]=$key->name;
                                $k++;
                            }
                        ?>
                    <p class="event-cat contest-cat e-font"><?php echo implode(",", $a);?></p>
                </div>
            </div>
            <?php the_content(); ?>
            <div class="box-inner">
                <div class="meadia-heading-border margin-lower doted"></div>
                <div class="big-star"></div>
                <p class="movie-desc"><?php echo get_post_meta($post->ID, 'Movie Team Name', true);?></p>
            </div>
            <div class="box-inner">
                <div class="meadia-heading-border margin-lower"></div>
            </div>
            <div class="movie_area">
                <div class="cin_text"><h1>Cinemas</h1></div>
                <?php if(get_field('movie_theaters')): ?>
                    <?php while(has_sub_field('movie_theaters')): ?>
                    <div class="movie_location clearfix">
                        <div class="hall_thumb"><img src="<?php the_sub_field('movie_theater_image');?>"></div>
                        <div class="hall_desc">
                            <h4><?php the_sub_field('movie_theater_name');?></h4>
                            <p class="movie-desc"><?php the_sub_field('movie_theater_address');?></p>
                            <div class="phone-ico"></div>
                            <p class="movie-desc"><?php the_sub_field('movie_theater_phone');?></p>
                            <div class="time-ico"></div>
                            <p class="movie-desc"><?php the_sub_field('movie_theater_timings');?></p>
                        </div>
                    </div>    
                    <?php endwhile; ?> 
                <?php endif; ?>
            </div>
            <div class="movie_area margin-top-20">
                <div class="short_text"><h1>Short List</h1></div>
                <?php $posts = get_field('movie_short_list');
                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="small_hall_thumb margin-right-20 margin-bottom-20"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($page->ID, array('200','150',true)); ?></a></div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>  
            <?php endwhile ?>
            <div class="box-inner">
                <div class="meadia-heading-border margin-lower"></div>
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
            <!--seventh end-->
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

<?php get_footer(); ?>