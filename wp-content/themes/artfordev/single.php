<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ArtForDev
 */

get_header();
?>

	<main id="primary" class="site-main mt-15">
		<div class="container">
			<div class="row">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
					

					// If comments are open or we have at least one comment, load up the comment template.
					

				endwhile; // End of the loop.
				?>
			</div>
			<?php 
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'artfordev' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'artfordev' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
			?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
