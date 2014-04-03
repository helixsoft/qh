<?php

/**

 * The default template for displaying content

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>
<!-- search result div format---->
<div class="box-inner">
    <div class="top-border-cinemas-again clearfix">
        <div class="photos-first-part-again"><a href="<?php the_permalink() ?>" style="color:#000000;">
        <?php
                          
                  $feat_image_path = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                ?>
                <img src="<?php echo $feat_image_path ?>" height="173" width="260"/>
        </a></div>
        <div class="photos-second-part-again">
            <span class="glaxy-text"><a href="<?php the_permalink() ?>" style="color:#000000;"><?php the_title(); ?></a></span>
            <p class="contest-cat red-font">
            <?php
    		$category = get_the_category();
            echo $category[0]->cat_name;
    		?>
            </p>
            <!--<p class="small-date"> <?php the_time('D M j Y')?></p>-->
            <span class="glaxy-text-more"><?php the_content_rss('', TRUE, '', 44); ?></span>
        </div>
        <div class="box-inner">
            <div class="blog-link">
                <div class="contest-share">
                      <?php 
                      $title=get_the_title($post->ID);$link=get_permalink($post->ID);
                      ?>
                      <?php echo do_shortcode("[hupso title='$title' url='$link']"); ?>
                </div>
                <a href="<?php the_permalink()?>" class="contest-plus"></a>
            </div>
            <div class="blog-lower-border margin-lower"></div>
        </div>
    </div>
</div>
<!---search result div format ends here---->

