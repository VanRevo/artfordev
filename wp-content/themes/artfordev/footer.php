<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ArtForDev
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="socials-footer">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-social',
								'menu_id'        => 'social-menu',
							)
						);
					?>
				</div>
				<div class="content-footer">
					<span>© We-Art. Все права защищены.</span>
				</div>
				<div class="some-icon">
					<img src="http://localhost/wp-content/uploads/2020/12/group-5.png" alt="">
				</div>		
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
