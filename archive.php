<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

get_header(); ?>

	<div id="" class="banner">
	    <div class="container animated fadeIn wow">
	        <label>NEWS/EVENTS</label>
	        <div class="banner-subtitle hidden-xs">
	        <p>This is the archive page for your news and events.</p>
	        </div>
	     </div>
	</div>

    <div class="fixed-container">
    	<div class="submenu-container"> 
          <div class="container">       
          <?php
            if (has_nav_menu('categories')) :
              wp_nav_menu(array('theme_location' => 'categories', 'menu_class' => 'menu-navigation nav navbar-nav', 'menu_id' => 'category-navbar'));
            endif;
          ?>
          </div>
        </div>


    	<div class="container">

    		<?php
				$display_count = 6;

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                  'showposts' => $display_count,
                  'paged' => $paged,
                  'order' => 'DESC'
                  /*'category_name' => get_field('page_filter')*/
                );
                query_posts($args);
		if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header> --><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<a class="unlinkify" href="<?php the_permalink(); ?>">
                  <div class="col-xs-12 col-sm-6 cards animated fadeInUp wow">
                    <div class="img-container hidden-xs">
                      <img class="animated animated-delay-2 fadeIn" src="http://lorempixel.com/300/250">
                    </div>
                    <div class="cards-detail">
                      <i>March 12, 2016</i>
                      <h2>Card Title - A long card title that aims to test how far one card can go</h2>
                      <p>This is a sample content. I write just to test our awesome codes, this is the limit case for all future snippets for our cards. That's just 150 characters, just like a twitter tweet. This is a sample content. I write just to test our awesome codes, this is the limit case for all future snippets for our cards. That's just 150 characters, just like a twitter tweet.</p>
                    </div>
                  </div>
                </a>

			<?php 
			endwhile; ?>

			<div class="section">
	                <div class="pagination-container animated fadeIn wow">
	                    <?php
	                        if (function_exists("pagination")) {
	                            pagination();
	                        }
	                    ?>
	                </div>
	        </div>
	        <?php wp_reset_query(); ?>

			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    	</div>
    </div>

<?php
get_footer();
