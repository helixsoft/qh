<?php

/**

 * The Sidebar containing the main widget area.

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */
?>
    <div class="sidebar">
    	<div class="row-sidebar">
      	<?php 
      		$ext=pathinfo(ot_get_option( 'reader_image' ), PATHINFO_EXTENSION); 
          if($ext!='swf'){
      	?>
        <img src="<?php echo ot_get_option( 'reader_image' );?>" width="268" height="276">
        <?php } else { ?>
          <object id="flashcontent" 
              classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
              width="268px" 
              height="276px">
              <param name="movie" value="<?php echo ot_get_option( 'reader_image' );?>" />
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" 
                      data="<?php echo ot_get_option( 'reader_image' );?>" 
                      width="268px" 
                      height="276px">
              <!--<![endif]-->
             
                <p>
                  flash is disabled on your browser
                </p>
             
              <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
             
            </object>
        <?php } ?>
      </div>
      <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads_url=ot_get_option( 'entertainment_ad5_url' );
            $ads_image=ot_get_option( 'entertainment_ad5_image' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads_url=ot_get_option( 'arts-culture_ad5_url' );
            $ads_image=ot_get_option( 'arts-culture_ad5_image' );
          }
          else if (strpos($url,'community') !== false) {
            $ads_url=ot_get_option( 'community_ad5_url' );
            $ads_image=ot_get_option( 'community_ad5_image' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads_url=ot_get_option( 'food-dining_ad5_url' );
            $ads_image=ot_get_option( 'food-dining_ad5_image' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads_url=ot_get_option( 'qh-sensation_ad5_url' );
            $ads_image=ot_get_option( 'qh-sensation_ad5_image' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads_url=ot_get_option( 'sports_ad5_url' );
            $ads_image=ot_get_option( 'sports_ad5_image' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads_url=ot_get_option( 'movie_ad5_url' );
            $ads_image=ot_get_option( 'movie_ad5_image' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads_url=ot_get_option( 'about-qh_ad5_url' );
            $ads_image=ot_get_option( 'about-qh_ad5_image' );
          }
          else{
            $ads_url=ot_get_option( 'ad5_url' );
            $ads_image=ot_get_option( 'ad5_image' );
          }
          //arts-culture
        ?>
      <div class="row-sidebar">
      <a href="<?php echo $ads_url;?>">
	     <?php 
          $ext=pathinfo($ads_image, PATHINFO_EXTENSION); 
          if($ext!='swf'){
        ?>
        <img src="<?php echo $ads_image;?>" width="268" height="226">
        <?php } else { ?>
          <object id="flashcontent" 
              classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
              width="268px" 
              height="226px">
              <param name="movie" value="<?php echo $ads_image;?>" />
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" 
                      data="<?php echo $ads_image;?>" 
                      width="268px" 
                      height="226px">
              <!--<![endif]-->
             
                <p>
                  flash is disabled on your browser
                </p>
             
              <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
             
            </object>
        <?php } ?>
        </a>
      </div>
      <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads_url=ot_get_option( 'entertainment_ad6_url' );
            $ads_image=ot_get_option( 'entertainment_ad6_image' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads_url=ot_get_option( 'arts-culture_ad6_url' );
            $ads_image=ot_get_option( 'arts-culture_ad6_image' );
          }
          else if (strpos($url,'community') !== false) {
            $ads_url=ot_get_option( 'community_ad6_url' );
            $ads_image=ot_get_option( 'community_ad6_image' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads_url=ot_get_option( 'food-dining_ad6_url' );
            $ads_image=ot_get_option( 'food-dining_ad6_image' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads_url=ot_get_option( 'qh-sensation_ad6_url' );
            $ads_image=ot_get_option( 'qh-sensation_ad6_image' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads_url=ot_get_option( 'sports_ad6_url' );
            $ads_image=ot_get_option( 'sports_ad6_image' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads_url=ot_get_option( 'movie_ad6_url' );
            $ads_image=ot_get_option( 'movie_ad6_image' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads_url=ot_get_option( 'about-qh_ad6_url' );
            $ads_image=ot_get_option( 'about-qh_ad6_image' );
          }
          else{
            $ads_url=ot_get_option( 'ad6_url' );
            $ads_image=ot_get_option( 'ad6_image' );
          }
          //arts-culture
        ?>       
      <div class="row-sidebar">
        <a href="<?php echo $ads_url;?>">
       <?php 
          $ext=pathinfo($ads_image, PATHINFO_EXTENSION); 
          if($ext!='swf'){
        ?>
        <img src="<?php echo $ads_image;?>" width="268" height="205">
        <?php } else { ?>
          <object id="flashcontent" 
              classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
              width="268px" 
              height="205px">
              <param name="movie" value="<?php echo $ads_image;?>" />
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" 
                      data="<?php echo $ads_image;?>" 
                      width="268px" 
                      height="205px">
              <!--<![endif]-->
             
                <p>
                  flash is disabled on your browser
                </p>
             
              <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
             
            </object>
        <?php } ?>
        </a>
      </div>
      <div class="row-sidebar" >
        <?php include('include/calender-widget/calender_cust_widget.php'); ?>
      </div>
      <div class="row-sidebar">
      <?php
		    $idObj = get_category_by_slug('featured_issue'); 
        $cat_id = $idObj->term_id;
			  $args_issue_side = array(
			   'posts_per_page'   =>'1',
			   'offset'           => 0,
			   'cat' 				=> $cat_id,
			   'orderby'          => 'post_date',
			   'post_type'        => 'issue',
			   'post_status'      => 'publish',
			   'suppress_filters' => true );
			  $myposts = get_posts( $args_issue_side );
			  foreach ( $myposts as $post ) : setup_postdata( $post );
				$post_id = get_the_ID();
				$img_url = wp_get_attachment_url( get_post_thumbnail_id($post_id));
		  ?>            
        <div class="row-sidebar-inner">
          <div class="sidebar-small-pic"><img src="<?php echo $img_url; ?>" width="98" height="65"></div>
          <div class="column">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_content_rss('', TRUE, '', 12); ?></p>
          </div>
          <div class="small-divider light"></div>
        </div>
      <?php endforeach; ?>
      <!-- show contest -->
        	<div class="row-sidebar-inner">
            <div class="sidebar-small-pic"><img src="<?php echo get_bloginfo('template_directory') . '/images/'.'issues.jpg'?>" width="98" height="65"></div>
            <div class="column">
              <h4><a href="<?php echo site_url('/issues/'); ?>">Issues</a></h4>
              <p>QH all year round! Reminisce & see what you've missed.</p>
            </div>
            <div class="small-divider light"></div>
          </div>
          <div class="row-sidebar-inner">
            <div class="sidebar-small-pic"><img src="<?php echo get_bloginfo('template_directory') . '/images/'.'contest.jpg'?>" width="98" height="65"></div>
            <div class="column">
              <h4><a href="<?php echo site_url('/contests/'); ?>">Contests</a></h4>
              <p>It's a hashtag that lives up to its name...#QHInvites. Get Invited.</p>
            </div>
            <div class="small-divider light"></div>
          </div>
          <div class="row-sidebar-inner">
            <div class="sidebar-small-pic"><img src="<?php echo get_bloginfo('template_directory') . '/images/'.'advertise.jpg'?>" width="98" height="65"></div>
            <div class="column">
              <h4><a class="fancybox" href="#inline" >Advertise</a></h4>
              <p>Events, restaurants, & more...Get the word out with QH magazine.</p>
            </div>
            <div class="small-divider light"></div>
          </div>
          <div id="inline" style="display:none;">
              <div class="employment-form">
                <h1 style="color:#fe7801;">ADVERTISE</h1>
                <p>Advertising with QH will highlight your brand, circulating 40,000 copies a month while targeting expatriates and Qataris-alike with multiple interests and backgrounds. Maximum exposure will be all yours with the number one ‘Happening’ Magazine in Qatar.  Not to mention our heavy online presence; operating strong, engaging, and fun social media coverage.</p>
                <h2>GET IN TOUCH</h2> 
                <?php echo do_shortcode( '[contact-form-7 id="1568" title="Advertise"]' ); ?>
              </div>
          </div>
          <div class="row-sidebar-inner">
            <div class="sidebar-small-pic"><img src="<?php echo get_bloginfo('template_directory') . '/images/'.'contribute.jpg'?>" width="98" height="65"></div>
            <div class="column">
              <h4><a class="fancybox" href="#inlinec">Contribute</a></h4>
              <p>Be a part of the 'Happening' & join the QH Community…</p>
            </div>
            <div class="small-divider light"></div>
          </div>
          <div id="inlinec" style="display:none;">
              <div class="employment-form">
                <h1 class="anc-font">CONTRIBUTE</h1>
                <p>Qatar Happenings are endless without a dull moment in sight! Restaurants, events, spa's, news, and more...we want to hear your take on things! Send us your thoughts and reviews and you may find yourself featured in our next issue. Be creative, visit us on facebook, follow us on twitter, and join the QH conversation. Raise your voice & get published in QH Magazine!</p>
                <h4 class="con_mar">Type your information here</h4> 
                <?php echo do_shortcode( '[contact-form-7 id="1569" title="Contribute"]' ); ?>
              </div>
          </div>

      <!---contest ends here-->

            

        </div>



        <div class="row-sidebar">

        	<div class="sidebar_slider_head">Our Partners</div>

            	<div class="sidebar_slider_border_box">

                <?php dynamic_sidebar('Main Sidebar') ?>

                </div>
        </div>



    </div>



    <!--sidebar end-->