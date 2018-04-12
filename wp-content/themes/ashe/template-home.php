<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<?php
	// get_template_part( 'templates/header/featured', 'slider' );
?>

<div class="main-content main-change clear-fix<?php echo esc_attr(ashe_options( 'general_content_width' )) === 'boxed' ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( ashe_options( 'general_sidebar_sticky' )  ); ?>"

 >
	
	<?php
	
	// Sidebar Left
	//get_template_part( 'templates/sidebars/sidebar', 'left' ); 

	?>

	<!-- Main Container -
	<div class="main-container"> -->
		
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

		

<style>
    ul.custom_cat_list {
        list-style: none;
        float: left;
        width: 100%;
    }
    ul.custom_cat_list li {
	    width: 24%;
	    float: left;
	    margin: 5px;
	}
    .custom_cat_name {
	    font-size: 20px;
	    float:left;
	    text-align: center;
	    width: 100%;
	    background-color: #F6F6F6;
	    padding-top: 5px;
	    padding-bottom: 10px;
	    font-weight: bold;
	}
    .custom_cat_list a {
    	float: left;
    	width: 250px;
		
    }
	.custom_cat_list img {
		height: 200px;
	}
</style>


	<!-- <div class="container">
		<div class="raw">
			<div class="col-md-12">
				<?php
					$terms = get_terms('eventcategory');
					foreach ( $terms as $term ) {
						$file = get_term_meta( $term->term_id, 'wpcf-image', true );
						echo '<div class="col-md-3 col-md-3">';
							echo '<a href="'.get_category_link($term->term_id).'">' . $term->name . '</a>';
							echo '<div style="border:1px solid blue;">';
								echo '<img src="';
									echo esc_html($file);
								echo '" class="dept-img">';
							echo '</div>';
						echo "</div>";// closes .col-sm-12 and .col-md-3 div
					}	
				?>
			</div>
		</div>
	</div> -->
	
	<!--
	</div><!-- .main-container --> 
		<?php get_template_part( 'templates/single/comments', 'area' ); ?>

	
	<ul class="custom_cat_list">
	    <?php $terms = get_terms('featurecategory'); ?>
	        <?php 
	        	foreach ($terms as $term) {
	        	$file = get_term_meta( $term->term_id, 'wpcf-image', true );
	        ?>
	            <li class="custom_cat_li">
	            	<a href="<?php echo get_category_link($term->term_id); ?>">	
	            		<span class="custom_cat_name"><?php echo $term->name; ?></span>
	            		<img src="<?php echo esc_html($file) ?>" class="dept-img">
	            	</a>
	            </li>
	    <?php } ?>
	<ul>
	<?php
	
	// Sidebar Right
	//get_template_part( 'templates/sidebars/sidebar', 'right' ); 

	?>

</div><!-- #page-content -->

<?php get_footer(); ?>