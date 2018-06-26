<?php get_header(); 
if (have_posts()):
    /* Start the Loop */
    while (have_posts()): the_post();

        /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */

?>
<div class="pagePortfolio pagePortfolioInsert">

<div class="lineSection"></div>

<!-- .sectionExamples -->
<section class="sectionExamples">
	<div class="container">
		<div class="titleSection">
			<h2><?php the_title();?></h2>
			<div class="line"></div>
		</div>

		<!-- .portfolioInsert -->
		<div class="portfolioInsert">
			<div class="row">
				<div class="col-lg-8">

					<div class="portfolioInsert__description">
						<div class="icon"><img src="<?=get_field('иконка');?>" alt=""></div>
						<div class="txt">
						<?php the_content();?>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<!-- .postBlock -->
					<div class="postBlock">
						<div class="postBlock__title">Project Details</div>
						<a href="#"><span>Client</span><?=get_field('client');?></a>
						<a href="#"><span>Skills</span><?=get_field('skills');?></a>
					</div><!-- end .postBlock -->
				</div>

				<!-- .videoBlock -->
				<div class="videoBlock">
					<iframe src="<?=get_field('video_1');?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div><!-- End .videoBlock -->

				<!-- .videoBlock -->
				<div class="videoBlock">
					<iframe src="<?=get_field('video_2');?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div><!-- End .videoBlock -->
				
			</div>
		</div><!-- End .portfolioInsert -->

	</div>
</section><!-- End .sectionExamples -->

</div>

<?php
    endwhile;

else:

    // get_template_part( 'template-parts/post/content', 'none' );

endif;
get_footer(); ?>