<?php get_header(); ?>

			<?php
			if ( have_posts() ) {
				/* Start the Loop */
                while ( have_posts() ) : the_post();
                ?>

<section class="pageServices">
	<div class="lineSection"></div>

	<div class="container shellBlock">
		<div class="titleSection">
			<h2><span>у</span>слуг<span>и</span></h2>
			<div class="line"></div>
		</div>

		<div class="lineVertical">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="container">
		<div class="blocksServices">

<?php
global $post;
$args = array('post_type' => 'services', 'order' => 'ASC', 'numberposts' => 3);
$myposts = get_posts($args);
foreach ($myposts as $post) {setup_postdata($post);
    ?>
			<!-- .blockService -->
			<div class="blockService">
				<div class="blockService__icon"><img src="<?=get_the_post_thumbnail_url();?>" alt=""></div>
				<div class="blockService__title"><?php the_title();?></div>
				<div class="blockService__description">
                <?php	the_excerpt(); ?>
                </div>
            </div><!-- End .blockService -->
	<?php
}
wp_reset_postdata();
?>
	<!-- .blocksServices -->
		<div class="blocksServices blocksServices_sm">
        <?php
global $post;
$args = array('post_type' => 'services', 'order' => 'ASC', 'offset'=> 3);
$myposts = get_posts($args);
foreach ($myposts as $post) {setup_postdata($post);
    ?>
			<!-- .blockService -->
			<div class="blockService">
				<div class="blockService__icon"><img src="<?=get_the_post_thumbnail_url();?>" alt=""></div>
				<div class="blockService__title"><?php the_title();?></div>
				<div class="blockService__description">
                <?php	the_excerpt(); ?>
                </div>
            </div><!-- End .blockService -->
	<?php
}
wp_reset_postdata();
?>
		</div><!-- End .blocksServices -->
</div>	
</div>	
	<!-- .sectionGame -->
	<div class="sectionGame">
		<div class="container">
			<div class="lineVertical">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<h2><?= get_field('заголовок'); ?></h2>

			<div class="blockGame">


				<div class="blockGame__descript">
                <?= get_field('описание'); ?>	</div>

				<div class="blockGameThumb">
					<span style="background-image: url(<?= get_field('изображение'); ?>)"></span>
					<div class="blockGameThumb__title"><?= get_field('заголовок_изображение'); ?></div>
					<a href="<?= get_field('ссылка'); ?>" class="btnDef__light">Заказать</a>
				</div>

			</div>



		</div>
	</div><!-- End .sectionGame -->
	
</section>
<?php
				endwhile;
            }        
 get_footer();?>