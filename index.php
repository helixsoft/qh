<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 */

get_header(); 

///index top portion start here

?>

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



<div class="row-full">

  <div class="row-divider"></div>

</div>

<div class="row-full sub clearfix">

<div class="home_input_section_parts">
<?php $status = isset( $_REQUEST['subscribe'] ) ? $_REQUEST['subscribe'] : false; ?>
<?php if ( $status == 'invalid_email' ) : ?>
    <p>You have entered an invalid e-mail, please try again!</p>
<?php elseif ( $status == 'success' ) : ?>
    <p>Thank you for subscribing! Please check your e-mail to confirm.</p>
<?php else : ?>
<form method="POST">
  <input type="hidden" name="my-form-action" value="subscribe" />
  <input class="home_input_section_first" name="my-email" id="home_txt_sbs" type="text" placeholder="Sign up to our monthly newsletter to get the weekly five with ILQ.net"><input class="home_input_section_second" id="home_bnt_subs" type="submit" value="SUBSCRIBE NOW" >
</form>
<?php endif; ?>
 </div>

<!---Subscribe Now Email Save Script-->

<script>
/*
	$(document).ready(function(e) {

        $('#home_bnt_subs').click( function (){

			var mail_vl=$('#home_txt_sbs').val();

			var mail_i=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

			if(mail_vl==''){

				$('#home_txt_sbs').css({'color':'#F00'})

				return false;

			}

			else if(!mail_vl.match(mail_i)){

					$('#home_txt_sbs').css({'color':'#F00'})

					alert('Enter Valid Email');

					return false;

				}

				$.ajax({

					type: 'post',

					url:'<?php echo get_template_directory_uri(); ?>/subscript_request.php',

					data:{ml:mail_vl},

					success:function(data){

						if(data=='Save'){

							$('#home_txt_sbs').css({'color':'#000000'})

							$('#home_txt_sbs').val('');

						}

					}

				});

			});

    });
*/
</script>



</div>

<div class="row-full">

  <div class="row-divider"></div>

</div>







<div class="body-left">

  <div class="row-full clearfix">

    <div class="category">

      <ul>

        <li><a href="<?php echo site_url('/top-pick/');?>" / style="text-decoration:none;"> Top Picks<span class="purple-circle"></span></a>

        	<!--<input type="radio" class="cat" name="cat" id="r1" /> 

            <label for="r1"><span></span></label> -->

        </li>

        <li><a href="<?php echo site_url('/it-happened/');?>" / style="text-decoration:none;"> It Happened<span class="purple-circle"></a>

          <!-- <input type="radio" class="cat" name="cat" id="r2" /> 

            <label for="r2"><span></span></label> -->

        </li>

        <li><a href="<?php echo site_url('/event/');?>" / style="text-decoration:none;"> Events<span class="purple-circle"></a>

         <!-- <input type="radio" class="cat" name="cat" id="r3" /> 

            <label for="r3"><span></span></label> -->

        </li>

      </ul>

    </div>

    <div class="box-inner box_inner-bg_hm">

           <div class="column">

<?php

//out_about shows on home page

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

 'offset'           => 0,

 'cat'              => '',

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'Top_PIcks',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post );



//get events to find path of image

$event_id = get_the_ID();

$feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($event_id));

$category = get_the_category();

$cat_name=$category[0]->cat_name;

$cat_without=str_replace(' ','',$cat_name);

//get path ends here

?>      

 <?php

 //get picture first time

 if($cnt==1)

 {

 ?>                

        <div class="pic"> 
        	<?php
                                                $url = $feat_image_path;      // Required
                                                $width = 218;                                                                  // Optional. Defaults to '150'
                                                $height = 145;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $feat_image_path  ?>" title="<?php the_title(); ?>" height="145" width="218" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" height="145" width="218" >  
                                            <?php    }
                                            ?>


        </div>

        <h5

        <?php

///assign color by category

if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

//assign color ends here        

        ?>

        >

        <?php

         echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

		<?php the_time('D M j Y')?>

        </h5>

        </div>-->

        

        <a href="<?php the_permalink(); ?>">

            <h4 class="un-top-hover">

             	<?php the_title(); ?>

            </h4>

         </a>

        <div class="cust_hv_dt">

            <p><?php the_content_rss('', TRUE, '', 25); ?>

            </p>

            <div class="see_more_cate">

                     <a class="fancybox-effects-c" href="<?php echo $feat_image_path  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                           <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                     </a>

             </div>

        </div>   

        <div class="small-divider"></div>

        <?php

        }

		else

		{

		?>

        

        <h5 

<?php

//assign category color here

//if cat in entertainment

if($cat_name=='Entertainment')

{

echo "class='purple-font'";

}

//if cat is community

if($cat_name=='Community')

{

echo "class='parrot-font'";

}

//if cat is sports

if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

//assign category color end here

?>        

>

        <?php

        echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

        <?php the_time('D M j Y')?>

        </h5>

        </div>-->

        <a href="<?php the_permalink(); ?>">

            <h4>

            	<?php the_title(); ?>

            </h4>

        </a>

        <div class="small-divider light"></div>

      <?php

		}

		$cnt++; 

		endforeach; ?>        

      </div>

     <!-- <div class="column-divider"></div>-->

      <div class="column box_set_bg">

        <?php

//add it happened post dynamically 

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

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

foreach ( $myposts as $post ) : setup_postdata( $post );



//get events to find path of image

$event_id = get_the_ID();

$feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($event_id));

$category = get_the_category();

$cat_name=$category[0]->cat_name;

$cat_without=str_replace(' ','',$cat_name);

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($pid) );

//get path ends here

?>      

 <?php

 //get picture first time

 if($cnt==1)

 {

 ?>                

        <div class="pic"> 
<?php
                                                $url = $feat_image_path;      // Required
                                                $width = 218;                                                                  // Optional. Defaults to '150'
                                                $height = 145;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $feat_image_path  ?>" title="<?php the_title(); ?>" height="145" width="218" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" height="145" width="218" >  
                                            <?php    }
                                            ?>

        </div>

        <h5 

<?php        

        //show color of category

													if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

													//category color ends here

			

 ?>       

        >

        <?php

         echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

		<?php the_time('D M j Y')?>

        </h5>

        </div>-->

       <a href="<?php the_permalink(); ?>">

            <h4 class="un-top-hover">

            	<?php the_title(); ?>

            </h4>

        </a>

 		  <div class="cust_hv_dt">

            <p><?php the_content_rss('', TRUE, '', 25); ?>

            </p>

                 <div class="see_more_cate">

                     <a class="fancybox-effects-c" href="<?php echo $feat_image_path  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                           <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                     </a>

            	</div>

  			</div>

        <div class="small-divider"></div>

        <?php

        }

		else

		{

		?>

       <h5 

<?php

//show color of category

					                                if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

//show category color ends here

?>       

       >

        <?php

         echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

        <?php the_time('D M j Y')?>

        </h5>

        </div>-->

       <a href="<?php the_permalink(); ?>">

            <h4>

            	<?php the_title(); ?>

            </h4>

        </a>

        <div class="small-divider light"></div>

      <?php

		}

		$cnt++; 

		endforeach;

///its happened post ends here		

		

		//echo "here you add the it happened post";

		?>

      </div>

      <!--<div class="column-divider"></div>-->

      <div class="column">

<?php

//events shows on home page

 $cnt=1;

 $args = array(

 'posts_per_page'   => '4',

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

//get events to find path of image

$event_id = get_the_ID();

$feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($event_id));

$category = get_the_category();

$cat_name=$category[0]->cat_name;

$cat_without=str_replace(' ','',$cat_name);

//get path ends here

?>      

 <?php

 //get picture first time

 if($cnt==1)

 {

 ?>                

        <div class="pic"> 
<?php
                                                $url = $feat_image_path;      // Required
                                                $width = 218;                                                                  // Optional. Defaults to '150'
                                                $height = 145;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $feat_image_path  ?>" title="<?php the_title(); ?>" height="145" width="218" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" height="145" width="218" >  
                                            <?php    }
                                            ?>

        </div>

        <h5 

<?php

//show color of category

					                                if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

//show category color ends here







?>        

        >

        <?php

         echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

		<?php the_time('D M j Y')?>

        </h5>

        </div>-->

        <a href="<?php the_permalink(); ?>">

            <h4 class="un-top-hover">

            	<?php the_title(); ?>

            </h4>

        </a>

       <div class="cust_hv_dt">

            <p><?php the_content_rss('', TRUE, '', 25); ?>

            </p>

                 <div class="see_more_cate">

                     <a class="fancybox-effects-c" href="<?php echo $feat_image_path  ?>" title="<?php the_content_rss('',TRUE,''); ?>"> 

                           <img src="<?php echo get_template_directory_uri(); ?>/images/Out-about-plus_03.jpg" />

                     </a>

                </div>

       </div>

        <div class="small-divider"></div>

        <?php

        }

		else

		{

		?>

        

        <h5 

<?php

//show color of category

					                                if($cat_name=='Entertainment')

													{

													echo "class='purple-font'";

													}

													if($cat_name=='Community')

												    {

												    echo "class='parrot-font'";

												    }

													if($cat_name=='Sports')

													{

												    echo "class='blue-font'";

													}

													if($cat_without=="Art&amp;Culture")

													{

												    echo "class='red-font'";

													}

													if($cat_without=="Food&amp;Dining")

													{

												    echo "class='orange-font'";

													}

													if($cat_without=="QHSensation")

													{

												    echo "class='l_yello-font'";

													}

//show category color ends here



?>        

        >

        <?php

         echo $cat_name;

        ?>

        </h5>

        <!--<div class="clearfix">

        <h5 class="small">

        <?php the_time('D M j Y')?>

        </h5>

        </div>-->

       <a href="<?php the_permalink(); ?>">

            <h4>

            	<?php the_title(); ?>

            </h4>

        </a>

        <div class="small-divider light"></div>

      <?php

		}

		$cnt++; 

		endforeach; ?>        

      </div>

    </div>

  </div>

  

  <!--left body part 1 end-->

  

  <div class="body-left-row-divider"></div>

  <div class="row-full clearfix" >

    <h1 class="spot_movie_cust_title"><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/movie/">Spotlight On Movies</a></h1>

    <div class="box-inner" id="slider_new">

    <?php

	//get viedo from viedos post

 $cnt=1;

 $args_m = array(

 'posts_per_page'   => '10',

 'offset'           => 0,

 'cat'              => '',

 'orderby'          => 'post_date',

 'order'            => 'DESC',

 'include'          => '',

 'exclude'          => '',

 'meta_key'         => '',

 'meta_value'       => '',

 'post_type'        => 'movie',

 'post_mime_type'   => '',

 'post_parent'      => '',

 'post_status'      => 'publish',

 'suppress_filters' => true );

 $myposts = get_posts( $args_m );

foreach ( $myposts as $post ) : setup_postdata( $post ); 

$s_movie_id = get_the_ID();

$s_movie_image_path = wp_get_attachment_url(get_post_thumbnail_id($s_movie_id)); 



 ?> 

      <div class="column movie" >

        <div class="movie-pic">
        	<?php
                                                $url = $s_movie_image_path;      // Required
                                                $width = 185;                                                                  // Optional. Defaults to '150'
                                                $height = 285;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $s_movie_image_path  ?>" title="<?php the_title(); ?>" height="285" width="185" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" height="285" width="185" >  
                                            <?php    }
                                            ?>

        </div>

        <a href="<?php the_permalink(); ?>">

        <h3><?php the_title(); ?></h3>

        </a>

        <div class="date-des clearfix">

        	<!--<p class="movie-date"><?php the_time('D M j Y') ?></p>-->

        	<p><?php the_content_rss('', TRUE, '', 30); ?></p>

        </div>

      </div>

      

      <!--movie column2 end-->

<?php

$cnt++;

endforeach; 

?>     

      

    </div>

  </div>

  <div class="movie-arrow"> <!--<a href="#" class="movie-arrow-left"></a> <a href="#" class="movie-arrow-right"></a> -->

  	<a href="#" class="movie-arrow-left btn-left"></a>

     <a href="#" class="movie-arrow-right btn-right"></a>

  </div>

  <div class="body-left-row-divider arrow"></div>

  

  <!--body second part end-->

  

  <div class="row-full media-box clearfix">

    <h1 class="spot_movie_cust_title"><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/media/">Media</a></h1>

    <div class="video-photo-cont"> 

    <a href="javascript:void(0)" class="video-btn"></a> 

    <!--<a href="javascript:void(0)" class="photo-btn"></a>--> 

    </div>

    

          <div class="box-inner">

               	

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
                		<?php
                                                $url = $video_image_path;      // Required
                                                $width = 156;                                                                  // Optional. Defaults to '150'
                                                $height = 108;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $video_image_path  ?>" title="<?php the_title(); ?>" height="108" width="156" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" height="108" width="156" >  
                                            <?php    }
                                            ?>
        

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

  </div>

  <div class="movie-arrow"> <a href="#" class="movie-arrow-left btn-left-movie"></a> <a href="#" class="movie-arrow-right btn-right-movie"></a> </div>

  <div class="body-left-row-divider arrow"></div>

  

  <!--media box end-->

  

  <div class="row-full clearfix">

    <?php include_once('body-lower-banner.php') ?>

  </div>

</div>

<!--left body esnd-->

<!---See More Catagory script---->

<script>

/*jQuery(document).ready(function() {

    $('.cust_hv_dt').hover(function (){

		$(this).children('.see_more_cate').show()

		},

		function (){

			$(this).children('.see_more_cate').hide()

			});

});*/

</script>

<!----Popup Catgegory---->

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

	get_sidebar();

?>

</div>

<?php	

	

	get_footer();

	?>

