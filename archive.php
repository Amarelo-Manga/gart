<?php get_header(); ?>
<?php echo get_template_part( 'format', get_post_format() ); ?>

  <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
   <?php echo get_template_part( 'content', get_post_format() ); ?>
   <?php endwhile; ?>
<?php endif; ?>

<div id="primary" >
	<div id="content_news" >
	
	<h1>Notícias</h1>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
		<?php if ( have_posts() ) : ?>
	    <ul>
			<?php while ( have_posts() ) : the_post();?>
			<li class="list_news">
			<?  get_template_part( 'template-parts/content', get_post_format() );
				echo '<a href="'.get_permalink().'" class="btn_more"> Veja mais</a>';
	           endwhile;?>
			</li> 
			<? the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );?>
				
		  
			<? 
			else :
			get_template_part( 'template-parts/content', 'none' );?>
    
	    
		<? endif; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
