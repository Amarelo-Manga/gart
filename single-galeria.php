<?php get_header(); ?>
<div id="primary" class="single-galeria" >
	<div class="breadcrumbs" style="margin-top:30px; margin-left:40px;" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>

<div class="content_blog_item">
<?php get_template_part( 'template-parts/content', 'galeria' );?>
</div>
</div>
<?php get_footer(); ?>
