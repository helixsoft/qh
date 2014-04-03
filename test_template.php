<?php
/*
Template Name: test_slider
*/
get_header();
?>
<div class="main-container clearfix">
<div class="row-full clearfix">
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
                             'post_type'        => 'All_post',
                             'post_status'      => 'publish',
                             'suppress_filters' => true );
                             $myposts = get_posts( $args_slider );
                      ?>
                            <ul class="sliders-wrap-inner">
                                <?php
                                    foreach ( $myposts as $post ) : setup_postdata( $post );
                                     $category = get_the_category();
                                     $time=get_the_time('D M j Y');
                                     
                                     $feat_image2 = wp_get_attachment_url( get_post_thumbnail_id($pid) );
                                ?>
                                    <li>
                                          <img src="<?php echo $feat_image2  ?>" title="Newsflash 2" >           
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
                                     'post_type'        => 'All_post',
                                     'post_status'      => 'publish',
                                     'suppress_filters' => true );
                                     $myposts = get_posts( $args_nav );
                                    ?>
                                    <?php
                                    foreach ( $myposts as $post ) : setup_postdata( $post );
                                     $category = get_the_category();
                                     $time=get_the_time('D M j Y');
                                     $pid=the_ID();
                                     $feat_image = wp_get_attachment_url( get_post_thumbnail_id($pid) );
                                    ?>
                                          <li>
                                                <div>
                                                  
                                                    <h3><?php the_title(); ?></h3>
                                    				<span><?php echo $category ?></span>
                                                </div>    
                                            </li>
                                <?php  endforeach; ?> 
                            </ul>
                          </div>
                     </div> 
                  <!----------------- END OF NAVIGATOR --------------------->
        </div>
        </div>
        <div class="right-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/side-banner-ad.png">
        </div>
        </div>
</div>        

<?php 
get_footer();
?>