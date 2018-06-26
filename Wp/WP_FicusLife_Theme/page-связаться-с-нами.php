<?php get_header();?>

			<?php
if (have_posts()):

    /* Start the Loop */
    while (have_posts()): the_post();?>

<!-- .pageContact -->
<div class="pageContact">

	<div class="lineSection"></div>

	<div class="container">
		<div class="lineVertical">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="titleSection">
			<h2><span>С</span>вязаться с нам<span>и</span></h2>
			<div class="line"></div>
		</div>

		<!-- .wrapperContactForm -->
		<div class="wrapperContactForm row">

			<div class="col-xl-5 col-lg-5">
				<div class="contactDescript">
					<div class="contactDescript__icon"><img src="<?php echo  get_template_directory_uri()?>/img/map_icon.png" alt=""></div>
					<div class="contactDescript__title">Наши контакты</div>
					<div class="contactDescript__contact">
						<a href="tel:<?= get_field('телефон','options');?>"><?= get_field('телефон','options');?></a> <br>
						Адрес:"БЦ Голден Гейт"<br>
						<a href="mailto:<?= get_field('email','options');?>"><?= get_field('email','options');?></a>
					</div>
				</div>
			</div>

			
			<div class="col-xl-7 col-lg-7">
				<div class="formComment">
					<div class="formComment__title">Оставить комментарий</div>

<?= do_shortcode('[contact-form-7 id="120" title="Написать коментарий"]');?>
				</div>
			</div>

		</div><!-- End .wrapperContactForm -->

	</div>

	
</div><!-- End .pageContact -->




				<?php
    endwhile;
else:
endif;
get_footer();?>