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

						<?php include get_stylesheet_directory() . '/template-parts/project-grid.php';?>

				    <?php
				    endforeach; 
				    wp_reset_postdata();
				}
				?>

			</div>
		</div><!-- #primary -->

	</div>
<?php
get_footer();