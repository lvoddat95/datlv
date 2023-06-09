<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package write
 */

get_header();
?>

	<main class="site-main col-lg-10 mx-auto p-3 py-md-3">
		<div class="row g-5">
			<div id="primary" class="col-md-8">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'write' ); ?></h1>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->

			</div><!-- .row g-5-->
		</div><!-- .col-md-8 -->
	</main><!-- #main -->
<?php get_footer(); ?>
