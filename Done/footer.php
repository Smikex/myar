	<!-- .footer -->
	<footer class="footer">
		<div class="footerTop">
			<div class="container">
				<div class="footerSlogan">
					<div class="footerSlogan__picture"><img src="<?= get_field('футер_обложка', 'options'); ?>" alt=""></div>
					<div class="footerSlogan__txt">
						<img src="<?= get_field('лого-текст', 5); ?>" alt="">
						<p><a href="tel:<?= get_field('телефон', 'options'); ?>"><span>+7 (909)</span> 157-31-23</a></p>
						<p>"БЦ Голден Гейт"</p>
						<p><a href="mailto:<?= get_field('email', 'options'); ?>">info<span>@my-ar.ru</span></a></p>
					</div>
					<div class="navBtn">
						<a href="#" data-toggle="modal" data-target="#startproject" class="btnDef__light btnDef__light_yellow"><span><?= get_field('левая_кнопка', 'options'); ?></span></a>
						<a href="#" data-toggle="modal" data-target="#btnWrite" class="btnDef__light"><span><?= get_field('правая_кнопка', 'options'); ?></span></a>
					</div>
				</div>

			</div>
		</div>

	</footer><!-- End .footer -->
	

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
	nextArrow: '<div class="icon-arrow icon-arrow-next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider_next.png" alt="" /></div>',
	prevArrow: '<div class="icon-arrow icon-arrow-prev"><img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider_prev.png" alt="" /></div>',
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
</script>
	<!-- .modal  subscribe -->
	<div class="modal fade  writeModal"  id="btnWrite" tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">

			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?= get_field("заголовок_формы", 'options') ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">
<?= do_shortcode('[contact-form-7 id="31" title="Написать нам"]');?>
				</div>
			</div>
		</div>
	</div><!-- End .subscribe -->
		<!-- .modal  subscribe -->
		<div class="modal fade  writeModal"  id="startproject" tabindex="-1" role="dialog">
		<div class="modal-dialog " role="document">

			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?= get_field("заголовок_формы", 'options') ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">
<?= do_shortcode('[contact-form-7 id="127" title="Начать проект"]');?>
				</div>
			</div>
		</div>
	</div><!-- End .subscribe -->
	<?php wp_footer(); ?>
</body>
</html>