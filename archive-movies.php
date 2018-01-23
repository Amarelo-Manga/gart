<?php get_header(); ?>

<?php echo get_template_part( 'format', get_post_format() ); ?>

  <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
   <?php echo get_template_part( 'movies', get_post_format() ); ?>
   <?php endwhile; ?>
<?php endif; ?>
<div id="primary" class="videos">
 <div id="banner_top_prod"> <img src="<?php echo get_template_directory_uri()?>/img/banner_videos.jpg"></div>
	<div id="head_prod">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		<div id="title">
			<h1>Vídeos</h1>
		</div>
	</div>


	<ul class="video_list">
		<?php if ( have_posts() ) : ?>
		<!--filtro de busca-->
		<?php
		while ( have_posts() ): the_post();
		?>
		<a href="<?php echo get_permalink()?>">
		<li>
			<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<div class="thumb_video">
		        <img src="<?php echo get_template_directory_uri()?>/img/play.png"/ class="player">
				<img src="<?php echo $image; ?>" alt="<?php echo the_title()?>">
			</div>
			<h3>
				<?php echo the_title()?>
			</h3>
			<span class="call_video">Assista</span>
		</li>
		</a>
		<?	
	  endwhile;
		else :
	endif;
		?>
	</ul> 
</div> 
</div>
<?php get_footer(); ?>n