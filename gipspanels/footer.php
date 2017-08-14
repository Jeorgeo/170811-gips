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
<div class="wrap"></div>

<div id="window" class="popup-question">
  <div class="popup-question-close">
    X
  </div>
  <h5>Ваша заявка</h5>
  <p>Пожалуйста, заполните все поля. Мы свяжемся с вами в ближайшее время</p>
  <div class="main-catalog-order">
  </div>
		<form id="js_form2" class="question-form-box clearfix">
			<input id="indicator-title" type="hidden" name="indicator-title" value="по умолчанию">
    	<input id="indicator-price" type="hidden" name="indicator-price" value="по умолчанию">
			<input id="indicator-quantity" type="hidden" name="indicator-quantity" value="по умолчанию">
    	<label for="name"></label>
    	<input id="name" type="text" name="name" placeholder="Как к вам обращаться*" required>
    	<label for="phone"></label>
    	<input id="phone" type="text" name="phone" placeholder="Ваш телефон*" required>
    	<label for="message"></label>
    	<textarea id="message" name="message"  value="Ваши пожелания, уточнения">
    	</textarea>
    	<span>* - Обязательно для заполнения</span>
    	<button class="form-message-btn" type="submit"  name="send" value="отправить">отправить</button>
  	</form>
	</div>
<div id="toTop">
	<a class="arrow-up" href="#top">
		<span>arrow-up</span>
	</a>
</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo("template_directory"); ?>/js/modal.js"></script>

</body>
</html>
