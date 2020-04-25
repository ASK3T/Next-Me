<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Next_Me
 */

global $redux_demo;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<a href="<?php echo home_url("/");?>"><img src="<?php echo $redux_demo['logo']['url'];?>" alt="logo" class="logo"></a>
			</div>
			<div class="col-8">
				<nav>
<!-- 					<ul>
						<li class="link-menu"><a href="#">Функционал</a></li>
						<li class="link-menu"><a href="#">О команде</a></li>
						<li class="link-menu"><a href="#">Стоимость</a></li>
						<li class="link-menu"><a href="#">Контакты</a></li>
					</ul> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header',
							'menu_id'        => 'header-menu',
							'container' 	  => '',
							'menu_class'	  => 'TEST',
						));
					?>	
				</nav>
			</div>
			<div class="col-2">
				<a href="tel:<?php echo preg_replace("/[^0-9]/", '', $redux_demo['phone']);?>" class="header-phone"><?php echo $redux_demo['phone'];?></a>
			</div>
		</div>
	</div>
</header>
