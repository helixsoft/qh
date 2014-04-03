<?php

/*

Template Name: Contest

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
        <h1 class="big-title">Contest</h1>
        <div class="row-full media-box clearfix">

<?php

//code for get total number of post

 $p_t=1;

 $args = array(

 'posts_per_page'   => '100',

 'offset'           => 0,

 'category'         => '',

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Contest',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );$myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$p_t++; endforeach; 

//code for get total number of post end here

$t_p=$p_t-1;

?>        

        

         <?php

		 $count_posts = wp_count_posts('Blog');

$published_posts = $count_posts->publish;

		 $cnt=1;

 $args = array(

 'posts_per_page'   => '100',

 'offset'           => 0,

 'category'         => '',

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Contest',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );$myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

?>

  <div class="box-inner">

            	<div class="column">

                	<div class="contest-page-pic"><?php echo get_the_post_thumbnail($post->ID); ?> </div>

                </div>

                <div class="column contest-desc">

                	<h3><a href="<?php the_permalink() ?>" style="color:#000000;"><?php the_title(); ?></a></h3>

                    <p class="contest-cat red-font">

                    <?php

					$category = get_the_category();

                    echo $category[0]->cat_name;

					?>

                    </p>

                    <!--<p class="small-date"> <?php the_time('D M j Y')?></p>-->

                    <p><?php the_content_rss('', TRUE, '', 44); ?></p>

                </div>

            </div>

            <div class="box-inner">

             <div class="contest-link">
              <div class="contest-share">
                  <?php 
                  $title=get_the_title($post->ID);$link=get_permalink($post->ID);
                  ?>
                  <?php echo do_shortcode("[hupso title='$title' url='$link']"); ?>
                </div>
                <a href="<?php the_permalink()?>" class="contest-plus"></a>
             </div>

               <div class="contest-lower-border"></div>

            </div>

<?php

if($cnt==5)

{

	echo "<div class='b_see_more' style='display:none;'>";

}



if($cnt==$t_p)

{

	echo "</div>";

}

?>            

           

             <!--End Advertisement Banner-->

   <?php $cnt=$cnt+1; endforeach; ?>    

            <!--seventh end-->

            <div class="box-inner">

            	<div class="see-more-border"></div>

                </div>

                <div class="box-inner see-more-button">

                <span id="b_but"><img src="<?php echo get_template_directory_uri(); ?>/images/see-more.png"></span>

            </div>

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

<?php 

get_footer();

?>