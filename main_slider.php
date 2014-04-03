	<div class="row-full main_slider clearfix" style="position:relative">

        <div class="slider-cont">

            <div id="jslidernews2" class="lof-slidecontent">

            <div class="preload"></div>

                     <!-- MAIN CONTENT --> 

                      <div class="main-slider-content">

                      <?php

                             $args_slider = array(

                             'posts_per_page'   => '20',

                             'offset'           => 0,

                             'cat'              => '',

                             'orderby'          => 'post_date',

                             'order'            => 'DESC',

                             'post_type'        => array('It_happened', 'Event','Top_picks'),

                             'post_status'      => 'publish',

                             'suppress_filters' => true );

                             $myposts = get_posts( $args_slider );

                      ?>

                            <ul class="sliders-wrap-inner">

                                <?php

                                    foreach ( $myposts as $post ) : setup_postdata( $post );

                                     $category = get_the_category();

                                     $time=get_the_time('D M j Y');

                                     $cat_name=$category[0]->cat_name;

									 $cat_without=str_replace(' ','',$cat_name);

                                     $feat_image2 = wp_get_attachment_url( get_post_thumbnail_id($pid) );

                                ?>

                                    <li>

                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                                $url = $feat_image2;      // Required
                                                $width = 677;                                                                  // Optional. Defaults to '150'
                                                $height = 400;                                                                 // Optional. Defaults to '150'
                                                $crop = true;                                                                  // Optional. Defaults to 'true'
                                                $retina = false;                                                               // Optional. Defaults to 'false'

                                                $image=matthewruddy_image_resize( $url, $width, $height, $crop, $retina );
                                                if ( is_wp_error( $image ) ) {?>
                                                    <img src="<?php echo $feat_image2  ?>" title="<?php the_title(); ?>" width="677" height="400" >        
                                            <?php    } else {?>
                                                    <img src="<?php echo $image['url']  ?>" title="<?php the_title(); ?>" width="677" height="400" >  
                                            <?php    }
                                            ?>
                                          

                                         </a>

                                          	<div class="row-full clearfix">

                                          		<div class="row-inner">

                                           			<div class="row-full">

                                                    	<font class="ent" id="cat_slide">

                                                        <h3>

                                                        <?php

														echo $cat_name; 

														?>

                                                        </h3>

                                                        </font>

                                                  	</div>

                                                    <div class="row-full"> 

                                                        <!--<font class="ent-date" id="time_slide"><?php the_time('D M j Y') ?></font>-->

                                                    </div>

                                                    <div class="row-full body-left clearfix">

                                                        <h2 class="b-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                       <div class="link_share_slider_main"> <?php $title=get_the_title($post->id); $link=get_permalink( $post->id ); echo do_shortcode("[hupso title='$title' url='$link']"); ?>  </div>

                                                       <!-- <div class="link-icon"></div>-->

                                                        <div class="heading-underline"></div>

                                                        <div class="row-inner">

                                                            <p><?php the_content_rss('', TRUE, '', 47); ?></p>

                                                        </div>

                                                    </div>

                                           		</div>                                                  

                                       		</div>

                                    </li>

                             <?php  endforeach; ?>  

                         </ul>  	

                                                      

                    </div>

                   <!-- END MAIN CONTENT --> 

                   

                   <!-- NAVIGATOR -->

                    <div class="navigator-content">

                        <div class="navigator-wrapper">

                               <ul class="navigator-wrap-inner">

                                    <?php

                                     $args_nav = array(

                                     'posts_per_page'   => '20',

                                     'offset'           => 0,

                                     'cat'              => '',

                                     'orderby'          => 'post_date',

                                     'order'            => 'DESC',

                                     'post_type'        => array('It_happened', 'Event','Top_picks'),

                                     'post_status'      => 'publish',

                                     'suppress_filters' => true );

                                     $myposts = get_posts( $args_nav );

                                    ?>

                                    <?php

                                    foreach ( $myposts as $post ) : setup_postdata( $post );

                                     $category = get_the_category();

									 //print_r($category);

                                     $time=get_the_time('D M j Y');

                                     $pid=get_the_ID();

									 $cat_name=$category[0]->cat_name;

									 $cat_without=str_replace(' ','',$cat_name);

                                     $feat_image = wp_get_attachment_url( get_post_thumbnail_id($pid) );

                                    ?>

                                          <li>

                                                <div>

                                                  

                                                    <h3><?php echo the_title(); ?></h3>

                                                   <!--  <span>

                                                    	<h5 class="slider-date"> <?php the_time('D M j, Y')?> </h5>

                                                    </span> -->

                                    				<span>

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

													<?php echo $cat_name; ?>

                                                    </h5>

                                                </div>    

                                            </li>

                                <?php  endforeach; ?> 

                            </ul>

                          </div>

                     </div> 

                  <!-- END OF NAVIGATOR -->

        	</div>

        </div>

         <?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads_url=ot_get_option( 'entertainment_ad3_url' );
            $ads_image=ot_get_option( 'entertainment_ad3_image' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads_url=ot_get_option( 'arts-culture_ad3_url' );
            $ads_image=ot_get_option( 'arts-culture_ad3_image' );
          }
          else if (strpos($url,'community') !== false) {
            $ads_url=ot_get_option( 'community_ad3_url' );
            $ads_image=ot_get_option( 'community_ad3_image' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads_url=ot_get_option( 'food-dining_ad3_url' );
            $ads_image=ot_get_option( 'food-dining_ad3_image' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads_url=ot_get_option( 'qh-sensation_ad3_url' );
            $ads_image=ot_get_option( 'qh-sensation_ad3_image' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads_url=ot_get_option( 'sports_ad3_url' );
            $ads_image=ot_get_option( 'sports_ad3_image' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads_url=ot_get_option( 'movie_ad3_url' );
            $ads_image=ot_get_option( 'movie_ad3_image' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads_url=ot_get_option( 'about-qh_ad3_url' );
            $ads_image=ot_get_option( 'about-qh_ad3_image' );
          }
          else{
            $ads_url=ot_get_option( 'ad3_url' );
            $ads_image=ot_get_option( 'ad3_image' );
          }
          //arts-culture
        ?>
         <div class="right-banner">
            <a href="<?php echo $ads_url;?>">
         <?php 
          $ext=pathinfo($ads_image, PATHINFO_EXTENSION); 
          if($ext!='swf'){
        ?>
        <img src="<?php echo $ads_image;?>" width="122" height="407">
        <?php } else { ?>
          <object id="flashcontent" 
              classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
              width="122px" 
              height="407px">
              <param name="movie" value="<?php echo $ads_image;?>" />
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" 
                      data="<?php echo $ads_image;?>" 
                      width="122px" 
                      height="407px">
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
            $ads_url=ot_get_option( 'entertainment_ad4_url' );
            $ads_image=ot_get_option( 'entertainment_ad4_image' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads_url=ot_get_option( 'arts-culture_ad4_url' );
            $ads_image=ot_get_option( 'arts-culture_ad4_image' );
          }
          else if (strpos($url,'community') !== false) {
            $ads_url=ot_get_option( 'community_ad4_url' );
            $ads_image=ot_get_option( 'community_ad4_image' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads_url=ot_get_option( 'food-dining_ad4_url' );
            $ads_image=ot_get_option( 'food-dining_ad4_image' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads_url=ot_get_option( 'qh-sensation_ad4_url' );
            $ads_image=ot_get_option( 'qh-sensation_ad4_image' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads_url=ot_get_option( 'sports_ad4_url' );
            $ads_image=ot_get_option( 'sports_ad4_image' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads_url=ot_get_option( 'movie_ad4_url' );
            $ads_image=ot_get_option( 'movie_ad4_image' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads_url=ot_get_option( 'about-qh_ad4_url' );
            $ads_image=ot_get_option( 'about-qh_ad4_image' );
          }
          else{
            $ads_url=ot_get_option( 'ad4_url' );
            $ads_image=ot_get_option( 'ad4_image' );
          }
          //arts-culture
        ?>
        <div class="column-right-banner"> 
            <a href="<?php echo $ads_url;?>">
         <?php 
          $ext=pathinfo($ads_image, PATHINFO_EXTENSION); 
          if($ext!='swf'){
        ?>
        <img src="<?php echo $ads_image;?>" width="268" height="143">
        <?php } else { ?>
          <object id="flashcontent" 
              classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
              width="268px" 
              height="143px">
              <param name="movie" value="<?php echo $ads_image;?>" />
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" 
                      data="<?php echo $ads_image;?>" 
                      width="268px" 
                      height="143px">
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

        </div>