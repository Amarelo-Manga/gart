<?php get_header(); ?>
<div id="primary" class="content-produto ">
 <?php  while ( have_posts() ) : the_post(); ?>
 
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
    
<div id="content_prod" class="<?php echo $class_color_cat ?>"> 
  

  
   <div class="breadcrumbs_prod" typeof="BreadcrumbList" vocab="https://schema.org/"><?php if(function_exists('bcn_display')){bcn_display();}?></div>

    <!--links para redes socials -->
    <div class="social_prod"> <span class="frase_social">Compartilhe nas redes socials</span>
      <ul id="icons_social">
        <li><a href="https://www.facebook.com/gartacabamentos/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/link_facebook.jpg"></a></li>
		  <li><a href="https://www.youtube.com/GartAcabamentos" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/youtube_icon.png"></a> </li>
        <!--li><img src="<?php //echo get_template_directory_uri()?>/img/link_twitter.jpg"> </li-->
      </ul>
    </div>
    <h1> <?php echo $name ?> <?php the_title() ?> - <?php the_field('nome_linha', $taxonomy . '_' . $term_id); ?></h1>
    <div class="block"> 
      <!--Thumbnail dos produtos e galeria -->
      <div id="fotos_prod">
		  <div id="thumb"><a href="<?php echo get_the_post_thumbnail_url()?>" rel="lightbox" ><img style="width:250px; margin:auto;" src="<?php echo get_the_post_thumbnail_url()?>"/></a></div>
        <div id="thum_gallery"><? the_field('galeria_de_imagens') ?></div>
      </div>
      
      <!-- Imagem técnica em preto-->
      <?php $img_tecnica_preta = get_field('fotos_de_medida_preta');  ?>
      
      <div id="img_spec"> <img src="<?php echo $img_tecnica_preta['url'] ?>"/> </div>
      <div id="propert_list">
      <ul>
<?php

//não mostrar erros se caso não tiver os dados do checkbox
error_reporting(0);
$atributos = get_field('atributos');
if(in_array('produto_pintado', $atributos)){ ?>
           <li>
             <div id="ballon_tinta" class="baloon">
              <div class="txt_baloon"> 
                 Produto pintado <br>
                ou pronto para pintura </div>
              <div class="base_baloon"><img src="<?php echo get_template_directory_uri() ?>/img/perna_balao.png"/></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_tinta.jpg" onMouseOver="MM_showHideLayers('ballon_tinta','','show')" onMouseOut="MM_showHideLayers('ballon_tinta','','hide')"/> </li>
 <?php } ?>
       
          <? if(in_array('resistente_umidade', $atributos)){ ?>
            <li>
               <div  id="ballon_resistencia"  class="baloon">
              <div class="txt_baloon"> Resistente à umidade </div>
              <div class="base_baloon"><img src="<?php echo get_template_directory_uri() ?>/img/perna_balao.png"/></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_resistencia.jpg" onMouseOver="MM_showHideLayers('ballon_resistencia','','show')" onMouseOut="MM_showHideLayers('ballon_resistencia','','hide')"/> </li>
          <li>
         <?php } ?>  
           
           
            <? if(in_array('facil_instalar', $atributos)){ ?>
            <div  id="ballon_instalacao"  class="baloon">
              <div class="txt_baloon"> Fácil instalação</div>
              <div class="base_baloon"><img src="<?php echo get_template_directory_uri() ?>/img/perna_balao.png"/></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_tempo_instalacao.jpg" onMouseOver="MM_showHideLayers('ballon_instalacao','','show')" onMouseOut="MM_showHideLayers('ballon_instalacao','','hide')"/> </li>
          <li>
          <?php } ?>
           
            <? if(in_array('passa_fios', $atributos)){ ?>
            <div  id="ballon_passafio"  class="baloon">
              <div class="txt_baloon"> Passa fios para embutir fiação </div>
              <div class="base_baloon"><img src="<?php echo get_template_directory_uri() ?>/img/perna_balao.png"/></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_passa-fios.jpg" onMouseOver="MM_showHideLayers('ballon_passafio','','show')" onMouseOut="MM_showHideLayers('ballon_passafio','','hide')" /> </li>
           <?php } ?>
              
          <li>
           <? if(in_array('imune_cupins', $atributos)){ ?>
            <div  id="ballon_praga"  class="baloon">
              <div class="txt_baloon"> Imune a cupins. Não <br>
mofa ou deteriora </div>
              <div class="base_baloon"><img src="<?php echo get_template_directory_uri() ?>/img/perna_balao.png"/></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_praga_inseto.jpg" onMouseOver="MM_showHideLayers('ballon_praga','','show')" onMouseOut="MM_showHideLayers('ballon_praga','','hide')" /> </li>
          <?php } ?>
           
        </ul>
      </div>
    </div>
    <div class="blocktext_prod">
      <h2>Detalhes do produto</h2>
      <div class="text_area_prod">
      <?php the_field('descrição_da_linha', $taxonomy . '_' . $term_id); ?>
      </div>
    </div>
    <div class="blocktext_prod">
      <h2>Downloads</h2>
      <div class="text_area_prod">
        <ul class="downloads_area">
          
           <? $ficha = get_field('ficha_tecnica', $taxonomy . '_' . $term_id) ?>
           <li><a href="<?php echo $ficha['url']?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon_ficha.jpg"/>
            <p>Ficha<br>
              técnica</p>
            </a></li>
           
         <? $manual = get_field('manual_de_instalação');
				if($manual):  ?>   
          <li><a href="<?php echo $manual['url']?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon_manual_instalacao.jpg"/>
            <p>Manual <br>
              de instalação</p>
            </a> 
		<?php endif; ?>
			</li>
            

             <? $laudo = get_field('laudo', $taxonomy . '_' . $term_id) ?>
		<? if($laudo): ?>  
			
          <li><a href="<?php echo $laudo['url']?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon_laudo.jpg"/>
            <p>Laudo</p>
            </a>
			<?php endif; ?>
			</li>
        </ul>
      </div>
    </div>
    <div class="blocktext_prod">
      <h2>Vídeos</h2>
      <div class="text_area_prod">
       <?php the_field('video')?> </div>
       <iframe width="600" height="415" src="<?php the_field('video_linha', $taxonomy . '_' . $term_id); ?>" frameborder="0" allowfullscreen></iframe>
       
     </div>
  </div>
  <!--content conteudo --> 
  <div id="sidebar">  <?php get_sidebar(); ?>  </div>
										

<? endwhile; ?>

</div>

<?php get_footer(); ?>
