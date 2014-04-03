<?php

/*

Template Name: Out_About

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

<?php

//code for getting total post

// $cat_id = get_cat_ID('Entertainment');

 $p_t=1;

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

 'post_type'        => 'Out_About',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

$p_t++; 

endforeach;

$t_p=$p_t-1;

//code for getting total post ends here

?>

<?php

// $cat_id = get_cat_ID('Entertainment');

 $cnt=1;

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

 'post_type'        => 'Out_About',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );

 $time_gen=get_the_time('D M j, Y');

 $post_id=get_the_ID();

 $img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );

 $category = get_the_category();

?> 

<?php 

$count_posts = wp_count_posts('Out_About');

$t_posts = $count_posts->publish;

//echo $t_posts."this is the total post";

if($cnt==4)

 {

	 $cnt=1;

 }

if($cnt==1)

{

?>       <div class="content-out-about-again clearfix">

            <div class="out-about-image-first">

                <img src="<?php echo $img_url ?>" width="217" height="144" />

                <div class="community-text"><?php echo $category[0]->cat_name; ?></div>

                 <div class="date-text-out-about"><?php echo $time_gen ?></div>

                 <div class="Mathaf-Knows-Best"><a href="<?php the_permalink()?>" target='_blank'><?php the_title() ?></a></div>	

                 <p class="Mathaf-Knows-Best-again"> <?php the_content_rss('',TRUE,'',20); ?> </p>

                    <a class="fancybox-effects-c" href="<?php echo $img_url  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                        <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                    </a>

                </div>

                <?php

                if($t_posts==$posts_t)

				{

				echo "</div>";	

				}

				

				?>

      <?php

     }    

	  if($cnt==2)

       {      

           ?>     

                <div class="out-about-image-first">

                    <img src="<?php echo $img_url ?>" width="217" height="144" />

                     <div class="sport-text"><?php echo $category[0]->cat_name; ?></div>

                     <div class="date-text-out-about"><?php echo $time_gen ?></div>

                     <div class="Mathaf-Knows-Best"><a href="<?php the_permalink()?>" target='_blank'><?php the_title() ?></a></div>	

                     <p class="Mathaf-Knows-Best-again"> <?php the_content_rss('', TRUE,'',20); ?> </p>

                        <a class="fancybox-effects-c" href="<?php echo $img_url  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                       		 <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                        </a>

                </div>

                <?php

                if($t_posts==$posts_t)

				{

			    	echo "</div>";	

				}

				?>

         <?php

	   }

	    if($cnt==3)

		{

		 ?>       

                <div class="out-about-image-first">

                    <img src="<?php echo $img_url ?>" width="217" height="144" />

                     <div class="community-text"><?php echo $category[0]->cat_name; ?></div>

                     <div class="date-text-out-about"><?php echo $time_gen ?></div>

                     <div class="Mathaf-Knows-Best"><a href="<?php the_permalink()?>" target='_blank'><?php the_title() ?></a></div>	

                     <p class="Mathaf-Knows-Best-again"><?php the_content_rss('',TRUE,'', 20); ?></p>

                        <a class="fancybox-effects-c" href="<?php echo $img_url  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                       		 <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                        </a>

                    </div>

              </div>

                

         <?php

		}

if($posts_t==9)

{

	echo "<div class='b_see_more' style='display:none;'>";

}

if($posts_t==$t_p)

{

	echo "</div>";

}

?>  

         <?php

		 if($posts_t==6)

		 {

		 ?>

         	<div class="red-bull-images-again clearfix">

              <img src="<?php echo get_template_directory_uri(); ?>/images/red-bull-image_03.jpg" />                    

           </div>

         <?php

		 }

		 ?>

  <?php

  $posts_t++;

 $cnt++; 

 endforeach; 

 ?>             

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

    <div class="sidebar">

    <?php get_sidebar();?>

    </div>

    <!--sidebar end-->

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