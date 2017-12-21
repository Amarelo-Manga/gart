<?php get_header(); ?>

<div id="primary" class="rodape_prod">
  <div id="head_prod">
   	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')){bcn_display();}?>
		</div>
    <div id="title">
      <h1><?php single_term_title(); ?></h1>
      <span class="descri"><?php echo "descricao"; ?></span></div>
  </div>
  
  
   <ul class="list_prod rodape_prod">

		
		<?php if ( have_posts() ) : ?>

		<!--filtro de busca-->
		<?php
			while ( have_posts() ) : the_post();
		?>
	  <li>
      <div id="prod_tipo" class="hover_descri_prod" onMouseOver="MM_showHideLayers('prod_tipo','','show')" onMouseOut="MM_showHideLayers('prod_tipo','','hide')" ><img src="img/descri.png" /></div>
      <img src="img/Screen Shot 2017-04-26 at 13.47.54.png" class="thumb_prod" onMouseOver="MM_showHideLayers('prod_tipo','','show')" onMouseOut="MM_showHideLayers('prod_tipo','','hide')" />
      <div class="nome_prod">the</div>
      <a href="#" class="btn_zoom"> </a>
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