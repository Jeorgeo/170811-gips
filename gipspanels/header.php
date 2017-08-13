<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gipspanels
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header class="main-header">
		<div class="top-header">
			<span class="top-header__flag">ПРоизводитель № 1 В Росиии</span>
			<div class="container">
				<ul class="top-header__social">
					<?php dynamic_sidebar( 'fb-icon' ); ?>
					<?php dynamic_sidebar( 'vk-icon' ); ?>
					<?php dynamic_sidebar( 'ok-icon' ); ?>
					<?php dynamic_sidebar( 'in-icon' ); ?>
				</ul>
				<a class="top-header__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1>Московская проиизводственная компания</h1>
				</a>
				<div class="top-header__logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header-contacts">
					<?php dynamic_sidebar( 'top-phone' ); ?>
					<?php dynamic_sidebar( 'top-mesanger' ); ?>
				</div>
			</div>
		</div>
		<div class="middle-header">
			<div class="slider">
				<div class="container clearfix">
					<div class="slider__title">
						<h2>Декоративная 3D плитка из гипса</h2>
						<p>100% экологически чистый материал</p>
						<p>Дешевле именитых брендов до 40%</p>
						<a href="#catalog">перейти в каталог</a>
					</div>
				</div>
			</div>
		</div>
		<div class="border-art_top"></div>
	</header>

	  <main>
