<?php
/*
Template Name: Movie
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
        <h1 class="big-title">Spotlight on Movies</h1>
        <div class="row-full media-box clearfix">
        <?php
			 $cnt=0;
			 $args_movie = array(
			 'posts_per_page'   => '-1',
			 'orderby'          => 'post_date',
			 'order'            => 'DESC',
			 'post_type'        => 'Movie',
			 'post_status'      => 'publish',
			 'suppress_filters' => true );
			 $myposts = get_posts( $args_movie );
			foreach ( $myposts as $post ) : setup_postdata( $post );
			if($cnt<=3){// //Visible Post Condition  
		?>        
            <div class="box-inner">
            	<div class="column">
                 <?php
						$post_id = get_the_ID();
						$img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));
				 ?>
                	<div class="movie-page-pic"><img src="<?php echo $img_path ?>" /></div>
                </div>
                <div class="column movie-page-list-desc">
                	<h3><a href="<?php echo get_permalink( $post_id )?>" traget="_blank"><?php the_title(); ?></a></h3>
                    <p class="movie-desc">
						<?php
                            $category = get_the_category();
                            echo $category[0]->cat_name;
                        ?>
                	</p>
                    <div class="small-star"></div>
                    <p class="movie-desc">
                    	<?php  echo $movie_team = get_post_meta($post->ID, 'Movie Team Name', true);?>
                    </p>
                    <div class="movie-cont-show" id="show<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>">
                        <div class="movie-row">
                            <font class="cinema">Cinema</font>
                            <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/drop-down-arrow.png"></div>
                        </div>
                        <p><?php  echo $cinema= get_post_meta($post->ID, 'Cinema List', true);?></p>
                   </div> 
                    <div class="movie-cont-hide" id="hide<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>">
                        <div class="movie-row">
                            <font class="cinema">Cinema</font>
                            <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png"></div>
                        </div>
                   </div> 
                    <p class="rate">
						Rating: <?php  echo $rating= get_post_meta($post->ID, 'Rating', true);?>
                    </p>
            </div>
            </div>
             <div class="box-inner">
               <div class="movie-lower-border margin-lower"></div>
            </div>
            <?php
				if( $cnt==1){
					?>
                      <!--list second end-->
                <div class="box-inner">
                    <?php include_once('center-ad.php') ?>
                </div>
                <div class="box-inner">
                   <div class="meadia-heading-border margin-lower"></div>
                </div>
	   	<?php }
			}
			else{//display more posts
			?>
			<div class="box-inner b_see_more">
            	<div class="column">
                 <?php
						$post_id = get_the_ID();
						$img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));
				 ?>
                	<div class="movie-page-pic"><img src="<?php echo $img_path ?>" width="260" height="173" /></div>
                </div>
                <div class="column movie-page-list-desc">
                	<h3><a href="<?php echo get_permalink( $post_id )?>" traget="_blank"><?php the_title(); ?></a></h3>
                    <p class="movie-desc">
						<?php
                            $category = get_the_category();
                            echo $category[0]->cat_name;
                        ?>
                	</p>
                    <div class="small-star"></div>
                    <p class="movie-desc">
                    	<?php  echo $movie_team = get_post_meta($post->ID, 'Movie Team Name', true);?>
                    </p>
                    <div class="movie-cont-show" id="show<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>">
                        <div class="movie-row">
                            <font class="cinema">Cinema</font>
                            <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/drop-down-arrow.png"></div>
                        </div>
                        <p><?php  echo $cinema= get_post_meta($post->ID, 'Cinema List', true);?></p>
                   </div> 
                    <div class="movie-cont-hide" id="hide<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>">
                        <div class="movie-row">
                            <font class="cinema">Cinema</font>
                            <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png"></div>
                        </div>
                   </div> 
                    <p class="rate">
						Rating: <?php  echo $rating= get_post_meta($post->ID, 'Rating', true);?>
                    </p>
            </div>
            <div class="box-inner">
               <div class="movie-lower-border margin-lower"></div>
            </div>
        </div>
        <?php
			}
        $cnt++; endforeach; 
		?>     
            <div class="box-inner">
            	<div class="see-more-border"></div>
            </div>
            <div class="box-inner see-more-button">
              <span id="b_but"><img src="<?php echo get_template_directory_uri(); ?>/images/see-more.png"></span>
            </div>
            <!--list fourth end-->
        <div class="row-full clearfix">
            <?php include_once('body-lower-banner.php') ?>
        </div>
    </div>
    </div>
    <!--sidebar-->
    <?php get_sidebar();?>
    </div>
    <!--sidebar end-->
 <!--Hide or Show Cinema Names Script-->
	<script>
	$(document).ready(function(e) {
        $('.movie-cont-hide').hide();
		$('.movie-cont-show').click(function () {
			var id_val=$(this).attr('data-id');
			$('#show'+id_val).hide();
			$('#hide'+id_val).show();
			});
		$('.movie-cont-hide').click(function (){
			var id_h_val=$(this).attr('data-id');
			$('#show'+id_h_val).show();
			$('#hide'+id_h_val).hide();
			});
    });
	</script>
 <!--End Hide or Show Cinema Names Script-->
<?php 

get_footer();

?>