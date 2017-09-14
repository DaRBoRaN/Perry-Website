<?php
/* Template Name: Project Archive */

// make the loop
$args = array(
	'post_type' => 'projecten',
);
$project_query = get_posts( $args );

/*foreach ( $project_query as $pq ) {
	array_push($project_query, $pq);
}*/

get_header(); ?>

	<div class="row">

		<div id="primary" class="col-md-12 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
			<?php
			/*while ( have_posts() ) : the_post(); ?>

				<article id="post-50" class="post-50 page type-page status-publish hentry">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article>

			<?php endwhile; // End of the loop.*/
			?>
		</div><!-- #primary -->

		<div id="secondary" class="col-md-12 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
			<div class="row">
				<?php
				$count = -1;
				if ( $project_query ) {
				    foreach ( $project_query as $project ) :
				        setup_postdata( $project ); 

				    	// check if new row is neccessary
				    	$count++;
						if ( $count %  3 == 0 ) {
							?></div><div class="row"><?php
						} ?>

						<article id="post-<?php echo $project->ID ?>" class="perry-project post-content col-md-4 post-<?php echo $project->ID ?> projecten type-projecten status-publish hentry">

							<header class="entry-header nolist">
								<a href="<?php echo get_the_permalink( $project->ID ); ?>">
								<img class="wp-post-image" alt="" src="http://localhost/perry_website/wp-content/themes/shapely/assets/images/placeholder.jpg"></a>
							</header><!-- .entry-header -->

							<div class="grid-entry-link">
								<a href="<?php echo get_the_permalink( $project->ID ); ?>">
									<div class="perry-project-link-wrapper">
										<h2><?php echo get_the_title( $project->ID ); ?></h2>
									</div>
								</a>
							</div><!-- .entry-link -->

						</article>

				    <?php
				    endforeach; 
				    wp_reset_postdata();
				}
				?>

			</div>
		</div><!-- #secondary -->

	</div>
<?php
get_footer();