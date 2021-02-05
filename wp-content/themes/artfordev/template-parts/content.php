<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ArtForDev
 */

?>
		<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-4"); ?>>
			<div class="post-container">
				<header class="entry-header">
					<?php
					$postID = get_the_ID();
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<div class="publication-date-wrap">
								<span>Опубликовано:
									<span class="publication-date"><?php echo get_the_date("",$postID); ?></span> в
									<span><?php echo get_the_time('', $posdID);?></span>
								</span>
							</div>	
							<div class="publication-author-wrap">
								<span>Автор:
									<span class="publication-author"><?php echo get_the_author($posdID); ?></span>
								</span>

							</div>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<?php artfordev_post_thumbnail(); ?>
			</div>
		</div>
