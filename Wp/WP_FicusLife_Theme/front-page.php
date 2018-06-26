<?php get_header();?>

<!-- .sectionMain -->
<section class="sectionMain" style="background-image: url(<?=get_field('основная_картинка');?>);">
	<div class="container">
		<div class="wrapper">
			<div class="sloganMain">
				<img src="<?=get_field('лого-текст');?>" alt="">
				<div class="sloganMain__title"><?=get_field('заголовок');?></div>
				<p>
				<?=get_field('описание');?>
				</p>
				<div class="navBtn">
<<<<<<< HEAD
					<a href="#" data-toggle="modal" data-target="#startproject" class="btnDef__light btnDef__light_yellow animated bounce"><span><?=get_field('кнопка');?></span></a>
=======
					<a href="#" class="btnDef__light btnDef__light_yellow animated bounce"><span><?=get_field('кнопка');?></span></a>
>>>>>>> c2810892703f5daa8732a0d03ad76e1393c80624
				</div>
			</div>

		</div>
	</div>
</section><!-- End .sectionMain -->


<!-- .sectionAbout -->
<section class="sectionAbout">

	<!-- .container -->
	<div class="container">


		<h2><?=get_field('о_компании');?></h2>

		<div class="description defaultWrapper">
		<?=get_field('о_компании_описание');?>
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

<?php
global $post;
$args = array('post_type' => 'services', 'order' => 'ASC');
$myposts = get_posts($args);
<<<<<<< HEAD
foreach ($myposts as $key  => $post) {setup_postdata($post);
=======
foreach ($myposts as $post) {setup_postdata($post);
>>>>>>> c2810892703f5daa8732a0d03ad76e1393c80624
    ?>
	<div class="item">
			<!-- .blockServic -->
		<div class="blockServic">
<<<<<<< HEAD
			<div class="blockServic__icon"><img src="<?=get_field('изображение_для_главной');?>" alt=""></div>
			<div class="blockServic__title"><?php the_title();?></div>
			<div class="blockServic__link"><a href="http://myar.1.ficuslife.pp.ua/%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8/#<?php the_title();?>?<?php echo 'title='.$key;?>">подробнее</a></div>
=======
			<div class="blockServic__icon"><img src="<?=get_the_post_thumbnail_url();?>" alt=""></div>
			<div class="blockServic__title"><?php the_title();?></div>
			<div class="blockServic__link"><a href="<?php the_permalink();?>">подробнее</a></div>
>>>>>>> c2810892703f5daa8732a0d03ad76e1393c80624
		</div><!-- End .blockServic -->
	</div>
	<?php
}
wp_reset_postdata();
?>
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
			<img src="<?php echo get_template_directory_uri() ?>/img/advans_bg.png" alt="">
		</div>

		<div class="titleSection">
			<h2><span>Н</span>аши <span>п</span>реимущества</h2>
		</div>

		<!-- .blocksAdvantages -->
		<div class="blocksAdvantages">

			<?php
while (the_repeater_field('приемущества')) {
    ?>
			<div class="item">
				<!-- .blockAdv -->
				<div class="blockAdv">
					<div class="blockAdv__number"><?php echo get_sub_field('номер') ?></div>
					<div class="part">
						<div class="blockAdv__title"><?php echo get_sub_field('заголовок') ?></div>
						<div class="blockAdv__description"><?php echo get_sub_field('описание') ?></div>
					</div>
					<div class="part"><div class="blockAdv__icon"><img src="<?php echo get_sub_field('изображение') ?>" alt=""></div></div>
				</div><!-- End .blockAdv -->
			</div>
   <?php
}

?>
	</div>
</section><!-- End .sectionAdvantages -->


<!-- .sectionExamples -->
<section class="sectionExamples">
		<h2><span>П</span>римеры наших рабо<span>т</span></h2>
		<div class="blocksEsxamples">
		<?php
global $post;
$args = array('post_type' => 'portfolio', 'order' => 'ASC');
$myposts = get_posts($args);
foreach ($myposts as $post) {setup_postdata($post);
    ?>
				<div class="blockEsxample">
				<div class="blockEsxample__picture"><span style="background-image: url(<?=get_the_post_thumbnail_url();?>)"></span></div>
				<div class="shell">
					<div class="blockEsxample__title"><?php the_title();?></div>
					<a href="<?php the_permalink();?>" class="link btnDef__light">ПОДРОБНЕЕ</a>
				</div>

			</div>
	<?php
}
wp_reset_postdata();
?>

		</div>

		<div class="container">
			<div class="description defaultWrapper">
			<?=get_field('футер_описание');?>
			</div>
		</div>
</section><!-- End .sectionExamples -->

	<?php get_footer();?>