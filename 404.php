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

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'write' ); ?></p>

							<?php
							get_search_form();
							?>

							<p></p>

							<?php
							the_widget( 'WP_Widget_Recent_Posts' );
							?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div><!-- .row g-5-->
			<?php get_sidebar(); ?>
		</div><!-- .col-md-8 -->
	</main><!-- #main -->
<?php get_footer(); ?>
