<?php get_header(); ?>
<div id="primary" class="videos">
	<div id="head_prod">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		<div id="title">
			<h1>
				<?php single_term_title(); ?>
			</h1>
			<span class="descri">
				<?php echo "descricao"; ?>
			</span>
		</div>
	</div>


	<ul class="list_prod video_list">
		<?php if ( have_posts() ) : ?>
		<!--filtro de busca-->
		<?php
		while ( have_posts() ): the_post();
		?>
		<li>
			<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<div class="thumb_video">
				<img src="<?php echo $image; ?>" alt="<?php echo the_title()?>">
			</div>
			<h3>
				<?php echo the_title()?>
			</h3>
			<span class="call_video">Assista</span>
		</li>
		<?	
	  endwhile;
		else :
	endif;
		?>
	</ul> 
</div> 
</div>
<?php get_footer(); ?>