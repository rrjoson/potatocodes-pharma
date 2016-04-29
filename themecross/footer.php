<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potato_theme
 */

?>
	<!-- SNIPPET PCT006-001 : html elements -->
	<!-- <div class="smoothup-container">
		<a href="#" class="btn-border-orange" id="smoothup" title="Back to top">BACK TO TOP</a>
	</div> -->

</div> <!-- end of #content -->

		
</div> <!-- end of #wrapper -->

		
		<div class="footer">
			<div class="container">
				<div class="footer-top">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d30895.828854217496!2d121.0233763!3d14.5432161!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1459609958118" width="100%" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="footer-bottom">
						<div class="col-xs-12 hidden-xs hidden-sm col-md-3">
							<div class="col-xs-12 footer-logo-container">
								<div class="footer-logo">
									<?php dynamic_sidebar('footer-logo'); ?>
								</div>
							</div>
							<div class="col-xs-12 footer-logo-container footer-network-title">
								<p>Faculty of Pharmacy Network</p>
								<img class="footer-logo2" src="<?php echo bloginfo('template_directory'); ?>\images\Footer-Biochem.png">
								<img class="footer-logo2" src="<?php echo bloginfo('template_directory'); ?>\images\Footer-Medtech.png">
								<img class="footer-logo2" src="<?php echo bloginfo('template_directory'); ?>\images\Footer-Pharma.png">
							</div>
							<!-- <div class="col-xs-12 col-sm-8 col-md-10">
									<h4><?php dynamic_sidebar('footer-title'); ?></h4>
							</div> -->
							<p class="footer-description">
								<?php //dynamic_sidebar('footer-description'); ?>
							</p>
						</div>
						<?php
		  	                if (has_nav_menu('footermobile')) :
				                wp_nav_menu(array('theme_location' => 'footermobile', 'menu_class' => 'hidden-sm hidden-md hidden-lg nav footer-menu footer-mobile-menu'));
			                endif;
				        ?>
						<div class="col-xs-12 col-sm-12 col-md-9 hidden-xs">
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<h5 class="footerhead">
									<?php dynamic_sidebar('footer-menu-1-title'); ?>
								</h5>
								<?php
				                  if (has_nav_menu('footermenu1')) :
				                    wp_nav_menu(array('theme_location' => 'footermenu1', 'menu_class' => 'nav footer-menu'));
				                  endif;
				                ?>	
							</div>
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<h5 class="footerhead">
									<?php dynamic_sidebar('footer-menu-2-title'); ?>
								</h5>
								<?php
				                  if (has_nav_menu('footermenu2')) :
				                    wp_nav_menu(array('theme_location' => 'footermenu2', 'menu_class' => 'nav footer-menu'));
				                  endif;
				                ?>
							</div>
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<h5 class="footerhead">
									<?php dynamic_sidebar('footer-menu-3-title'); ?>
								</h5>
								<?php
				                  if (has_nav_menu('footermenu3')) :
				                    wp_nav_menu(array('theme_location' => 'footermenu3', 'menu_class' => 'nav footer-menu'));
				                  endif;
				                ?>
							</div>
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<h5 class="footerhead">
									<?php dynamic_sidebar('footer-menu-4-title'); ?>
								</h5>
								<?php
				                  if (has_nav_menu('footermenu4')) :
				                    wp_nav_menu(array('theme_location' => 'footermenu4', 'menu_class' => 'nav footer-menu'));
				                  endif;
				                ?>
							</div>
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<h5 class="footerhead">
									<?php dynamic_sidebar('footer-menu-5-title'); ?>
								</h5>
								<?php
				                  if (has_nav_menu('footermenu5')) :
				                    wp_nav_menu(array('theme_location' => 'footermenu5', 'menu_class' => 'nav footer-menu'));
				                  endif;
				                ?>
							</div>
							<div class="col-sm-4 col-md-2 footer-menu-containers">
								<?php dynamic_sidebar('footer-connect'); ?>
							</div>
							<!--<div id="subscription-container">
								<?php dynamic_sidebar('footer-update-text'); ?>
								<?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]');?>
							</div>-->
						</div>
				</div>
				<div class="footer-copyright">
						<h6 class="copyright col-xs-12">COPYRIGHT 2016.FACULTY OF UST PHARMACY | BUILD WITH LOVE BY <a target="_blank" class="lnk" href="http://potatocodes.com">POTATOCODES INC.</a></h6>
				</div>
			</div>
		</div>
			

			<script src="<?php echo bloginfo('template_directory'); ?>/components/jquery/jquery.js"></script>
			<script src="<?php echo bloginfo('template_directory'); ?>/components/jquery.bxslider/jquery.bxslider.js"></script>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="<?php echo bloginfo('template_directory'); ?>/js/script.min.js"></script>
			<script src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
			<script src="<?php echo bloginfo('template_directory'); ?>/js/unslider.js"></script>

			<script src="<?php echo bloginfo("template_directory"); ?>/js/wow.min.js"></script>

			<script type="text/javascript">

						$(document).ready(function(){
							$('.my-slider').unslider({
								autoplay: true,
								delay: 3000 
							});

				          jQuery('.ajaxform').submit( function() {

				              $.ajax({
				                  url     : $(this).attr('action'),
				                  type    : $(this).attr('method'),
				                  data    : $(this).serialize(),
				                  success : function( data ) {
				                               alert('Sent! We will get back to you in a while'); 
				                               $('.ajaxform')[0].reset();    
				                            },
				                  error   : function(){
				                               alert('Oh no! It seems our message box is not working at the moment. Sorry for the inconvenience. We will work on this immediately. Please use other means to contact us.');
				                            }
				              });

				              return false;
				          });

					// WOW for add water css
					new WOW().init(); 

					$("#menu-primary-navigation li a").click(function (e) {
					    var addressValue = $(this).attr("href");
					    $('html, body').animate({
						    scrollTop: $(addressValue).offset().top
						}, 800);
						 return false;
					});

					$(".navbar-brand").click(function (e) {
					    var addressValue = $(this).attr("href");
					    $('html, body').animate({
						    scrollTop: $(addressValue).offset().top
						}, 800);
						 return false;
					});

					$(".main-down-arrow").click(function (e) {
					    var addressValue = $(this).attr("href");
					    $('html, body').animate({
						    scrollTop: $(addressValue).offset().top
						}, 800);
						 return false;
					});

					// BACK TO TOP FUNCTIONALITIES
					/*$(window).scroll(function(){
					    if ($(this).scrollTop() < 200) {
					        $('#smoothup') .fadeOut();
					    } else {
					        $('#smoothup') .fadeIn();
					    }
					});*/
					$('#smoothup').on('click', function(){
					    $('html, body').animate({scrollTop:0}, 'slow');
					    return false;
					});
					$('#smoothdown').on('click', function(){
					    $('html, body').animate({scrollTop: $(document).height()-$(window).height() }, 'slow');
					    return false;
					});

					dropnav();
					
					$(window).scroll(function() {	
							$('#top').each(function() {
						        var post = $(this);
						        link1pos = post.position().top - $(window).scrollTop() - 5;
						    });
						    $('#menu').each(function() {
						        var post = $(this);
						        linkmenupos = post.position().top - $(window).scrollTop() - 5;
						    });
							$('#second').each(function() {
						        var post = $(this);
						        link2pos = post.position().top - $(window).scrollTop() - 5;
						    });
						    $('#third').each(function() {
						        var post = $(this);
						        link3pos = post.position().top - $(window).scrollTop() - 5;
						    }); 
						    $('#fourth').each(function() {
						        var post = $(this);
						        link4pos = post.position().top - $(window).scrollTop() - 5;
						    }); 
						    $('#fifth').each(function() {
						        var post = $(this);
						        link5pos = post.position().top - $(window).scrollTop() - 5;
						    }); 

						    /*if(linkmenupos>50){
						    	dropnav();
						    }
						    else if(linkmenupos<50){
						    	attachnav();
						    }
						    else{
						    }*/
					});

					function attachnav(){
							$('#main-parallax-nav').addClass('sticktotop');
							$('#main-parallax-nav').removeClass('sticktobottom');
					}

					function dropnav(){
							$('#main-parallax-nav').removeClass('sticktotop');
							$('#main-parallax-nav').addClass('sticktobottom');
					}
				});

				function togglesearch(){
			       var e = document.getElementById('header-search-popup');
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
				}

				/*document.getElementById('inside-slider-container').innerHTML=document.getElementById('outside-slider-container').innerHTML;
				document.getElementById('outside-slider-container').innerHTML=" ";*/


			</script>
		
			<script src="<?php echo bloginfo('template_directory'); ?>/js/classie.js"></script>
			<script src="<?php echo bloginfo('template_directory'); ?>/js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>

		</div><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>