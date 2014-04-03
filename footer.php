<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>

<?php

wp_footer();

?>


	</div>
	<div class="footer-cont clearfix">



	<div class="main-container black clearfix">



		<div class="footer-inner">



        	<div class="footer-part">

            	<h4>QH Community</h4>

                <ul>

				<li> <?php wp_nav_menu( array('menu' => 'QH Community' )); ?></li>
                <li ><a class="fancybox" href="#inlinec">Contribute</a></li>
                </ul>

            </div>

            <div class="footer-part">

            	<h4>QH Business</h4>

                <ul>
                    <li><a class="fancybox" href="#inlinep">Privacy &amp; Policy</a></li>
                    <div id="inlinep" style="display:none;">
                      <div class="employment-form">
                        <h1 style="color:#8d004e;">PRIVACY &amp; POLICY</h1>
                        <p>Advertising with QH will highlight your brand, circulating 40,000 copies a month while targeting expatriates and Qataris-alike with multiple interests and backgrounds. Maximum exposure will be all yours with the number one ‘Happening’ Magazine in Qatar.  Not to mention our heavy online presence; operating strong, engaging, and fun social media coverage.</p>
                        <!--<h2>GET IN TOUCH</h2> 
                        <?php echo do_shortcode( '[contact-form-7 id="1568" title="Advertise"]' ); ?>-->
                      </div>
                    </div>
              
                	<li><?php wp_nav_menu( array('menu' => 'QH Business' )); ?></li>
                    <li ><a class="fancybox" href="#inline">Advertise</a></li>
                </ul>

            </div>

            <div class="footer-part">

            	<h4>Site Map</h4>

                <ul>
                	<li><?php wp_nav_menu( array('menu' => 'Site Map' )); ?></li>
                    <li ><a class="fancybox" href="#inlinecon">Contact-Us</a></li>
                    <div id="inlinecon" style="display:none;">
                    <form id="request" name="" method="post" style="height:380px;">
                        <div class="main-container">
                            <div class="popup-contant new" style="top:0px;">
                                <div class="popup-inner clearfix">
                                    <div class="pop-up-row clearfix">
                                        <h2 class="parrot-font">CONTACT US</h2>
                                    </div>
                                    <div class="pop-up-row clearfix">
                                        <p>vehicula a. Cras ac eros leo, condimentum congue nibh. Nunc dapibus ultricies eros, vitae blandit urna fermentum sit amet. Aenean tempus mattis dolor ac vehicula. Nam tortor risus, viverra a accumsan at, consequat vel metus. Vivamus elit leo, volutpat eget vehicula eu, adipiscing non </p>
                                    </div>
                                    <div class="pop-up-row clearfix">
                                        <div class="left-side">
                                            <p class="black-font">Type your information here</p>
                                            <input type="text" name="name" id="contact-name" class="textbox" placeholder="Name">
                                            <input type="text" name="mail" id="contact-email" class="textbox" placeholder="Email">
                                        </div>
                                        <div class="column">
                                            <textarea name="msg" id="contact-msg" placeholder="Message" cols="50" rows="5" class="textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="pop-up-row clearfix">
                                        <div id="contact-label"> </div>
                                        <input type="submit" name="submit" class="submit-btn" value="Submit">
                                    </div>
                                    <div class="pop-up-border"></div>
                                    <div class="pop-up-row clearfix">
                                        <div class="address">
                                            <div class="inner-row clearfix">
                                                <h4>Mailing Address:</h4>
                                                <font class="add-contant">Qatar Happening Magazine P.O. Box 7848, Doha-Qatar. </font>
                                            </div>
                                            <div class="inner-row clearfix">
                                                <h4>Email:</h4>
                                                <font class="add-contant">ashlee@qatarhappening.com </font>
                                            </div>
                                            <div class="inner-row clearfix">
                                                <h4>Phone:</h4>
                                                <font class="add-contant">4427-8416</font>
                                            </div>
                                        </div>
                                        <div class="column-divider-address"></div>
                                        <div class="facebook-like">
                                            <div class="column fb-font"></div>
                                            <div class="column fb-pic"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-like-pic.png"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                    </div>
                </ul>

            </div>

            <div class="footer-part right">

            	<div class="social-cont">

                	<div class="social-single"><a href="https://www.facebook.com/QatarHappening" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-footer.png"></a></div>

                    <div class="social-single"><a href="https://www.dermshop.com/obagi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-footer.png"></a></div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>

