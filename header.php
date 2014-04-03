<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.jpg" />
<!-- StyleSheets -->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- jQuery -->

<?php 
  $url=curPageURL();
  if (strpos($url,'entertainment') !== false) {
    $ads=ot_get_option( 'entertainment_header1' );
  }
  else if (strpos($url,'arts-culture') !== false) {
    $ads=ot_get_option( 'arts-culture_header1' );
  }
  else if (strpos($url,'community') !== false) {
    $ads=ot_get_option( 'community_header1' );
  }
  else if (strpos($url,'food-dining') !== false) {
    $ads=ot_get_option( 'food-dining_header1' );
  }
  else if (strpos($url,'qh-sensation') !== false) {
    $ads=ot_get_option( 'qh-sensation_header1' );
  }
  else if (strpos($url,'sports') !== false) {
    $ads=ot_get_option( 'sports_header1' );
  }
  else if (strpos($url,'movie') !== false) {
    $ads=ot_get_option( 'movie_header1' );
  }
  else if (strpos($url,'about-qh') !== false) {
    $ads=ot_get_option( 'about-qh_header1' );
  }
  else{
    $header=ot_get_option( 'header1' );
  }
  echo $header;
?>
 
<?php

wp_head();

?>
    <!---Slider Main Top---->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style2.css" />
<style>

	ul.lof-main-wapper li {

		position:relative;	

	}

</style>




<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />

</head>

<!--calender pop up start here!-->
    <div id="cal_cont" style="display:none">
        <div class="scroll-popup clearfix" id="light_box_calender" ></div>
        <!--<div class="main-container" class="popup-full-cont" id="calend_pop_up"  >-->
            <div class="popup-contant">
                <a href="#" class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/cross.png" onClick="close_calender_pop();"></a>
                <div class="calender-head-cont clearfix">
                    <span id="custom-prev" class="custom-prev left-arrow fc-button-inner"></span>
                    <span id="custom-next" class="custom-next right-arrow"></span>
                    <div class="cal-row clearfix">
                        <h2>EVENTS CALENDAR</h2>
                    </div>
                    <div class="cal-row clearfix">
                        <h3><span id="custom-month" class="custom-month"></span>&nbsp;<span id="custom-year" class="custom-year"></span></h3>
                    </div>
                </div>
                <div class="custom-calendar-wrap custom-calendar-full">
                    <div id="calendar" class="fc-calendar-container "></div>
                </div>
                 <script type="text/javascript">
                   
                    var codropsEvents = {
                <?php
                                 $events = array(
                                 'posts_per_page'   => '-1',
                                 'offset'           => 0,
                                 'cat'              => '',
                                 'orderby'          => 'post_date',
                                 'post_type'        => 'event',
                                 'post_status'      => 'publish',
                                 'meta_key' => 'event_date',
                                 'suppress_filters' => true );
                                 $myposts = get_posts( $events );
                                 foreach ( $myposts as $post ) : setup_postdata( $post );
                                    $link=get_permalink(get_the_ID() );
                                    $date=get_field('event_date',get_the_ID());
                                    // extract Y,M,D
                                    $y = substr($date, 0, 4);
                                    $m = substr($date, 4, 2);
                                    $d = substr($date, 6, 2);
                                     
                                    // create UNIX
                                    $time = strtotime("{$d}-{$m}-{$y}");
                                     
                                    // format date (23/11/1988)
                                    $data=date('m-d-Y', $time);
                                    $title=get_the_title(get_the_ID());

                                    $category = get_the_category(get_the_ID());
                                    $cat=$category[0]->cat_name;
                                    if($cat=='Entertainment') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#870044\">".$title."</a>',";
                                    }
                                    elseif($cat=='Art &amp; Culture') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#FF0000\">".$title."</a>',";
                                    }
                                    elseif($cat=='Community') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#74cf3f\">".$title."</a>',";
                                    }
                                    elseif($cat=='Food &amp; Dining') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#ff9001\">".$title."</a>',";
                                    }
                                    elseif($cat=='QH Sensation') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#d0bf07\">".$title."</a>',";
                                    }
                                    elseif($cat=='Sports') {
                                        echo "'$data' : '<a href=\"".$link."\" style=\"color:#016dff\">".$title."</a>',";
                                    }
                                    else{
                                       echo "'$data' : '<a href=\"".$link."\">".$title."</a>',"; 
                                    }
                                 endforeach;
                            ?>
                    };
                </script>
            </div>
        <!--</div>-->
    </div>

<!--calender popup ends here-->            

<div class="popup-full-cont" id="cont_pop_up" style="display:none;" >



       

    </div>

<body>



	<!-- header start -->
	<div class="main">
	<div class="main-container">

    	<div class="top-full-ad">
        <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads=ot_get_option( 'entertainment_ad1' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads=ot_get_option( 'arts-culture_ad1' );
          }
          else if (strpos($url,'community') !== false) {
            $ads=ot_get_option( 'community_ad1' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads=ot_get_option( 'food-dining_ad1' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads=ot_get_option( 'qh-sensation_ad1' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads=ot_get_option( 'sports_ad1' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads=ot_get_option( 'movie_ad1' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads=ot_get_option( 'about-qh_ad1' );
          }
          else{
            $ads=ot_get_option( 'ad1' );
          }
          echo $ads;
        ?>
        	

        </div>

        <div class="header-full-cont">

        	<div class="header-upper-cont clearfix">
                <div class="float-left top-headerpart1">
            	<div class="header-row clearfix">

                     <a href="<?php echo site_url();?>">

                	 <h2 class="column"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></h2>

                     </a>

                    <div class="column blog-bg">

                    	<div class="blog-cont" >

                    		<div class="blog-heading"><a href="<?php echo site_url('/blog/');?>"><h3>Blog</h3></a></div>

                            <div class="blog_slider_cont_home" id="slider_bolog_home" style="display:none">

                            <?php

								 $args_blog_home = array(

								 'posts_per_page'   => '3',

								 'offset'           => 0,

								 'cat' 				=> '',

								 'orderby'          => 'post_date',

								 'post_type'        => 'blog',

								 'post_status'      => 'publish',

								 'suppress_filters' => true );

								 $myposts = get_posts( $args_blog_home );

								 foreach ( $myposts as $post ) : setup_postdata( $post );

							?>

                            <?php

								$post_id = get_the_ID();

								$f_img_src = wp_get_attachment_url( get_post_thumbnail_id($post_id));

							?>
                            <div class="blog-items">
                                <div class="blog-pic">
                                    <?php
                                        $url = $f_img_src;      // Required
                                        $width = 100;                                                                  // Optional. Defaults to '150'
                                        $height = 100;                                                                 // Optional. Defaults to '150'
                                        $crop = true;                                                                  // Optional. Defaults to 'true'
                                        $retina = false;                                                               // Optional. Defaults to 'false'

                                    $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                    ?>
                                	<img src="<?php echo $image['url']; ?>" height="100" width="100">
                                </div>
                                <div class="blog-detail">
                                	<h5> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>
                                    <!--<div class="blog-date"><?php the_time('j-m-Y')?></div>-->
                                    <p> <?php the_content_rss('', TRUE, '', 20); ?> </p>
                                    <!--<p class="blog-time"><?php the_time('M j, Y g:i A')?></p>-->
                                </div>
                            </div>    
                           <?php endforeach; ?> 

                            </div>

                            <div class="blog-arrow">

                                	<a href="#" class="blog-arrow-left btn-left-blog"></a>

                                    <a href="#" class="blog-arrow-right btn-right-blog"></a>

                            </div> 

                        </div>                        
                        <div class="twitter-cont">
                        	<div class="twitter-heading"><h3>Twitter</h3></div>
                        	<div class="twitter-detail clearfix" id="example1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-row">
                	<div class="header-social-cont">
                    	<a href="https://www.facebook.com/QatarHappening" class="social" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png"></a>
                        <a href="https://twitter.com/QatarHappening" class="social" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png"></a>
                        <a href="#" class="social"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png"></a>
                    </div>

                    <div class="search_form">
                        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" class="header-serach" name="s" id="s" placeholder="Search">
                            <input type="submit" value="" name="submit" id="searchsubmit" class="header-search-btn">
                        </form>
                    </div>
                </div>
                </div>
                <div class="float-left top-headerpart2">
                <div class="column header-right-ad">
         <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads=ot_get_option( 'entertainment_ad2' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads=ot_get_option( 'arts-culture_ad2' );
          }
          else if (strpos($url,'community') !== false) {
            $ads=ot_get_option( 'community_ad2' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads=ot_get_option( 'food-dining_ad2' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads=ot_get_option( 'qh-sensation_ad2' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads=ot_get_option( 'sports_ad2' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads=ot_get_option( 'movie_ad2' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads=ot_get_option( 'about-qh_ad2' );
          }
          else{
            $ads=ot_get_option( 'ad2' );
          }
          echo $ads;
        ?>
        </div>
                </div>
            </div>



            <div class="nav-cont clearfix">

			<?php

            wp_nav_menu('main');

            ?>

            </div>



            <!-- End Of Navigation -->



        </div>



    </div>

   