<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package potato_theme
 */

get_header(); ?>

	<div id="" class="banner search-banner">
	    <div class="container animated fadeIn wow">
	        <label>SEARCH RESULTS</label>	        
	     </div>
	</div>

	<div class="fixed-container">
		<div class="container">
			<section id="primary" class="search-list-container content-area">
				<main id="main" class="site-main" role="main">

				<?php
					$display_count = 5;
                	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                	$args = array(
	                  'showposts' => $display_count,
	                  'paged' => $paged,
	                  'order' => 'DESC'
	                  /*'category_name' => get_field('page_filter')*/
	                );


				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'potato_theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->
			
			<div class="section col-xs-12">
                <div class="pagination-container animated fadeIn wow">
                    <?php
                        if (function_exists("pagination")) {
                            pagination();
                        }
                    ?>
	            </div>
	        </div>
		</div>
	</div>

<?php
/*get_sidebar();*/
get_footer();
?>