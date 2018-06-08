<?php get_header(); ?>

<!-- .sectionMain -->
<section class="sectionMain" style="background-image: url(<?= get_field('основная_картинка'); ?>);">
	<div class="container">
		<div class="wrapper">
			<div class="sloganMain">
				<img src="<?= get_field('лого-текст'); ?>" alt="">
				<div class="sloganMain__title"><?= get_field('заголовок'); ?></div>
				<p>
				<?= get_field('описание'); ?>	
				</p>
				<div class="navBtn">
					<a href="#" class="btnDef__light btnDef__light_yellow animated bounce"><span><?= get_field('кнопка'); ?></span></a>
				</div>
			</div>

		</div>
	</div>
</section><!-- End .sectionMain -->


<!-- .sectionAbout -->
<section class="sectionAbout">

	<!-- .container -->
	<div class="container">


		<h2><?= get_field('о_компании'); ?></h2>

		<div class="description defaultWrapper">
		<?= get_field('о_компании_описание'); ?>
		</div>

	</div><!-- End .container -->
</section><!-- End .sectionAbout -->

<!-- .sectionServices -->
<section class="sectionServices">
	<div class="container">

		<!-- .lineVertical -->
		<div class="lineVertical">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div><!-- End .lineVertical -->

		<div class="titleSection">
			<h2><span>у</span>слуг<span>и</span></h2>
			<div class="line"></div>
		</div>

		<!-- .wrapperServices -->
		<div class="wrapperServices">

			<div class="sliderDefault sliderServices">

				<div class="item">
					<!-- .blockServic -->
					<div class="blockServic">
						<div class="blockServic__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_serv_1.png" alt=""></div>
						<div class="blockServic__title">Мобильные приложения</div>
						<div class="blockServic__link"><a href="#">подробнее</a></div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockServic">
						<div class="blockServic__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_serv_4.png" alt=""></div>
						<div class="blockServic__title">AR-доп. реальность</div>
						<div class="blockServic__link"><a href="#">подробнее</a></div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockServic">
						<div class="blockServic__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_serv_2.png" alt=""></div>
						<div class="blockServic__title">3d Моделирование</div>
						<div class="blockServic__link"><a href="#">подробнее</a></div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockServic">
						<div class="blockServic__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_serv_animate.png" alt=""></div>
						<div class="blockServic__title">Анимация</div>
						<div class="blockServic__link"><a href="#">подробнее</a></div>
					</div><!-- End .blockServic -->
				</div>


				<div class="item">
					<!-- .blockServic -->
					<div class="blockServic">
						<div class="blockServic__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_serv_3.png" alt=""></div>
						<div class="blockServic__title">Графический дизайн</div>
						<div class="blockServic__link"><a href="#">подробнее</a></div>
					</div><!-- End .blockServic -->
				</div>

			</div>
			<div class="sliderServices__nav"></div>

		</div><!-- End .wrapperServices -->
	</div>
</section><!-- End .sectionServices -->


<!-- .sectionAdvantages -->
<section class="sectionAdvantages"> 
	<div class="container">
		
		<!-- .lineVertical -->
		<div class="lineVertical">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div><!-- End .lineVertical -->

		<div class="mainImg">
			<img src="<?php echo  get_template_directory_uri()?>/img/advans_bg.png" alt="">
		</div>

		<div class="titleSection">
			<h2><span>Н</span>аши <span>п</span>реимущества</h2>
		</div>

		<!-- .blocksAdvantages -->
		<div class="blocksAdvantages">

			<div class="item">
				<!-- .blockAdv -->
				<div class="blockAdv">
					<div class="blockAdv__number">01</div>
					<div class="part">
						<div class="blockAdv__title">Доступные цены</div>
						<div class="blockAdv__description">Делаем цифровые коммуникации ближе. Ведем доступную ценовую политику.</div>
					</div>
					<div class="part"><div class="blockAdv__icon"><img src="<?php echo  get_template_directory_uri()?>/img/adv_1.png" alt=""></div></div>
				</div><!-- End .blockAdv -->
			</div>

			<div class="item">
				<!-- .blockAdv -->
				<div class="blockAdv">
					<div class="blockAdv__number">02</div>
					<div class="part">
						<div class="blockAdv__title">Всегда на связи</div>
						<div class="blockAdv__description">Мы информируем наших клиентов о процессе выполнения заказа.</div>
					</div>
					<div class="part"><div class="blockAdv__icon"><img src="<?php echo  get_template_directory_uri()?>/img/adva_2.png" alt=""></div></div>
				</div><!-- End .blockAdv -->
			</div>

			<div class="item">
				<!-- .blockAdv -->
				<div class="blockAdv">
					<div class="blockAdv__number">03</div>
					<div class="part">
						<div class="blockAdv__title">Комплексный подход</div>
						<div class="blockAdv__description">MY AR выполняет полный спектр работ от разработки до успешной реализации в жизни.</div>
					</div>
					<div class="part"><div class="blockAdv__icon"><img src="<?php echo  get_template_directory_uri()?>/img/adv_3.png" alt=""></div></div>
				</div><!-- End .blockAdv -->
			</div>

			<div class="item">
				<!-- .blockAdv -->
				<div class="blockAdv">
					<div class="blockAdv__number">04</div>
					<div class="part">
						<div class="blockAdv__title">Любовь к делу</div>
						<div class="blockAdv__description">Каждый новый проект – это возможность раскрыть свой творческий потенциал.</div>
					</div>
					<div class="part"><div class="blockAdv__icon"><img src="<?php echo  get_template_directory_uri()?>/img/adv_4.png" alt=""></div></div>
				</div><!-- End .blockAdv -->
			</div>
		</div><!-- End .blocksAdvantages -->

	</div>
</section><!-- End .sectionAdvantages -->


<!-- .sectionExamples -->
<section class="sectionExamples">
		<h2><span>П</span>римеры наших рабо<span>т</span></h2>
		<div class="blocksEsxamples">

			<div class="blockEsxample">
				<div class="blockEsxample__picture"><span style="background-image: url(<?php echo  get_template_directory_uri()?>/img/block_ex_1.jpg)"></span></div>
				<div class="shell">
					<div class="blockEsxample__title">3d Моделирование</div>
					<a href="#" class="link btnDef__light">ПОДРОБНЕЕ</a>
				</div>

			</div>
			<div class="blockEsxample">
				<div class="blockEsxample__picture"><span style="background-image: url(<?php echo  get_template_directory_uri()?>/img/block_ex_2.jpg)"></span></div>
				<div class="shell">
					<div class="blockEsxample__title">дополненная реальность</div>
					<a href="#" class="link btnDef__light">ПОДРОБНЕЕ</a>
				</div>
			</div>
			<div class="blockEsxample">
				<div class="blockEsxample__picture"><span style="background-image: url(<?php echo  get_template_directory_uri()?>/img/block_ex_3.jpg)"></span></div>
				<div class="shell">
					<div class="blockEsxample__title">Анимация</div>
					<a href="#" class="link btnDef__light">ПОДРОБНЕЕ</a>
				</div>
			</div>
			<div class="blockEsxample">
				<div class="blockEsxample__picture"><span style="background-image: url(<?php echo  get_template_directory_uri()?>/img/block_ex_4.jpg)"></span></div>
				<div class="shell">
					<div class="blockEsxample__title">2D и 3D видео</div>
					<a href="#" class="link btnDef__light">ПОДРОБНЕЕ</a>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="description defaultWrapper">
				My ar делает качественные услуги цифровых коммуникаций, которые эффективно работают. Наша команда поможет придумать привлекательную концепцию для Вашей идеи и воплотить ее в жизнь.
			</div>
		</div>
</section><!-- End .sectionExamples -->


<!-- .sectionsectionReality -->
<section class="sectionReality">
	<div class="container">

		<!-- .lineVertical -->
		<div class="lineVertical">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div><!-- End .lineVertical -->

		<div class="titleSection">
			<h2><span>Д</span>ополненная реальност<span>ь</span></h2>
			<div class="line"></div>
		</div>

		<!-- .wrapperServices -->
		<div class="wrapperReality">
			<div class="sliderReality">

				<div class="item">
					<!-- .blockServic -->
					<div class="blockReality">
						<div class="blockReality__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_real_1.png" alt=""></div>
						<div class="blockReality__title">Взаимодействие</div>
						<div class="blockReality__descript">Меняет представление взаимодействия с окружающим миром</div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockReality">
						<div class="blockReality__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_real_2.png" alt=""></div>
						<div class="blockReality__title">Информативность</div>
						<div class="blockReality__descript">Позволяет предоставить информацию здесь и сейчас</div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockReality">
						<div class="blockReality__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_real_3.png" alt=""></div>
						<div class="blockReality__title">Отношение</div>
						<div class="blockReality__descript">
							Соединяет людей с брендами, создает позитивное отношение к вашему бренду и делает 
							увлекательным процесс общения с ним
						</div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockReality">
						<div class="blockReality__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_real_4.png" alt=""></div>
						<div class="blockReality__title">Вариантивность</div>
						<div class="blockReality__descript">Изображение маркер может быть любого формата и нанесено на любой предмет</div>
					</div><!-- End .blockServic -->
				</div>

				<div class="item">
					<!-- .blockServic -->
					<div class="blockReality">
						<div class="blockReality__icon"><img src="<?php echo  get_template_directory_uri()?>/img/icon_real_3.png" alt=""></div>
						<div class="blockReality__title">Отношение</div>
						<div class="blockReality__descript">
							Соединяет людей с брендами, создает позитивное отношение к вашему бренду и делает 
							увлекательным процесс общения с ним
						</div>
					</div><!-- End .blockServic -->
				</div>
			</div>
			<div class="sliderReality__nav"></div>
		</div><!-- End .wrapperServices -->

</section>
<!-- End .sectionReality -->





	<!-- .footer -->
	<footer class="footer">
		<div class="footerTop">
			<div class="container">
				<div class="footerSlogan">
					<div class="footerSlogan__picture"><img src="<?php echo  get_template_directory_uri()?>/img/lg_logo.png" alt=""></div>
					<div class="footerSlogan__txt">
						<img src="<?php echo  get_template_directory_uri()?>/img/logo_lg.png" alt="">
						<p><a href="tel:+7 (909) 157-31-23"><span>+7 (909)</span> 157-31-23</a></p>
						<p>"БЦ Голден Гейт"</p>
						<p><a href="email:info@my-ar.ru">info<span>@my-ar.ru</span></a></p>
					</div>
					<div class="navBtn">
						<a href="#" class="btnDef__light btnDef__light_yellow"><span>НАЧАТЬ ПРОЕКТ</span></a>
						<a href="#" class="btnDef__light"><span>НАПИСАТЬ НАМ</span></a>
					</div>
				</div>

			</div>
		</div>

		
<!-- 		<div class="footerBottom">
			
			<div class="container">
				
				<div class="footerWrapper">
					
					<div class="footerItem">
						<div class="logo"><a href="#"><img src="<?php echo  get_template_directory_uri()?>/img/logo.png" alt=""></a></div>
						<nav class="menuTop">
							<ul>
								<li><a href="#">Услуги</a></li>
								<li><a href="#">Портфолио</a></li>
								<li><a href="#">Связаться с нами</a></li>
								<li><a href="#">Блог </a></li>
							</ul>
						</nav>
					</div>
					
					<div class="footerItem">
						<a href="tel:+7(909)157 31 23" class="callBtn"><img src="<?php echo  get_template_directory_uri()?>/img/icon_call.png" alt="">+7(909)157 31 23</a>
						<a href="#" class="btnDef"><span>ЗАКАЗАТЬ ПРОЕКТ</span></a>
					</div>

				</div>
			</div>
		</div> -->


	</footer><!-- End .footer -->

	<!-- .modal  subscribe -->
	<div class="modal fade  writeModal"  id="btnWrite" tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">

			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">По любому вопросу звоните по телефону <a href="tel:+7 (909) 157 31 23">+7 (909) 157 31 23</a> или заполните форму</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">

					<form action="">
						<div class="form__group">
							<input type="text" placeholder="Ваше имя">
						</div>
						<div class="form__group">
							<input type="tel" placeholder="Ваш телефон">
						</div>
						<div class="form__group">
							<input type="email" placeholder="Ваш e-mail">
						</div>
						<div class="form__group">
							<textarea name="" placeholder="Ваш комментарий"></textarea>
						</div>
						<div class="form__group">
							<button type="submit" class="btnDef">НАЧАТЬ ПРОЕКТ</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div><!-- End .subscribe -->
<script>

	var mobileBtn = $("#mobileBtn");
mobileBtn.on('click',  function(event) {
	event.preventDefault();
	$(this).toggleClass('active');
	$(".menuTop").toggleClass('active');
});

var sliderServices = $(".sliderServices");
sliderServices.slick({
	slidesToShow: 4,
	arrows: true,
	dots: false,
	speed: 1000,
	autoplaySpeed: 4000,
	infinite: false,
	nextArrow: '<div class="icon-arrow icon-arrow-next"><img src="<?php echo  get_template_directory_uri()?>/img/arrow_slider_next.png" alt="" /></div>',
	prevArrow: '<div class="icon-arrow icon-arrow-prev"><img src="<?php echo  get_template_directory_uri()?>/img/arrow_slider_prev.png" alt="" /></div>',
	appendArrows: $(".sliderServices__nav"),
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},

		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 651,
			settings: {
				slidesToShow: 1,
			}
		},

	],
});
console.log("test");
</script>

	<?php get_footer(); ?>