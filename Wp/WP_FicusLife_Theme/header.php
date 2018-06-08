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
				<div class="logo"><a href="index.html"><img src="<?= get_field('логотип', 'options'); ?>" alt=""></a></div>
				<nav class="menuTop">
					<ul>
						<li><a href="pageServices.html">Услуги</a></li>
						<li><a href="pagePortfolio.html">Портфолио</a></li>
						<li><a href="pageContact.html">Связаться с нами</a></li>
						<li><a href="pageBlog.html">Блог </a></li>
					</ul>
				</nav>
			</div><!-- End .headerItem -->
			<!-- .headerItem -->
			<div class="headerItem">
				<a href="tel:+7(909)157 31 23" class="callBtn"><img src="img/icon_call.png" alt="">+7(909)157 31 23</a>
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
			<p><a href=" https://www.facebook.com/MYAR3D/"><i><img src="img/fb.png" alt=""></i></a></p>
			<p><a href="https://vk.com/myar3d"><i><img src="img/vk.png" alt=""></i></a></p>
			<p><a href="https://www.instagram.com/myar3d/"><i><img src="img/inst.png" alt=""></i></a></p>
		</div>
	</div>
</div>
<!-- End .networkFloat -->
<body>
	