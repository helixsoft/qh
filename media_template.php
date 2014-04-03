

<?php

/*

Template Name: media

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

    <div class="body-left inner-page">

        <div class="inner-page-dot-divider"></div>

        <div class="row-full media-box clearfix">

        	<h1 class="big-title" style="border-bottom: 0px solid #000;">Media</h1>

            <div class="video-photo-cont">

            	<a href='javascript:void(0)' class="video-btn"></a>

                <!--<a href='javascript:void(0)' class="photo-btn"></a>-->

            </div>

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">TOP PICKS</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon-big.png"></a>-->

                    </div>


    <?php

    //get viedo from viedos post

 $cnt=1;

 $args = array(

 'posts_per_page'   => '10',

 'offset'           => 0,

 'cat'              => '',

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

if($cnt==1)

{

?>



    <div class="column">

                    <div class="media-vid" >

                    <iframe width="500" height="263" id="pla_viedo" src="//www.youtube.com/embed/<?php echo $u_tube_id; ?>" frameborder="0" allowfullscreen></iframe>

                    </div>

                </div> 

                <div class="media_vid_time_update">

                <a href="<?php the_permalink(); ?>">

                <h2 id="title-video"> <?php the_title(); ?> </h2>

                </a>

                <div class="date-des clearfix">

                <!--<div class="the_time_setting_border"><?php the_time('j-m-Y') ?>  </div>-->

                <div id="dis-video">

                <?php the_content_rss('',TRUE,'',50); ?>

                </div>

                </div>

                <div class="vid-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'3:00'?></div>

                </div>

             

<?php

}



if($cnt==2)

{

 echo "<div class='video_home_slider' id='slider_movie_home'>";

}

if($cnt>=2)

{

 ?> 

        

 <div class="column media-thumb-cont"  data-title="<?php echo the_title(); ?>" data-dis="<?php the_content_rss('',TRUE,'',47); ?>" data-url="<?php echo $u_tube_id; ?>">

                    <div class="media-thumb">

                        <img src="<?php echo $video_image_path;  ?>" height="108" width="156" >

                    </div>

                    <h3><?php the_title();?></h3>

                    <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                </div>

 <?php

 }

 if($cnt==10)

 {

     echo "</div>";

 }

 ?>



    <?php

//}

//if($cnt<=2)

//{ 

$cnt++;

//}

    endforeach; 

?>                

                

            </div>

            <!--list first end-->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">ENTERTAINMENT</div>

                    <div class="movie-arrow">

                   <a href="#" class="movie-arrow-left btn-left-movie"></a> 

                   <a href="#" class="movie-arrow-right btn-right-movie"></a>

                   </div>

                </div>

                 <div class='video_home_slider' id='slider_movie_home'>

<?php

///get video of entertainment

 $idObj = get_category_by_slug('entertainment'); 

 $cat_id = $idObj->term_id;

 $cnt=1;

 $args = array(

 'posts_per_page'   => '100',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

?>     

                	<div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title(); ?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                       		 	<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                        </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div>

                    

<?php

$cnt++;

endforeach; 

?>             

  

                </div>

                 

            </div>

            <!--list second end-->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">SPORTS</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-blue.png"></a>-->

                </div>

                <div class="box-inner list">

<?php

///get video of Sports

 $idObj = get_category_by_slug('sports'); 

 $cat_id = $idObj->term_id;

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

?>                

                

                

                	<div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title();?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                        		<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                        </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div>

<?php

$cnt++;

endforeach; 

?>                    

                </div>

            </div>

            <!--list third end-->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">FOOD & DINING</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-orange.png"></a>-->

                </div>

                <div class="box-inner list">

<?php

///get video of food & dining

 $idObj = get_category_by_slug('food_dining'); 

 $cat_id = $idObj->term_id;

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

?>                

                

                	<div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title();?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                        		<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                         </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div>

<?php



$cnt++;

endforeach; 

?> 

                    

                </div>

            </div>

            <!--list fourth end-->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">COMMUNITY</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-green.png"></a>-->

                </div>

                <div class="box-inner list">

<?php

///get video of Community

 $idObj = get_category_by_slug('community'); 

 $cat_id = $idObj->term_id;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

?>                

                <div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title();?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                        		<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                        </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div>

<?php

$cnt++;

endforeach; 



?>                    

                    

                    

                </div>

            </div>

            <!-- fifth end -->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">ARTS & CULTURE</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-red.png"></a>-->

                </div>

                <div class="box-inner list">

<?php

///get video of Art & culture

 $idObj = get_category_by_slug('arts_culture'); 

 $cat_id = $idObj->term_id;

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);

?>                

                    <div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title();?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                        		<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                        </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div>

<?php

$cnt++;

endforeach; 

?>                    

                </div>

            </div>

            <!--sixth end-->

            <div class="box-inner">

            	<div class="box-inner">

                    <div class="meadia-heading-border"></div>

                    <div class="media-heading">QH SENSATION</div>

                    <!--<a href="javascript:void(0)" class="plus-icon-big"><img src="<?php echo get_template_directory_uri(); ?>/images/plus-yellow.png"></a>-->

                </div>

                <div class="box-inner list">

<?php

///get video of Art & culture

 $idObj = get_category_by_slug('qh_sensation'); 

 $cat_id = $idObj->term_id;

  $cat_id = $idObj->term_id;

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => $cat_id,

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Videos',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$viedo_id = get_the_ID();

$video_image_path = wp_get_attachment_url(get_post_thumbnail_id($viedo_id)); 

$content = get_post_meta($post->ID, 'Video Url', true);

$u_tube_id = strstr($content, '?');

$u_tube_id = substr($u_tube_id,3);



?>                

                   <div class="column media-thumb-cont-inner" onclick="play_viedo_media('<?php echo $u_tube_id;  ?>','<?php echo the_title();?>');">

                        <div class="media-thumb">

                        	<!-- <div class="media_thumb_video_hover"></div> -->

                        		<img src="<?php echo $video_image_path;  ?>" width="148" height="102"/>

                        </div>

                        <h3><?php the_title(); ?></h3>

                        <div class="media-time"><?php echo get_field('video_length',$post->ID)!=''?get_field('video_length',$post->ID):'4:00'?></div>

                	</div><?php

$cnt++;

endforeach; 

?>

                </div>

            </div>

            <!--seventh end-->

            <div class="box-inner">

            	<div class="see-more-border"></div>

                </div>

                <div class="box-inner see-more-button">

                <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/images/see-more.png"></a>

            </div>

        </div>

        <!--media box end-->

       

        <!--media box end-->

        <div class="row-full clearfix">

            <div class="body-lower-banner">

                <a href="<?php echo ot_get_option( 'ad7_url' );?>"><img src="<?php echo ot_get_option( 'ad7_image' );?>" width="680" height="136"></a>

            </div>

        </div>

    </div>

    <!--left body end-->

    <!----Script Box Hover--->

    <script>

	jQuery(document).ready(function() {

        jQuery('.media-thumb').hover(function (){

			jQuery(this).children('.media_thumb_video_hover').show()

			},

		function (){

			jQuery(this).children('.media_thumb_video_hover').hide();

			}

		);

		//Bottom To Top Video 

		$('.media-thumb-cont-inner').click(function(event) {

			event.preventDefault();

			$('html, body').animate({scrollTop: 755}, 1200);

        });

    });

	</script>

      <!--sidebar-->


    <?php get_sidebar();?>


    <!--sidebar end-->

</div>

<?php 

get_footer();

?>