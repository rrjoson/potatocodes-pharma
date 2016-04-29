<?php /* Template Name: Contact Page */ ?>
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
            </div>

            <div class="green-border"></div>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="green-border"></div>
            <h3 class="side-head"><i>Specialized Faculty</i></h3>
            <p class="side-text"><i>LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUM</i></p>
            <div class="center"><a href="" class="side-button">LEARN MORE</a></div>
        </div>
        <div class="col-md-9 main-content sections">
          <h3 class="sub-head">
            Contact the Faculty
          </h3>
          <p>
            You can contact the Faculty with the information listed below:
          </p>
          
          <div class="col-md-8">
            <div class="col-md-6">
              <div class="list-items contact-items">
                <div class="list-details contact-details">
                  <i class="fa fa-circle fa.symbol"></i><h4 class="mini-head">Sample H5: </h4>
                </div>
                <p>
                  Faculty of Pharmacy<br>
                  2nd Floor Main Building,<br>
                  University of Santo Tomas<br>
                  Espana, Manila 1008
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="list-items contact-items">
                <div class="list-details contact-details">
                  <i class="fa fa-circle fa.symbol"></i><h4 class="mini-head">Sample H5: </h4>
                </div>
                <p>
                  Faculty of Pharmacy<br>
                  2nd Floor Main Building,<br>
                  University of Santo Tomas<br>
                  Espana, Manila 1008
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="list-items contact-items">
                <div class="list-details contact-details">
                  <i class="fa fa-circle fa.symbol"></i><h4 class="mini-head">Sample H5: </h4>
                </div>
                <p>
                  Faculty of Pharmacy<br>
                  2nd Floor Main Building,<br>
                  University of Santo Tomas<br>
                  Espana, Manila 1008
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="list-items contact-items">
                <div class="list-details contact-details">
                  <i class="fa fa-circle fa.symbol"></i><h4 class="mini-head">Sample H5: </h4>
                </div>
                <p>
                  Faculty of Pharmacy<br>
                  2nd Floor Main Building,<br>
                  University of Santo Tomas<br>
                  Espana, Manila 1008
                </p>
              </div>
            </div>  
          </div>

          <div class="col-md-8">
            <form class="contact-form" action="demo_form.asp">
              <input class="contact-form-details" type="text" name="name" placeholder="Name"><br>
              <input class="contact-form-details" type="text" name="email" placeholder="Email"><br>
              <textarea class="contact-form-details" rows="4" cols="50" name="message" placeholder="Message"></textarea><br>
              <input class="contact-submit" type="submit" value="Submit">
            </form>
          </div>

        </div>
        
      </div>
    </div>
  </div>

<?php
/*get_sidebar();*/
get_footer();
?>