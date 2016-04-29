<?php /* Template Name: List Page */ ?>
<?php get_header(); ?>

    <div id="" class="banner">
      <div class="container animated fadeIn wow">
          <label><?php the_title(); ?></label>
          <div class="banner-subtitle hidden-xs">
          <p>
                  <?php
                    while ( have_posts() ) : the_post();

                      the_field('banner_description');

                    endwhile; // End of the loop.
                  ?>
          </p>
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

          <div class="section">
            <?php 
                $display_count = 6;

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
                    <div class="col-xs-12 col-sm-6 cards animated fadeInUp wow">
                      <div class="img-container hidden-xs">
                        <img class="animated animated-delay-2 fadeIn" src="<?php echo $featured_img; ?>">
                      </div>
                      <div class="cards-detail">
                        <i><?php the_time('M j,Y'); ?></i>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                      </div>
                    </div>
                  </a>
            
            <?php endwhile; endif;?>
        </div>

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

        </div>
      </div>

<?php
get_footer();
?>