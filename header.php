<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header>

				<nav>

					<?php
					/* MUST: Create menu on functions.php */
					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);
					?>

			</nav>

		</header><!-- #site-header -->
