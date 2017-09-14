<?php get_header(); ?>

<div class="row">

	<div class="perry-single-project-description col-md-6 projecten type-projecten">
		
		<h2>Omschrijving *todo*</h2>
		<p>Platform: pc</p>
		<p>Genre(s): iets</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum tortor ligula, in bibendum risus scelerisque ac. Fusce in venenatis elit. Curabitur cursus maximus nunc, eget facilisis massa porttitor vel. Praesent volutpat aliquam tristique. Cras non rutrum ex, feugiat condimentum neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer semper erat vitae laoreet mattis. Mauris faucibus dictum neque, sed ornare libero.</p>

		
		<?php /* todo: get tag data */ ?>
		<div class="row">
			<div class="perry-single-project-description col-md-12 projecten type-projecten">
				<h2>Tags *todo*</h2>
				<div class="perry-project-tags">
					<a href="#"><span class="project-tag">3ds</span></a>
					<a href="#"><span class="project-tag">c#</span></a>
					<a href="#"><span class="project-tag">c++</span></a>
					<a href="#"><span class="project-tag">3ds</span></a>
					<a href="#"><span class="project-tag">c#</span></a>
					<a href="#"><span class="project-tag">c++</span></a>
					<a href="#"><span class="project-tag">3ds</span></a>
					<a href="#"><span class="project-tag">c#</span></a>
					<a href="#"><span class="project-tag">c++</span></a>
				</div>
			</div>
		</div>


	</div><!-- description -->
	<div class="perry-single-project-images col-md-6 projecten type-projecten">

		<h2>Images *todo*</h2>

		<div id="slider">
			<button href="#" class="control_next gallery_button gallery_button_left"></button>
			<button href="#" class="control_prev gallery_button gallery_button_right"></button>
			<ul>
				<li>SLIDE 1</li>
				<li style="background: #aaa;"><img class="wp-post-image" alt="" src="http://localhost/perry_website/wp-content/themes/shapely/assets/images/placeholder.jpg"></a></li>
				<li>SLIDE 3</li>
				<li style="background: #aaa;"><img class="wp-post-image" alt="" src="http://localhost/perry_website/wp-content/themes/shapely/assets/images/placeholder.jpg"></a></li>
			</ul>  
		</div>

	</div><!-- images -->
</div>


<?php 

/* todo: gegevens aanpassen */
$args = array(
	'post_type' => 'projecten',
	'numberposts' => 3,
);
$project_query = get_posts( $args ); ?>

<div class="row">
		<div class="container">
			<h2>Gerelateerde projecten</h2>
		</div>
		<?php
		if ( $project_query ) {
		    foreach ( $project_query as $project ) :
		        setup_postdata( $project ); 

				include get_stylesheet_directory() . '/template-parts/project-grid.php';

		    endforeach; 
		    wp_reset_postdata();
		}
		?>
</div>

<?php get_footer();