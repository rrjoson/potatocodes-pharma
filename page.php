<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

get_header(); ?>
<div class="row banner-container">
  <div class="container animated fadeIn wow">
    <div class="banner">  

        <?php
            while ( have_posts() ) : the_post();

               if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/300/250"; }

            endwhile; // End of the loop.
        ?>
        <button class="banner-button"><i class="fa fa-camera"><i class=" banner-button-text">UST PHARMACY</i></i></button>
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
                Sample H2
              </h2> 
            </div>

            <div class="green-border"></div>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="green-border"></div>
            <h3 class="side-head"><i>Specialized Faculty</i></h3>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="center"><a href="" class="side-button">LEARN MORE</a></div>
        </div>

        <div class="col-md-9 main-content sections">
          
          <div class="section">
            <h3 class="sub-head">
              Sample H3
            </h3>
            <h4 class="sub-sub-head">
              Sample H4
            </h4>
            <p>
              Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
            </p>
          </div>

          
          <div class="section">
            <div class="list-items">
              <H4>Buhay sa bahay ng kimika ng buhay</H4>
              <p>This is a sample paragraph, just a sample paragraph</p>
                <div class="list-details">
                  <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
                  <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
                  <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
                  <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
                </div>
            </div>
          </div>
          
          <div class="section">
            <a href="" class="section-button">
              VIEW ALL ANNOUNCEMENTS
            </a>

            <a href="" class="section-button showmore">
              +SAMPLE CHANGE CONTAINER
            </a>
          </div>


          <div class="section cs-list-items">
            <div class="col-md-4 cs-image">
              <?php
                while ( have_posts() ) : the_post();

                if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/300/250"; }

                endwhile; // End of the loop.
              ?>
              <img src="<?php echo $featured_img; ?>">    
            </div>
            <div class="col-md-8 cs-items">
              <h5>Faculty of Pharmacy Student Council (FPSC)</h5>
              <h6>FPSC is the student government in the Faculty of Pharmacy (including Medical Technology and Biochemistry). The
              Council shall serve as official liason between the studentry and the faculty and university officials. It may be involved
              or may take charge of activities that will lead to the intellectual, spiritual, physical and social upliftment of the students
              in coordination with the other recognized organizations of the Faculty.</h6>
              <div class="list-details">
                <i class="fa fa-circle fa.symbol"></i><h5 class="mini-head">Sample H5: </h5><h6 class="mini-details"><i>Sample H6</i></h6>
              </div>
            </div>
          </div>
          

          <div class="section">
            <form class="contact-form" action="demo_form.asp">
              <input class="contact-details" type="text" name="name" placeholder="Name"><br>
              <input class="contact-details" type="text" name="email" placeholder="Email"><br>
              <textarea class="contact-details" rows="4" cols="50" name="message" placeholder="Message"></textarea><br>
              <input class="contact-submit" type="submit" value="Submit">
            </form>
          </div>

          <div class="section">
            <?php
              while ( have_posts() ) : the_post();

                the_content(); 

              endwhile; // End of the loop.
            ?>
          </div>

        </div>

        <div class="col-md-8 sections home-cards">
          <h3 class="sections-head">UPCOMING EVENTS</h3>
        </div>
        
  		</div>
	  </div>
  </div>

<?php
get_footer();
?>