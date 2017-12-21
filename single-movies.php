<?php get_header(); ?>
<div id="primary" class="content-video ">
 <?php  while ( have_posts() ) : the_post(); ?>
<div id="video_principal">
   <div class="breadcrumbs_prod" typeof="BreadcrumbList" vocab="https://schema.org/"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
   <h1><?php echo the_title() ?></h1>
<div class="block_video">
	
<iframe width="100%" height="500" src="<?php echo the_field('link_video')?>?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
<!--div class="block_descri_video">
<?php // the_content() ?>	
</div-->
</div> 
<? endwhile; ?>

<div id="videos_dest">
<H2>Assista outros vídeos em destaque</H2>
	<ul class="video_list_single">
<?php 
$posts = get_posts(array(
    'orderby'   => 'date',
	'post_type'	=> 'movies'
));
if( $posts ): ?>	

<?php foreach( $posts as $post ): setup_postdata( $post );?>		
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
	
			<?php endforeach; ?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
