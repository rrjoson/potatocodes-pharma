<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

    <div class="container slider-container">
  	  <div id="inside-slider-container" class="animated fadeIn wow">
          
          <div class="my-slider">
              <ul>
                      
                      <?php foreach (get_field('sliders') as $row2) :
                            if($row2['slider_image']!=null){ $featured_img = $row2['slider_image']; } else { $featured_img = 'http://lorempixel.com/g/1360/900/'; }
                      ?>
                        <li class="animated-delay-2 animated fadeIn wow">
                          <img class="img-responsive" src="<?php echo $featured_img; ?>" />
                          <a class="slider-link" href="<?php if($row2['slider_image']!=null){ print $row2['slider_link']; } else { print '#'; } ?>" target="_blank"><div class="slider-caption"><?php print $row2['slider_title']; ?></div></a>
                        </li>
                      <?php endforeach; ?>
                
                <!--<li><img class="img-responsive" src="images/slider.png" /></li>
                <li><img class="img-responsive" src="images/slider.png" /></li>-->
              </ul>
            </div>
          
      </div>
    </div>

      <div id="home-fixed-container" class="fixed-container">
        <div class="container">

          <div class="col-md-12 sections home-cards">
            <h3 class="sections-head">UPCOMING EVENTS</h3>
          </div>
          
          <div class="col-md-8 left-home-section">
            <div class="sections home-cards">
              <h3 class="sections-head">ANNOUNCEMENTS</h3>
            
              <?php 
                  $display_count = 3;

                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array(
                    'showposts' => $display_count,
                    'paged' => $paged,
                    'order' => 'DESC',
                  );
                  query_posts($args);
                  if (have_posts()) : while (have_posts()) : the_post();
              ?>

                  <a class="home-announcements-link" href="<?php the_permalink(); ?>">
                    <div class="home-announcements list-items">
                      <H4><?php the_time('M j,Y'); ?></H4>
                        <div class="list-details">
                          <?php the_title(); ?>
                        </div>
                    </div>
                  </a>
              
              <?php endwhile; endif;?>
            </div>
          </div>
          <div class="col-md-4 right-home-section">
            <div class="sections home-cards">
              <h3 class="sections-head">UPCOMING EVENTS</h3>
            </div>
          </div>

          <div class="col-md-12 section">
              <?php 
                  $display_count = 4;

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

        </div>
      </div>

<?php
get_footer();
?>