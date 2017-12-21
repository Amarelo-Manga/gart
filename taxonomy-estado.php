<? 
//inisicar seção e verificar se usuario está logado pelo email
session_start(); 
if(!isset($_SESSION['revenda'])){
$url="../ondecomprar.php";
header("location:$url");
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
		
		<?php if ( have_posts() ) : ?>

		<!--filtro de busca-->
		<div id="seacharea"><?php echo do_shortcode( '[searchandfilter taxonomies="estado" search_placeholder="Digite o nome da revenda" submit_label="Buscar"]') ?></div>
		<?php
			while ( have_posts() ) : the_post();?>
			
			
	<div class="revend_list">		
		<?	echo  "<a href='".get_permalink()."'>";?>
			<h2><? the_title(); ?></h2>
				<? the_field('endereco');?>-
				<? the_field('bairro') ?>-
				<? the_field('cidade') ?>;
			<? echo "</a>"; 
	       echo "</div>";

			//	get_template_part( 'template-parts/content-revenda', get_post_format() );
			endwhile;?>
		
	<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Anteriores', 'textdomain' ),
    'next_text' => __( 'Proximo', 'textdomain' ),
     ) ); ?>
		
	<? else : endif; ?>
		
			
		
		
	</div>
</div>
<?php get_footer(); ?>
