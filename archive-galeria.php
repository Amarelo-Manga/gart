<?php get_header(); ?>
<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
<div id="primary" class="rodape_prod">

  	<div id="head_prod" style="margin-top:50px;">

   	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
    <div id="title" style="border:0;">
      <h1>GALERIA DE IMAGENS</h1>
    Confira abaixo em nossa galeria de imagens algumas <br>
aplicações de nossos produtos.<br>
</div>
  </div>
  
<?
//pegar slug 
$terms = get_the_terms( $post->ID, 'galeria' );
if ( !empty( $terms ) ){
// get the first term
$term = array_shift( $terms ); $slug_category = $term->slug; $taxonomy = 'galeria'; $term_id = 	$term->term_id; $name = $term->name;}
echo $term->term_id
?>

<div id="primary" class="arquive_gallery">
<ul id="gallery_list">		
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>		
<? $imagem_gallery = get_field('thumb', 'categoria_de_galeria' . '_' . $wcatTerm ->term_id); 
$ord++;	
?>

<a href="<?php echo get_permalink() ?>" onMouseOver="MM_showHideLayers('gal<? echo $ord ?>','','show')" onMouseOut="MM_showHideLayers('gal<? echo $ord ?>','','hide')">
 <li class="gallery_archive_item" style=" background-image: url(<? echo get_the_post_thumbnail_url(); ?>) ">
  <div class="hover_gallery" id="gal<? echo $ord ?>">
   <h2><? echo the_title() ;?></h2>
   <img src="<?php echo get_template_directory_uri()?>/img/more_gallery.png"/>
  </div>	
 </li>
</a> 	
  <? endwhile; ?>		
</ul>
  <? endif; ?>
</div>
</div>
<?php get_footer(); ?>