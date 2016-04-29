<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-containers container fadeIn wow">
				
				<h2 class="animated fadeInUp wow"><?php the_title(); ?></h2>
				<span class="animated fadeIn wow"><?php the_content(); ?></span>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</article><!-- #post-## -->
