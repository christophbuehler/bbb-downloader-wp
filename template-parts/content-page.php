<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bbbdownloadercom
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="block">
		<?php
		if ('post' === get_post_type()) :
		?>

			<div class="meta">
				<?php
				echo get_the_author_meta('display_name');
				?>,
				<?php
				echo get_the_date('F Y');
				?>
			</div>
		<?php endif; ?>

		<?php bbbdownloadercom_post_thumbnail(); ?>

		<div class="content">
			<?php
			the_content(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bbbdownloadercom'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'bbbdownloadercom'),
				'after'  => '</div>',
			));
			?>
		</div>
	</div>
</article>