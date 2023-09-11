<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecopix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			ecopix_post_thumbnail(); 
			
		endif;?>
	</header><!-- .entry-header -->

	

	<div class="entry-content px-2 px-lg-4">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a class="text-decoration-none" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecopix' ),
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
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ecopix' ),
				'after'  => '</div>',
			)
		);

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				ecopix_posted_on();
				ecopix_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
