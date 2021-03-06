<?php /* Template Name: Gallery Page */ ?>

<?php get_header(); ?>
<!-- 
 <?php
	//get_template_part( 'templates/header/featured', 'slider' );
?> 
  -->

<div class="main-content clear-fix"> 

	
	<?php
	
	// Sidebar Left
	//get_template_part( 'templates/sidebars/sidebar', 'left' ); 

	?> 

	<!-- Main Container -->
	<div class="main-container">
		
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

		<?php get_template_part( 'templates/single/comments', 'area' ); ?>

	</div><!-- .main-container -->

	<?php
	
	// Sidebar Right
	//get_template_part( 'templates/sidebars/sidebar', 'right' ); 

	?>
	

</div><!-- #page-content -->

<?php get_footer(); ?>