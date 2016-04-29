<?php /* Template Name: Advisory Committee Page */ ?>
<?php get_header(); ?>

  <div id="" class="banner">
    <div class="container animated fadeIn wow">
        <label><?php the_title(); ?></label>
        <div class="banner-subtitle hidden-xs">
          <p>
                <?php the_field('banner_description'); ?>
          </p>
        </div>
     </div>
  </div>

      <div class="fixed-container">
                <!-- Sub Menus -->

        <div class="container">

              <div class="section  animated fadeIn wow">
                <?php
                  while ( have_posts() ) : the_post();

                    the_content(); 

                  endwhile; // End of the loop.
                ?>
              </div>

              <div class="section  animated fadeIn wow">

                 <?php foreach (get_field('ad_committee_list') as $row2) :
                        if($row2['committee_image']!=null){ $committee_img = $row2['committee_image']; } else { $committee_img = 'http://lorempixel.com/g/200/110/'; }
                  ?>
                <!-- Advisory Committee -->
                <div class="col-xs-12 col-sm-6 ac-item">
                  <div class="col-xs-4 img-container"><img class="animated animated-delay-2 fadeIn" src="<?php echo $committee_img; ?>"></div>
                  <div class="col-xs-8">
                    <h2><?php print $row2['committee_country']; ?></h2>
                    <h4><?php print $row2['committee_title']; ?></h4>
                    <p><?php print $row2['committee_details']; ?></p>
                  </div>
                </div>

                <?php endforeach; ?>
              </div>
        
          </div>
        </div>

<?php
/*get_sidebar();*/
get_footer();
?>