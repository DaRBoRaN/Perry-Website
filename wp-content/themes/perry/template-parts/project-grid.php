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