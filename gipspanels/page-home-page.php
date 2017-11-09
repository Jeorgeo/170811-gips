<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gipspanels
 */

get_header(); ?>

<div class="middle-header">
	<div class="slider">
		<div class="container clearfix">
			<div class="slider__title">
				<h2>Декоративная 3D плитка из гипса</h2>
        <p>100% Экологически чистый материал</p>
				<p>собственное производство</p>
				<p>только высококачественное сырье</p>
        <p>более 200 разновидностей</p>
        <p>наши панели тоньше, легче и прочнее аналогов</p>
				<a href="#catalog">перейти в каталог</a>
				<a class="js_popup-btn" href="#">Оставить заявку</a>
			</div>
		</div>
	</div>
</div>
<div class="border-art_top"></div>
</header>
<section class="main-advantages">
	<div class="container clearfix">
		<div class="main-advantages__title">
			<p>Мы не тратимся на дорогой маркетинг, имеем собственное
				 производство и предлагаем вам приобрести гипсовые 3D панели
				 по самым выгодным ценам по России. <span>Оцените сами</span>
			 </p>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/p_icon.png" width="150" height="150"
				 alt="Собственное производство">
			<div class="main-advantages__advantage">
				<h4>Собственное производство</h4>
				<p>Мы не только продаем качественные декоративные 3D панели,
					но и сами производим их, что автоматически исключает из конечной
					стоимости продукции наценки посредников. Приобретая панели у нас,
					вы можете быть уверены – вы платите только за сами панели,
					и ни за что более.
				</p>
			</div>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/q_icon.png" width="150" height="150" alt="качество">
			<div class="main-advantages__advantage">
				<h4>качество</h4>
				<p>Мы постоянно следим за производственным процессом, и обеспечиваем
				 высокое качество на каждом из этапов создания продукции.
				 Так мы добились увеличения прочности в 5 раз,
				 при этом снизили толщину и вес в 2 раза.
				</p>
			</div>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/e_icon.png" width="150" height="150" alt="Экологичность">
			<div class="main-advantages__advantage">
				<h4>Экологичность</h4>
				<p>Мы не подмешиваем в гипс химические добавки!
					Наше производство оборудовано камерой для сушки,
					в которой гипсовые панели высыхают при определенной температуре естественно.
					Поэтому нам удается сохранить низкую стоимость при высоком качестве.
				</p>
			</div>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/l_icon.png" width="150" height="150" alt="Обратная связь">
			<div class="main-advantages__advantage">
				<h4>Обратная связь</h4>
				<p>Наши менеджеры всегда готовы помочь вам в выборе панелей,
					 ответив на любой интересующий вас вопрос.
				</p>
			</div>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/d_icon.png" width="150" height="150" alt="доставка">
			<div class="main-advantages__advantage">
				<h4>доставка и монтаж</h4>
				<p>Так же мы осуществляем доставку по Москве и Московской области.
          Монтаж производится высококвалифицированными специалистами,
          прошедшими соответствующее обучение с обязательным составлением Сметы
           и последующим заключением Договора на оказание услуг монтажа.
            Гарантия на монтажные работы составляет 1 год.
				</p>
			</div>
		</div>
		<div class="cols col-4 main-advantages__box">
			<img src="<?php bloginfo("template_directory"); ?>/img/c_icon.png" width="150" height="150"
				 alt="Собственное производство">
			<div class="main-advantages__advantage">
				<h4>покупка в несколько кликов</h4>
				<p>Достаточно выбрать нужный товар,
					рассчитать количество панелей на калькуляторе и нажать «заказать».
					Или просто закажите обратный звонок для консультации.
					Наш  менеджер перезвонит Вам в ближайшее время.
				</p>
			</div>
		</div>
	</div>
</section>
<div class="border-art_bottom"></div>
<section class="main-catalog">
	<a name="catalog"></a>
	<div class="main-catalog__title">
		<h3>Каталог продукции</h3>
	</div>
	<nav class="main-catalog__categories">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav>
	<div class="container clearfix">
		<?php the_post(); ?>
		<?php the_content(); ?>
		<div class="main-catalog__download">
			<p class="text-center"><?php the_field('catalog_text-c'); ?></p>
      <?php the_field('catalog_text-r'); ?>
      <?php the_field('catalog_text-l'); ?>
			<?php dynamic_sidebar( 'link-download' ); ?>
		</div>
	</div>
</section>
<div class="border-art_top"></div>
<section class="main-description">
	<div class="container clearfix">
		<div class="clearfix">
			<h4 class="title_right clearfix">3D панели в интерьере</h4>
		</div>
		<div class="main-description__gallery">
      <?php echo do_shortcode("[metaslider id=96]"); ?>
		</div>
		<div class="clearfix">
			<h4 class="title_left">Характеристики 3D панели</h4>
		</div>
		<div class="cols col-6 box_right">
			<div class="main-description__characteristics">
				<table>
					<tr>
						<td>Размеры:</td>
						<td class="different-text"><?php the_field('razmer'); ?></td>
					</tr>
					<tr>
						<td>Площадь:</td>
						<td class="different-text"><?php the_field('ploschad'); ?> <sup>2</sup></td>
					</tr>
					<tr>
						<td>Толщина:</td>
						<td class="different-text"><?php the_field('tolschina'); ?></td>
					</tr>
					<tr>
						<td>Вес:</td>
						<td class="different-text"><?php the_field('ves'); ?></td>
					</tr>
          <tr>
						<td>Прочность:</td>
						<td class="different-text"><?php the_field('procnnost'); ?></td>
					</tr>
					<tr>
						<td>Цена:</td>
						<td class="different-text"><?php the_field('cena'); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="cols col-6 box_left">
			<div class="main-description__calculator">
				<h6>Рассчитайте</h6>
				<p>стоимость своего заказа</p>
				<form id="js_form">
					<!-- Hidden Required Fields -->
					<input type="hidden" name="project_name" value="Гипсовыепанели.com">
					<input type="hidden" name="admin_email" value="<?php the_field('mail_filds'); ?>">
					<input type="hidden" name="position" value="Гипсовыепанели. Рассчет стоимости">
					<!-- END Hidden Required Fields -->
					<label for="width">
						<input id="width" type="text" name="width" placeholder="Длина стены в метрах">
					</label>
					<label for="height">
						<input id="height" type="text" name="height" placeholder="Высота стены в метрах">
					</label>
					<label id="label-area" class="input-title" for="area">Количество штук:</label>
					<input id="area" class="area" type="text" name="area" value="неопределено" readonly>
					<label id="label-price" class="input-title" for="price">Стоимость, рублей:</label>
					<input id="price" class="price" type="text" name="price" value="неопределено" readonly>
					<button id="calculate" type="button" name="button">Узнать стоимость заказа</button>
					<label for="mail">
						<input id="mail" class="mail" type="text" name="email" placeholder="Ваш e-mail" required value=""
            pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
					</label>
					<label for="name">
						<input id="name1" class="name" type="text" name="name" placeholder="Вашe имя" required value=""
          pattern="^[A-Za-zА-Яа-яЁё]+$">
					</label>
					<button id="order" type="submit" name="button">Отправить результат вам на почту</button>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="main-link">
	<div class="container">
		<div class="main-link__title">
			<p>Кроме панелей из гипса наша компания готова
				предложить в качестве облицовочного материала
         ИННОВАЦИЮ В ОБЛАСТИ ДЕКОРИРОВАНИЯ И ДИЗАЙНА – ГИБКИЙ КАМЕНЬ</p>
		</div>
		<div class="main-link__description clearfix">
			<div class="cols col-4">
				<img src="<?php bloginfo("template_directory"); ?>/pics/stone_1.jpg" width="320" height="270" alt="Гибкий камень">
			</div>
			<div class="cols col-8">
				<h5>Что такое гибкий камень?</h5>
				<p>Гибкий камень - это универсальный, натуральный и экологически чистый отделочный материал,
					технология котоого позволяет использовать его для отделки помещений любого типа,
					начиная с внутреннего и заканчивая внешней облицовкой фасадов</p>
				<?php dynamic_sidebar( 'link-stone' ); ?>
			</div>
		</div>
	</div>
</section>



<?php
get_footer();
