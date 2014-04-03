	<div class="row-full main_slider clearfix" style="position:relative">

        <div class="slider-cont">

            <div id="jslidernews2" class="lof-slidecontent">

            <div class="preload"></div>

                     <!-- MAIN CONTENT --> 

                      <div class="main-slider-content">

                      <?php

					  $idObj = get_category_by_slug('qh_sensation'); 

                      $cat_id = $idObj->term_id;

                             $args_slider = array(

                             'posts_per_page'   => '20',

                             'offset'           => 0,

                             'cat' 			=> $cat_id,

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

                                          <img src="<?php echo $feat_image2  ?>" title="<?php the_title(); ?>" width="677" height="400" >  

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

                                                        <!--<div class="link-icon"></div>-->

                                                        <div class="heading-underline"></div>

                                                        <div class="row-inner">

                                                            <p><?php the_content_rss('', TRUE, '', 44); ?></p>

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

						   $idObj = get_category_by_slug('qh_sensation'); 

                           $cat_id = $idObj->term_id;

                                     $args_nav = array(

                                     'posts_per_page'   => '20',

                                     'offset'           => 0,

                                     'cat'              => $cat_id,

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

                                    				<span>

													<!--<h5 style="color:#a2a2a2">

													<?php the_time('D M j Y'); ?>

                                                    </h5>-->

                                                    </span>

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
            $ads=ot_get_option( 'ad3' );
          }
          //arts-culture
        ?>
        <div class="right-banner">
            <?php echo $ads;?>
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
            $ads=ot_get_option( 'ad4' );
          }
          //arts-culture
        ?>
        <div class="column-right-banner"> 
            <?php echo $ads;?>
        </div>

        </div>