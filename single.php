<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package write
 */

if ('bhhk' == get_post_type()) :
	get_header('bhhk');
elseif ('oxanh' == get_post_type()) :
	get_header('oxanh');
else :
	get_header();
endif;
?>

<main class="site-main col-lg-10 mx-auto p-3 py-md-3">
	<div class="row g-5">
		<div id="primary" class="col-md-8">

			<?php
			while (have_posts()) :

				the_post();
				
				if ('bhhk' == get_post_type()) :
					get_header('bhhk');
					get_template_part('template-parts/bhhk/content', get_post_type());
				elseif ('oxanh' == get_post_type()) :
					get_template_part('template-parts/oxanh/content', get_post_type());
				else :
					get_template_part('template-parts/content', get_post_type());
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- .row g-5-->
		<?php get_sidebar(); ?>
	</div><!-- .col-md-8 -->
</main><!-- #main -->

<?php
if ('bhhk' == get_post_type()) :
	get_footer('bhhk');
elseif ('oxanh' == get_post_type()) :
	get_footer('oxanh');
else :
	get_footer();
endif;
?>