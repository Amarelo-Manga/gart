<?
//iniciar seção e verificar se usuario está logado pelo email
session_start();
if ( !isset( $_SESSION[ 'revenda' ] ) ) {
	$url = "http://gart.com.br/ondecomprar.php";
	header( "location:$url" );
}
?>
<?php get_header(); ?>
<div id="banner_ondecomprar">
	<h1>Onde Comprar</h1>
</div>
<div class="container ">
	<div id="content_revenda">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">

			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>

<?php $recent = new WP_Query("page_id=12038"); while($recent->have_posts()) : $recent->the_post();?>
<?php the_content(''); ?>
<?php endwhile; ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>