<?php 
	$args = array(
		'show_option_all'    => '',
		'show_option_none'   => __('No categories'),
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => true,
		'title_li'           => '',
		'number'             => NULL,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => 'Walker_Category',
		'hide_title_if_empty' => false,
		'separator'          => '<br />',
	);
	
?>
<div class="container">
	<?php	
		echo "<div class='section-heading'>";
			echo "<div class='front-title'>";
			wp_title('');
			echo "</div>";
		echo "</div>";
		echo "<ul class='cat-items'>";
			wp_list_categories( $args );
		echo "</ul>";
	?>
</div>