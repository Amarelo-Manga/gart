<?php get_header(); ?>
<?php 
    global $post;
    $post_slug=$post->post_name;
?>
<div class="container_page <?php echo $post_slug ?>">
<div id="image_top"><?php the_post_thumbnail() ?></div>
<div id="content">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php if(function_exists('bcn_display')){bcn_display();}?>
</div>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
	</div>
</div><!-- .content-area -->
<?php get_footer(); ?>