<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ArtForDev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">

		<div class="header-border">
			<div class="container">
				<div class="top-header">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-social',
								'menu_id'        => 'social-menu',
							)
						);
					?>
					<?php echo get_custom_logo(  );	?>
					<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'loc-menu',
								'menu_id'        => 'localization-menu',
							)
						);
					?>
				</div>
			</div>
		</div>
		
			<nav id="site-navigation" class="main-navigation">
				<div class="container">
					<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'loc-menu',
								'menu_id'        => 'localization-menu',
							)
						);
					?>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-social',
								'menu_id'        => 'social-menu',
							)
						);
					?>
					<div class="burger-btn">
						<span></span><span></span><span></span>
					</div>
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'artfordev' ); ?></button> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>

				</div>
			</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
