<?php /* Template Name: Campus Life Page */ ?>
<?php get_header(); ?>

	<div class="row banner-container">
    <div class="container animated fadeIn wow">
      <div class="banner">  
          <?php
              while ( have_posts() ) : the_post();

                 if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/300/250"; }

              endwhile; // End of the loop.
          ?>
          <img src="<?php echo $featured_img; ?>">
      </div>
    </div> 
  </div>



  <div class="fixed-container">
    <div class="container">
      <div class="fixed-container-inner">
        <div class="col-md-3 sidebar">
            
             <div class="sidebar-header">
              <h2 class="page-title">
                <?php the_title(); ?>
              </h2>
              <?php
                if (has_nav_menu('campuslife')) :
                  wp_nav_menu(array('theme_location' => 'campuslife', 'menu_class' => 'side-menu'));
                endif;
              ?>
            </div>

            <div class="green-border"></div>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="green-border"></div>
            <h3 class="side-head"><i>Specialized Faculty</i></h3>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="center"><a href="" class="side-button">LEARN MORE</a></div>
        </div>
        <div class="col-md-9 main-content sections">
          
          <?php
            while ( have_posts() ) : the_post();

              the_content(); 

            endwhile; // End of the loop.
          ?>

        </div>
        
      </div>
    </div>
  </div>

<?php
/*get_sidebar();*/
get_footer();
?>