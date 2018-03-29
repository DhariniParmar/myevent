<?php /* Template Name: New Gallery */ ?>

<?php get_header(); ?>


<div class="main-content clear-fix<?php echo esc_attr(ashe_options( 'general_content_width' )) === 'boxed' ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( ashe_options( 'general_sidebar_sticky' )  ); ?>"

 >
	<!-- Main Container -->
	<!-- <div class="main-container">  -->
		
		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			if ( have_posts() ) :

			// Loop Start
			while ( have_posts() ) : the_post();
				if ( has_post_thumbnail() ) {
					echo '<div class="post-media">';
						the_post_thumbnail('ashe-full-thumbnail');
					echo '</div>';
				}

				/*if ( get_the_title() !== '' ) {
					echo '<header class="post-header">';
						echo '<h1 class="page-title">'. get_the_title() .'</h1>';
					echo '</header>';
				}*/

				echo '<div class="post-content">';
					the_content('');

					// Post Pagination
					$defaults = array(
						'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'ashe' ),
						'after' => '</p>'
					);

					wp_link_pages( $defaults );
				echo '</div>';

			endwhile; // Loop End

			endif;

			?>

		</article>
	<!-- </div> --><!-- .main-container --> 
		<?php get_template_part( 'templates/single/comments', 'area' ); ?>
</div><!-- #page-content -->

<?php get_footer(); ?>