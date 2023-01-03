<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package write
 */

?>
<?php if ( ! is_singular() ) : ?>
	<ul><li>
<?php endif; ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;

				if ( is_singular() ) :
					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							write_posted_on();
							write_reading_time();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php if ( is_singular() ) : ?>

				<?php write_post_thumbnail(); ?>

				<div class="figure-caption">
					<?php the_post_thumbnail_caption() ?>
				</div>

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'write' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'write' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php write_entry_footer(); ?>
				</footer><!-- .entry-footer -->

			<?php endif; ?>

		</article><!-- #post-<?php the_ID(); ?> -->

<?php if ( ! is_singular() ) : ?>
	</li></ul>
<?php endif; ?>
