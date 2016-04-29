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

          <div class="section cs-list-items">
            <div class="col-md-3 cs-image">
              <?php
                while ( have_posts() ) : the_post();

                if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/300/250"; }

                endwhile; // End of the loop.
              ?>
              <img src="<?php echo $featured_img; ?>">    
            </div>
            <div class="col-md-9 cs-items">
              <h4>Faculty of Pharmacy Student Council (FPSC)</h4>
              <h6>FPSC is the student government in the Faculty of Pharmacy (including Medical Technology and Biochemistry). The
              Council shall serve as official liason between the studentry and the faculty and university officials. It may be involved
              or may take charge of activities that will lead to the intellectual, spiritual, physical and social upliftment of the students
              in coordination with the other recognized organizations of the Faculty.</h6>
              <div class="list-details">
                <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
              </div>
            </div>
          </div>

        </div>
        
      </div>
    </div>
  </div>

<?php
/*get_sidebar();*/
get_footer();
?>