<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package write
 */

?>

<footer id="colophon" class="site-footer col-lg-10 mx-auto p-3 py-md-3">
	<div class="site-info">
		<p>&copy;
			<?php echo date("Y") ?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>