<?php get_header(); ?>

			<?php
			if ( have_posts() ) {
				/* Start the Loop */
                while ( have_posts() ) : the_post();
                ?>

<div class="pagePortfolio">

<div class="lineSection"></div>

<!-- .sectionExamples -->
<section class="sectionExamples">
    <div class="container">
        <div class="titleSection">
            <h2><span>П</span>римеры наших рабо<span>т</span></h2>
            <div class="line"></div>
        </div>
    </div>

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
    </section>
    <!-- End .sectionExamples -->

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