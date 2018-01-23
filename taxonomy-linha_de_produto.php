
<?php get_header(); ?>

<?php 
// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
?>

    <?
//pegar slug 
$terms = get_the_terms( $post->ID, 'linha_de_produto' );
if ( !empty( $terms ) ){
// get the first term
$term = array_shift( $terms );
$slug_category = $term->slug;
$taxonomy = 'linha_de_produto';
$term_id = 	$term->term_id;
$name = $term->name;
}
//condição para ver em qualquer categoria estamos e aplicar a classe da cor certa
if($slug_category == "rodapes" ){$class_color_cat="rodape_prod";}
elseif($slug_category == "roda-meios"){$class_color_cat="rodameios_prod";}
elseif($slug_category == "roda-tetos"){$class_color_cat="rodatetos_prod";}
elseif($slug_category == "rosetas"){$class_color_cat="rosetas_prod";}
elseif($slug_category == "molduras-externas"){$class_color_cat="supergart";}
?>

<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>

<div id="primary" class="<?php echo $class_color_cat; ?>">
 <div id="banner_top_prod"><?php $imagem_banner_top = get_field('banner_do_topo', $taxonomy . '_' . $term_id); ?><img src="<?php echo $imagem_banner_top['url']; ?>"/></div>
   	<div class="breadcrumbs_prod" typeof="BreadcrumbList" vocab="https://schema.org/"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
   <div id="head_prod">
 
    <div id="title">
      <h1><?php the_field('title_linha', $taxonomy . '_' . $term_id)?></h1>
      <span class="descri"><?php echo term_description(); ?></span></div>
  <div id="search_filter_prod"><?php echo do_shortcode( '[searchandfilter taxonomies="search" search_placeholder="Buscar produto" submit_label="ok"]' ); ?></div>
    </div>

  
   <ul class="list_prod rodape_prod">

 <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
<a href="<?php echo get_permalink() ?>">
 <?php $count = $i++ ?>		
	  <li>
       <? $image_descricao = get_field('foto_de_medida'); ?>
       <div id="prod_tipo_<?php echo $count ?>" class="hover_descri_prod" onMouseOver="MM_showHideLayers('prod_tipo_<?php echo $count ?>','','show')" onMouseOut="MM_showHideLayers('prod_tipo_<?php echo $count ?>','','hide')" ><img src="<?php echo $image_descricao['url'] ?>" /></div>
       <img src="<?php echo get_the_post_thumbnail_url()?>" class="thumb_prod" onMouseOver="MM_showHideLayers('prod_tipo_<?php echo $count ?>','','show')" onMouseOut="MM_showHideLayers('prod_tipo_<?php echo $count ?>','','hide')" />
          
          
       <div class="nome_prod"> 
         <?php if( get_field('sem_prefixo') ){}else{ ?>
	
           <?php echo single_term_title() ?> -
	
<?php } ?>
        <?php the_title() ?></div>
       <a href="<?php echo get_permalink() ?>" class="btn_zoom"> </li></a>
     
	   </a>   

  
  <?	
	endwhile;
?>			
<? 
if($slug_category == "molduras-externas"){	
$id_do_post = 7975; $id = get_post($id_do_post);
?>
<div id="box_especial">
<? echo "<h1>".$id->post_title."</h1>" ;?>
<table>	
 <tr>
  <td>
  <? echo $id->post_content ; ?>
  </td>
  <td>
  	<?php  echo get_the_post_thumbnail('7975'); ?>
  </td>
 </tr>
</table>
</div>			
<?php } ?>
<? wpbeginner_numeric_posts_nav();
	
else :
endif;
?>
	</div> 

	</ul>	
	</div>
	
</div>
<?php get_footer(); ?>