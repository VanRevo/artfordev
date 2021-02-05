<?php 
	get_header();
?>
<div class="video-wrap">
	<?php
		$videoUrl = get_field('video_main');
		if($videoUrl){
			echo do_shortcode('[arve url="'.$videoUrl.'" controls="false" maxwidth="1920"/]');
		}
	?>
	<a id="playBtn"><span></span><span></span></a>
</div>
	<div class="container">
		<div class="section-heading">
			<h3 class="front-title">Новые проекты</h3>
		</div>
		
		<?php
			$result = wp_get_recent_posts( [
				'numberposts'      => 10,
				'offset'           => 0,
				'category'         => 0,
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_status'      => 'draft, publish, future, pending, private',
				'suppress_filters' => true,
			], OBJECT );
			?>
			<div class="projects-wrapper">
				<div class="container">
					<div class="row">	
					<?php
						foreach( $result as $post ){
							?>
								<div class="col-6 col-md-4 col-lg-4 col-xl-4">
									<a class="project-item" href="<?php the_permalink(); ?>">
										<?php
										setup_postdata( $post );
										the_post_thumbnail();
										?><span class="project-title"><?php the_title();?></span><?php
										?>
									</a>
								</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<?php
		wp_reset_postdata();
			
		?>
	</div>
	<div class="frontpage-content">
		<div class="container">
			<div class="frontpage-content_wrapper">
				<?php 
					the_content('');
				?>
				<a href="http://localhost/o-studii/">Читать больше</a>
			</div>
		</div>
	</div>
	
<?php 
	get_footer();
?>