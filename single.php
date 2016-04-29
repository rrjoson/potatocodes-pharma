<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package potato_theme
 */

get_header(); ?>

	<div id="indiv-banner" class="banner">
	    <div class="container animated fadeIn wow">
	        <label><?php the_title(); ?></label>
	        <div class="banner-subtitle hidden-xs">
	        <p>This is a paragraph that consist of words and text and punctuations like this! I would just like to fill this up with nonsense words. Blah blah, tralala..</p>
	        </div>
	     </div>
  	</div>
  	<div class="fixed-container">
	  	<div class="container">
	  		<div class="section animated fadeIn wow">
                <!-- link button container-->
                <div class="btn-link-container return-btn">
                  <a href="#">                    
                    <i class="fa fa-chevron-circle-left"></i>
                    <p>Return</p>
                  </a>
                </div>
            </div>
            <div class="section animated fadeIn wow">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				/*the_post_navigation();*/

			?>

			

			<?php
			endwhile; // End of the loop.
			?>
			</div>
			
			<div class="section animated fadeIn wow">
                <!-- link button container-->
                <div class="btn-link-container return-btn">
                  <a href="#">                    
                    <i class="fa fa-chevron-circle-left"></i>
                    <p>Return</p>
                  </a>
                </div>
            </div>

            <div class="orange-border animated fadeIn wow"></div>

            
            <div class="section">
            <h2 class="animated fadeIn wow">More ASEACCU News and Events</h2>
	            <?php 
	                $display_count = 3;

	                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	                $args = array(
	                  'showposts' => $display_count,
	                  'paged' => $paged,
	                  'order' => 'DESC',
	                  'category_name' => get_field('page_filter')
	                );
	                query_posts($args);
	                if (have_posts()) : while (have_posts()) : the_post();
	            
	                if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/300/250"; }
	            ?>

	                <a class="unlinkify" href="<?php the_permalink(); ?>">
	                  <div class="col-xs-12 col-sm-4 cards suggested-cards animated fadeInUp wow">
	                    <div class="img-container hidden-xs">
                        <img class="animated animated-delay-2 fadeIn" src="<?php echo $featured_img; ?>">
                      </div>
	                    <div class="cards-detail">
	                      <i><?php the_time('M j,Y'); ?></i>
                          <h2><?php the_title(); ?></h2>                      
	                    </div>
	                  </div>
	                </a>
	            
	            <?php endwhile; endif;?>
	        </div>


		</div>
	</div>

<?php
/*get_sidebar();*/
get_footer();
?>