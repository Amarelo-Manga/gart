<a href="<?php the_permalink();?>" style="display:table;">
<article class="search_article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="search_thumbnail"><?php twentysixteen_post_thumbnail(); ?></div>
<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <?php echo single_term_title();?>
	    <? echo	get_post_type() ?>

	</header><!-- .entry-header -->
	<?php if ( 'post' === get_post_type() ) : ?>
	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>
</article>
</a>