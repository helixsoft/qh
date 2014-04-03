<?php 
          $url=curPageURL();
          if (strpos($url,'entertainment') !== false) {
            $ads=ot_get_option( 'entertainment_ad7' );
          }
          else if (strpos($url,'arts-culture') !== false) {
            $ads=ot_get_option( 'arts-culture_ad7' );
          }
          else if (strpos($url,'community') !== false) {
            $ads=ot_get_option( 'community_ad7' );
          }
          else if (strpos($url,'food-dining') !== false) {
            $ads=ot_get_option( 'food-dining_ad7' );
          }
          else if (strpos($url,'qh-sensation') !== false) {
            $ads=ot_get_option( 'qh-sensation_ad7' );
          }
          else if (strpos($url,'sports') !== false) {
            $ads=ot_get_option( 'sports_ad7' );
          }
          else if (strpos($url,'movie') !== false) {
            $ads=ot_get_option( 'movie_ad7' );
          }
          else if (strpos($url,'about-qh') !== false) {
            $ads=ot_get_option( 'about-qh_ad7' );
          }
          else{
            $ads=ot_get_option( 'ad7' );
          }
          
        ?>
<div class="body-lower-banner">
    <?php echo $ads; ?>
</div>