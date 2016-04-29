<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php  if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/1360/600/"; } ?>
    

    <div class="post" id="post-<?php the_ID(); ?>">

      <div class="individual-container container">
        
        <span class="animated fadeIn wow"><?php the_content(); ?></span>

        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

      </div>

      <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

    </div>
    
    <?php // comments_template(); ?>
</article><!-- #post-## -->