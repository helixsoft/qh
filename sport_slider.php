<div class="hover-cont" id="hover-cont6" style="display:none;" >

    <div class="column hover-content">

      <div class="hover-row">

        <div class="hover-column first">

        <h3><a href="<?php echo site_url('/top-pick/');?>">Top Picks</a></h3>

        </div>

        <div class="hover-column second">

         <h3><a href="<?php echo site_url('/it-happened/');?>">It Happened</a></h3>

        </div>

        <div class="hover-column third">

        <h3><a href="<?php echo site_url('/event/');?>">Events</a></h3>

        </div>

      </div>

      <div class="hover-data first">

<?php

//show top picks of entertainment

$idObj = get_category_by_slug('sports'); 

$cat_id = $idObj->term_id;

$args_top_pic_menu = array(

					 'posts_per_page'   => '1',

					 'orderby'          => 'post_date',

					 'order'            => 'DESC',

					 'post_type'        => 'Top_picks',

					 'post_status'      => 'publish',

					  'cat' 			=> $cat_id,

					 'suppress_filters' => true );

$myposts = get_posts( $args_top_pic_menu );

foreach ( $myposts as $post ) : setup_postdata( $post );

$post_id = get_the_ID();

$img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));					 

?>      

        <div class="hover-pic"><img src="<?php echo $img_path; ?>"></div>

        <h4> <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>

        <p><?php the_content_rss('',TRUE,'', 20); ?></p>

<?php

 endforeach;

//entertainment data ends here

?>     

      </div>

      <!---Post Slider-->

      <div class="hover-data second">

      	<div id="slider_menu_top_pick6">

        		 <?php

				 	 $idObj = get_category_by_slug('sports'); 

                     $cat_id = $idObj->term_id;

					 $args_top_pic_menu = array(

					 'posts_per_page'   => '',

					 'orderby'          => 'post_date',

					 'order'            => 'DESC',

					 'post_type'        => 'It_happened',

					 'post_status'      => 'publish',

					  'cat' 			=>  $cat_id,

					 'suppress_filters' => true );

					 $myposts = get_posts( $args_top_pic_menu );

					 foreach ( $myposts as $post ) : setup_postdata( $post );

					 $post_id = get_the_ID();

					 $category = get_the_category();

                     $cat_name=$category[0]->cat_name;

                     $cat_without=str_replace(' ','',$cat_name);

                     $img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));

				?>        

                <div class="data-cont-hover-top-pic-menu clearfix">

                    <div class="hover-pic"><img src="<?php echo $img_path; ?>"></div>

                    <h4

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

                    

                    

                    </h4>

                    <!--<div class="clearfix"><p class="hover-date"><?php the_time('D M j, Y')?></p></div>-->

                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>

                    <p><?php the_content_rss('',TRUE,'', 20); ?></p>

               </div>

               <?php endforeach; ?>

           </div>

          <div class="blog-arrow"> 

                <a href="#" class="blog-arrow-left btn-left-menu-top-pick6"></a> 

                <a href="#" class="blog-arrow-right btn-right-menu-top-pick6"></a> 

          </div>

      </div>

      <!---End Post Slider-->

      <div class="hover-data second">

<?php

//events starts here

                     $idObj = get_category_by_slug('sports'); 

                     $cat_id = $idObj->term_id;

                     $args_top_pic_menu = array(

					 'posts_per_page'   => '3',

					 'orderby'          => 'post_date',

					 'order'            => 'DESC',

					 'post_type'        => 'Event',

					 'post_status'      => 'publish',

					  'cat' 			=>  $cat_id,

					 'suppress_filters' => true );

                     $myposts = get_posts( $args_top_pic_menu );

					 $cnt=1;

					 foreach ( $myposts as $post ) : setup_postdata( $post );

					 $post_id = get_the_ID();

					 $category = get_the_category();

                     $cat_name=$category[0]->cat_name;

                     $cat_without=str_replace(' ','',$cat_name);

                     $img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));					 

?>

<?php

if($cnt==1)

{

?>      

        <div class="hover-pic"><img src="<?php echo $img_path; ?>" ></div>

        <div class="pic-lower">

        <div class="clearfix">

          <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a>|</h4>

                              <h4

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

><?php echo $cat_name; ?></h4>

</div>

          <!--<div class="clearfix"><p class="hover-date"><?php the_time('D M j, Y')?></p></div>-->

        </div>

       

<?php 

}

else

{

?>       

                              <h4

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

><?php echo $cat_name; ?></h4>

        <!--<div class="clearfix"><p class="hover-date"><?php the_time('D M j, Y')?></p></div>-->

        <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>

        <?php

        if($cnt==2)

		{

	     ?>

			<div class="small-divider light"></div>

        <?php    

		}

		?>



<?php

}

$cnt++;

endforeach;

//events ends here

?>        

      </div>

    </div>

  </div>

  

  <!---Top Pick Slider--->

    <script>

        jQuery(document).ready(function($) {

            $("#slider_menu_top_pick6").FlowSlider({

                marginStart: 0,

                marginEnd: 0,

                infinite: true,

                animationOptions: {

                    snap: true

                },

                position: 0.0,

                controllers: ["Event", "Event"],

                controllerOptions: [

                    {

                        el: ".btn-right-menu-top-pick6",

                        step: 293

                    },

                    {

                        el: ".btn-left-menu-top-pick6",

                        step: -293

                    }

                ]

            }); 

        });

    </script>

    <!---End Top Pick Slider--->