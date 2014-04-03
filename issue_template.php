<?php
/*
Template Name: issue
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
<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id(92) );
//echo '$feat_image';
?>
<div class="main-container main-contant clearfix">
<div class="row-full clearfix">
<?php
include_once("main_slider.php");
?>
</div>
<div class="body-left inner-page">
	<h1 class="big-title">Issues</h1>
    	<!-- disney-parts-divided-atart -->
<?php
//Count total Posts
$post_count=0;
$args_post_issue_cnt = array(
 'posts_per_page'   => '100',
 'orderby'          => 'post_date',
 'order'            => 'DESC',
 'post_type'        => 'Issue',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts($args_post_issue_cnt);
foreach ( $myposts as $post ) : setup_postdata( $post );
$post_count++;
endforeach;
?>
<?php
//get post of issues 
 $cnt=1;
 $args_post_issue = array(
 'posts_per_page'   => '100',
 'orderby'          => 'post_date',
 'order'            => 'DESC',
 'post_type'        => 'Issue',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts( $args_post_issue );
foreach ( $myposts as $post ) : setup_postdata( $post );
$issue_id = get_the_ID();
$feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($issue_id)); 
	if($cnt<=4){ //Visible Post Condition    
//get first post with full description
			if($cnt==1)
			{
			?>         
				  <div class="disney-parts-divided clearfix">
					<div class="first-disney-part clearfix">
					 <img src="<?php echo $feat_image_path ?>" height="387" width="276" id="img_first_part"/>
					</div>
					<div class="second-disney-part clearfix">
						<h2 class="disney-on-ice-text" id="title_first_part"><?php the_title(); ?></h2>
						<!--<span class="disney-date-text" id="dt_first_part"><?php the_time('D M j Y')?></span><br />-->
						<p class="disney-p" id="post_first_part"><?php the_content_rss('', TRUE,''); ?></p>
					</div>
				</div>
				<div class="border-bottom-images clearfix">
							   <table class="border-bottom-images-set">
								   <tr>
									   <td>

											<a class="issue_back_link_img" href="<?php echo get_field('pdf'); ?>" target="_blank" id="dwl_first_part">
												<img src="<?php echo get_template_directory_uri(); ?>/images/view-online-pdf-image_03.jpg"  />
											</a>
											<a href="<?php echo get_field('pdf'); ?>" download target="_blank" id="dw2_first_part">
												<img src="<?php echo get_template_directory_uri(); ?>/images/disney-download-image_03.jpg" />
											</a>
										</td>
									</tr>
								</table>
							</div>
			<?php
			}
			///get first post ends here 
			else
			{
			?>
				<!-- disney-parts-divided-end -->
				 <!-- two-parts-divided-start -->
				 <?php if(($cnt % 2)==0){ ?>
				 <div class="two-parts-divided-again clearfix" >	
				<div class="first-parts-divided-again data_contain" data-title="<?php echo the_title(); ?>" data-post="<?php echo the_content_rss('', TRUE,''); ?>" data-link="<?php echo get_field('pdf'); ?>" data-post-dt="<?php the_time('D M j Y') ?>" data-img="<?php echo $feat_image_path ?>">
				 <img src="<?php echo $feat_image_path ?>" height="387" width="276"/> 
				</div>
				<?php if($cnt==$post_count){
				echo "</div>";
				}?>
			  <?php } else { ?>
				<div class="second-parts-divided-again data_contain data_contain" data-title="<?php echo the_title(); ?>" data-post="<?php echo the_content_rss('', TRUE,''); ?>" data-link="<?php echo get_field('pdf'); ?>" data-post-dt="<?php the_time('D M j Y') ?>" data-img="<?php echo $feat_image_path ?>">
				 <img src="<?php echo $feat_image_path ?>" height="387" width="276"/>   
				 </div>
				 </div>
				 <?php } ?>
				<!-- two-parts-divided-end -->
			<?php
			}
	}
	else{//display more post
		?>
		<!-- disney-parts-divided-end -->
				 <!-- two-parts-divided-start -->
				 <?php if(($cnt % 2)==0){ ?>
				 <div class="two-parts-divided-again clearfix b_see_more" >	
				<div class="first-parts-divided-again data_contain" data-title="<?php echo the_title(); ?>" data-post="<?php echo the_content_rss('', TRUE,''); ?>" data-link="<?php echo get_field('pdf'); ?>" data-post-dt="<?php the_time('D M j Y') ?>" data-img="<?php echo $feat_image_path ?>">
				 <img src="<?php echo $feat_image_path ?>" height="387" width="276"/> 
				</div>
				<?php if($cnt==$post_count){
				echo "</div>";
				}?>
			  <?php } else { ?>
				<div class="second-parts-divided-again data_contain data_contain" data-title="<?php echo the_title(); ?>" data-post="<?php echo the_content_rss('', TRUE,''); ?>" data-link="<?php echo get_field('pdf'); ?>" data-post-dt="<?php the_time('D M j Y') ?>" data-img="<?php echo $feat_image_path ?>">
				 <img src="<?php echo $feat_image_path ?>" height="387" width="276"/>   
				 </div>
				 </div>
				 <?php } ?>
				<!-- two-parts-divided-end -->
<?php	}
 $cnt++; $pt++; endforeach;
//isssue post ends here  
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
<script>
$(document).ready(function() {
    $('.data_contain').click(function (){
		var title=$(this).attr('data-title');
		var post=$(this).attr('data-post');
		var p_link=$(this).attr('data-link');
		var dt=$(this).attr('data-post-dt');
		var pic=$(this).attr('data-img');
		
		var old_title=$('#title_first_part').html();
		var old_src=$('#img_first_part').attr('src');
		var old_post=$('#post_first_part').html();
		var old_dt=$('#dt_first_part').html();
		var old_p=$('#dwl_first_part').attr('href');
		
		$('#title_first_part').html(title);
		$('#img_first_part').attr('src',pic);
		$('#post_first_part').html(post);
		$('#dt_first_part').html(dt);
		$('#dwl_first_part').attr('href',p_link);
		$('#dw2_first_part').attr('href',p_link);
		
		$(this).attr('data-title',old_title);
		$(this).attr('data-post',post);
		$(this).attr('data-link',old_p);
		$(this).attr('data-post-dt',old_dt);
		$(this).attr('data-img',old_src);
		$(this).children('img').attr('src',old_src);
		});

		//Bottom To Top Video 

		$('.two-parts-divided-again').click(function(event) {

			event.preventDefault();

			$('html, body').animate({scrollTop: 780}, 1200);

        });

});

</script>
<?php 
get_footer();
?>