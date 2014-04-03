<?php

/**

 * The Template for displaying all single posts.

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>



<div class="main-container main-contant clearfix">

    <div class="body-left inner-page">

        

        <div class="row-full media-box clearfix">



	<?php while ( have_posts() ) : the_post(); ?>

            <div class="box-inner">

            	<div class="column">

                	<div class="movie-page-pic"><?php echo get_the_post_thumbnail($post->ID); ?> </div>

                </div>

                <div class="column contest-desc">

                	<h3><?php the_title(); ?></h3>

                    <p class="contest-cat red-font">

                    	 <?php

							$category = get_the_category();

							echo $category[0]->cat_name;

						?>

                    </p>

                    <!--<p class="small-date"> <?php the_time('D M j Y')?></p>-->

                    <p><?php the_content(); ?></p>

                </div>

            </div>

            <div class="box-inner">

               <div class="meadia-heading-border margin-lower"></div>

            </div>

            <?php endwhile ?>

            <!--seventh end-->

        </div>

        <!--media box end-->

    </div>

    <!--left body end-->

    <!--sidebar-->

    <div class="sidebar">

    <?php get_sidebar();?>

    </div>

    <!--sidebar end-->

</div>

<?php get_footer(); ?>