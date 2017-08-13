<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gipspanels
 */

?>

	</main><!-- #content -->

</main>
<footer class="main-footer">
	<div class="contacts clearfix">
		<div class="contacts__title">
			<h2>Декоративные 3D панели из гипса</h2>
		</div>
		<?php dynamic_sidebar( 'contacts-f' ); ?>
		<?php dynamic_sidebar( 'footer-btn' ); ?>
		<?php dynamic_sidebar( 'footer-map' ); ?>
	</div>
</footer>
<div id="toTop">
	<a class="arrow-up" href="#">
		<span>arrow-up</span>
	</a>
</div>

<?php wp_footer(); ?>

</body>
</html>
