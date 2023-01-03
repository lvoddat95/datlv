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

$slug = get_post_field('post_name', get_post());

?>

<main id="ci-content" class="ci-content">

	<?php
	while (have_posts()) :

		the_post();

		get_template_part('' . get_post_type() . '/pages/content', $slug);
		// get_template_part('template-parts/' . get_post_type() . '/content', $slug);

	endwhile; // End of the loop.
	?>

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