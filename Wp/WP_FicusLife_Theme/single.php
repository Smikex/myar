<?php get_header();

if (have_posts()):
    /* Start the Loop */
    while (have_posts()): the_post();

        /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */

    endwhile;

else:

    // get_template_part( 'template-parts/post/content', 'none' );

endif;
?>
<!-- .pageBlog -->
<section class="pageBlog pageBlog_insert">

	<div class="lineSection"></div>

	<div class="container">
		<div class="titleSection">
			<h2><span>Б</span>ло<span>г</span></h2>
			<div class="line"></div>
		</div>
	</div>

	<!--.sectionBlog -->
	<div class="sectionBlog">
		<div class="container">

			<div class="shell">

				<!-- .wrapperBlog -->
				<div class="wrapperBlog">

					<!-- .itemBlog -->
					<div class="itemBlog">
						<div class="itemBlog__title"><a href="<?=get_the_permalink();?>"><?php the_title();?></a></div>

						<!-- .itemBlogNav -->
						<div class="itemBlogNav">
							<div class="itemBlogNav__tag">
								<div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/admin.png" alt=""></div><span><?php echo get_the_author(); ?></span>
							</div>
							<div class="itemBlogNav__tag"><div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/tag.png" alt=""></div><span>
								<?php $category = get_the_category();
echo  $category[0]->cat_name; ?> , 
<?php echo  $category[1]->cat_name; ?> , 
<?php  echo $category[2]->cat_name;
 echo $category[3]->cat_name;
?></span></div>
							<div class="itemBlogNav__tag"><div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/comment.png" alt=""></div><span><?php comments_number();?></span></div>
						</div><!-- End .itemBlogNav -->

						<div class="itemBlog__descript itemBlog__descript_full">
							<div class="preview">
							<?php echo  get_the_post_thumbnail(); ?>
							</div>
							<div class="txt">
							<?php the_content();?>
							</div>
						</div>
					</div><!-- End .itemBlog -->

					<!-- .formComment -->
					<div class="formComment">
						<?php
if (comments_open() || get_comments_number()):
    comments_template();
endif;
?>
				</div></div>

				<!-- .wrapperBlogSearch -->
				<div class="wrapperBlogSearch">

					<!-- .searchBlock -->
					<div class="searchBlock">
						<?php get_search_form();?>
					</div><!-- End .searchBlock -->

					<div class="postBlock">
						<div class="postBlock__title">СВЕЖИЕ ЗАПИСИ</div>
						<?php
global $post;
$args = array('post_type' => 'Записи', 'order' => 'ASC');
$myposts = get_posts($args);
foreach ($myposts as $post) {setup_postdata($post);
    ?>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
				
	<?php
}
wp_reset_postdata();
?>
					</div>

					<div class="postBlock">
						<div class="postBlock__title">РУБРИКИ</div>
						<ul>
	<?php wp_list_categories('orderby=name&style=none&title_li=');?>
</ul>

					</div>
				</div><!-- End .wrapperBlogSearch -->
			</div>



	</div><!-- End .sectionBlog -->
</section><!-- End .pageBlog -->

<?php get_footer();?>