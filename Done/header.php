<!DOCTYPE html>
<html lang="RU">
<head>
	<meta charset="utf-8">
	<title><?= wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<!-- .header -->
<header class="header">
	<!-- .container -->
	<div class="container">
		<!-- .headerWrapper -->
		<div class="headerWrapper">
			<!-- .headerItem -->
			<div class="headerItem">
				<div class="logo"><a href="<?=  get_home_url(); ?>"><img src="<?= get_field('логотип', 'options'); ?>" alt=""></a></div>
				<nav class="menuTop">
					<?php wp_nav_menu(array('menu' => 'Верхнее', 'container' => '' )); ?>
				</nav>
			</div><!-- End .headerItem -->
			<!-- .headerItem -->
			<div class="headerItem">
				<a href="tel:<?= get_field('телефон','options');?>" class="callBtn"><img src="<?php echo  get_template_directory_uri()?>/img/icon_call.png" alt=""><?= get_field('телефон','options');?></a>
				<a href="#" data-toggle="modal" data-target="#btnWrite" class="btnDef"><span>написать нам</span></a>
			</div><!-- End .headerItem -->

			<!--.mobileBtn-->
			<div class="mobileBtn" id="mobileBtn">
				<span></span>
			</div><!--End .mobileBtn-->

		</div><!-- End .headerWrapper -->
	</div><!-- End .container -->
</header><!-- End .header -->

<!-- .networkFloat -->
<div class="networkFloat">
	<div class="shell">
		<div class="networkFloat__title">социальные сети:</div>
		<div class="networkFloatWrapper">
			<p><a href="<?= get_field('facebook','options');?>"><i><img src="<?php echo  get_template_directory_uri()?>/img/fb.png" alt=""></i></a></p>
			<p><a href="<?= get_field('vk','options');?>"><i><img src="<?php echo  get_template_directory_uri()?>/img/vk.png" alt=""></i></a></p>
			<p><a href="<?= get_field('instagram','options');?>"><i><img src="<?php echo  get_template_directory_uri()?>/img/inst.png" alt=""></i></a></p>
		</div>
	</div>
</div>
<!-- End .networkFloat -->
<body>
	