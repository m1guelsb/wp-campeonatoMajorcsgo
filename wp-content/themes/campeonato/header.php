<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/dist/sortable-tables.min.css">
		

        <?php wp_head(); ?>
	</head>

	<body>
		
		<header>
			<nav>
			<?php
				$args = array(
					'menu' => 'principal',
					'container' => false
				);
				wp_nav_menu( $args );
			?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri();?>/img/major-logo.png" alt="Logo"></h1>
		</header>