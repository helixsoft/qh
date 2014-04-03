<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array(
      array(
        'id'          => 'ads',
        'title'       => 'Ads'
      ), 
      array(
        'id'          => 'entertainment',
        'title'       => 'Entertainment'
      ),
      array(
        'id'          => 'arts-culture',
        'title'       => 'arts-culture'
      ),
      array(
        'id'          => 'community',
        'title'       => 'community'
      ),
      array(
        'id'          => 'food-dining',
        'title'       => 'food-dining'
      ),
      array(
        'id'          => 'qh-sensation',
        'title'       => 'qh-sensation'
      ),
      array(
        'id'          => 'sports',
        'title'       => 'sports'
      ),
      array(
        'id'          => 'movie',
        'title'       => 'movie'
      ),
      array(
        'id'          => 'about-qh',
        'title'       => 'about-qh'
      ),
      array(
        'id'          => 'reader',
        'title'       => 'Feature Reader'
      ),
      array(
        'id'          => 'facebook',
        'title'       => 'Facebook Settings'
      ),  
    ),
    'settings'        => array( 
      array(
        'id'          => 'header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'entertainment_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'arts-culture_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'community_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'food-dining_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'qh-sensation_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
     array(
        'id'          => 'sports_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'sports_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'movie_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_header1',
        'label'       => 'header javascript',
        'desc'        => 'Enter your header javascript',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad1',
        'label'       => 'Ad 1',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad2',
        'label'       => 'Ad 2',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad3',
        'label'       => 'Ad 3',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad4',
        'label'       => 'Ad 4',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad5',
        'label'       => 'Ad 5',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad6',
        'label'       => 'Ad 6',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad7',
        'label'       => 'Ad 7',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'about-qh_ad8',
        'label'       => 'Ad 8',
        'desc'        => 'Enter the ad html',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'ads',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'reader_image',
        'label'       => 'Reader Image',
        'desc'        => 'Select the Reader image',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'reader',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook_app_id',
        'label'       => 'Facebook App Id',
        'desc'        => 'Enter the Facebook App Id',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'facebook',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}