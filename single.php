<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ecopix
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<!---- CONTENT AREA START ------>
				<div class="col-12 col-lg-9 single-post">
							<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content-single');

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ecopix' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ecopix' ) . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<!---- CONTENT AREA END ------>

				<!---- SIDEBAR AREA START ----->
					<div class="col-12 col-lg-3 sidebar-area">
						<?php get_sidebar();?>
					</div>
				<!---- SIDEBAR AREA START ----->
			</div>
		</div>

		

	</main><!-- #main -->

<?php
get_footer();
