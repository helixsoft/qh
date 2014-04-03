<?php
/*
Template Name: About_QH
*/
get_header(); ?>
<!-- Hover Menu -->
 <div class="main-container clearfix">
  <?php
  include_once("Entertainment_Slider.php");
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
  <div class="content-divided clearfix">
	  <div class="first-content-box clearfix">
    <?php
     $cat_id = get_cat_ID('About QH Online');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>            
	    <div class="first-content-part clearfix">
    	 <span class="heading-about-us "><?php the_title(); ?></span><br />
       <p class="heading-about-us-p"><?php the_content(); ?></p>
   	  </div>
    <?php endforeach; ?>
    <?php
     $cat_id = get_cat_ID('Our Team');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>            
	  <div class="first-content-part clearfix ">
    	<span class="heading-about-us"><?php the_title(); ?></span><br />
      <p class="heading-about-us-p"><?php the_content(); ?></p>
   	</div>
    <?php endforeach;?>
    <?php
     $cat_id = get_cat_ID('Our_Mission');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>        
    <div class="first-content-part clearfix ">
    	<span class="heading-about-us"><?php the_title(); ?></span><br />
      <p class="heading-about-us-p "><?php the_content(); ?></p>
   	</div>
    <?php endforeach;?>
    <?php
     $cat_id = get_cat_ID('About_Advertise');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>   
    <div class="first-content-part-update clearfix ">
    	<span class="heading-about-us"><?php the_title(); ?></span><br />
        <p class="heading-about-us-p "><?php the_content(); ?></p>
   	</div>
    <?php endforeach;?>   
  </div>
    <div class="second-content-box clearfix ">
    <?php
     $cat_id = get_cat_ID('About QH Magazine');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>       
	  <div class="second-content-part clearfix">
    	<span class="heading-about-us-again "><?php the_title(); ?></span><br />
        <p class="heading-about-us-again-p "><?php the_content(); ?></p>
    </div>
    <?php endforeach;?>  
    <?php
     $cat_id = get_cat_ID('Our Vision');
     $args = array(
     'posts_per_page'   => '',
     'offset'           => 0,
     'cat' => $cat_id,
     'orderby'          => 'post_date',
     'post_type'        => 'About_QH',
     'post_status'      => 'publish',
     'suppress_filters' => true );
     $myposts = get_posts( $args );
     foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>           
    <div class="second-content-part-update clearfix ">
    	<span class="heading-about-us-again  "><?php the_title(); ?></span><br />
        <p class="heading-about-us-again-p  "><?php the_content(); ?></p>
   	</div>
    <?php endforeach;?>  
	</div>
</div>
<?php
 $cat_id = get_cat_ID('about_contact_info');
 $args = array(
 'posts_per_page'   => '',
 'offset'           => 0,
 'cat' => $cat_id,
 'orderby'          => 'post_date',
 'post_type'        => 'About_QH',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts( $args );
 foreach ( $myposts as $post ) : setup_postdata( $post );
?>        
    <div class="full-page-text">
    <p class="full-page-text-p"><?php the_content(); ?></p>
    </div>
<?php endforeach;?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-hover-effect.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-hover.css" />
<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
<div class="image_grid portfolio_4col"> 
<ul id="list" class="portfolio_list da-thumbs">
<?php
 $i=0;
 $cat_id = get_cat_ID('About Team Member');
 $args = array(
 'posts_per_page'   => '12',
 'offset'           => 0,
 'cat' => $cat_id,
 'order'            => 'ASC',
 'orderby'          => 'post_date',
 'post_type'        => 'About_QH',
 'post_status'      => 'publish',
 'suppress_filters' => true );
 $myposts = get_posts( $args );
 foreach ( $myposts as $post ) : setup_postdata( $post );
  $name= get_post_meta($post->ID, 'Name', true);
  $desi=get_post_meta($post->ID, 'Designation', true);
  $email=get_post_meta($post->ID, 'Email', true);
?>      
  <li>
		<?php
            $post_id = get_the_ID();
            $img_path = wp_get_attachment_url( get_post_thumbnail_id($post_id));
		?>
        <img class="ref"  src="<?php echo $img_path?>" data-id="<?php echo $post_id ?>"  >  
        <article class="da-animate da-slideFromRight" style="display: block;">
               <div class="people-desc">
                    <p><?php echo $name  ?></p>
                    <p><?php echo $desi  ?></p>
                    <p><?php echo $email  ?></p>
           	   </div>
        </article>      	
    </li>
<?php  endforeach;?> 
</ul> 
</div>   
    </div>

   <!---End Body Left-->



 <!--sidebar-->

    <?php get_sidebar();?>

</div>

    <!--sidebar end-->

<!--<script>

	$(document).ready(function(e) {		

		$('.ref').hover(function() {

				var id = $(this).attr('data-id');

				$('#'+id).toggle();

		},function(){

		$('.people-desc-bg').mouseout(function() {

            $('.people-desc-bg').hide();

        });

		});

    });

</script>-->



<?php 

get_footer();

?>