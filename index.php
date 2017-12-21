<?php get_header(); ?>
<!-- Slideshow -->

<div id="slideshow"> <?php echo do_shortcode('[smartslider3 slider=2]');?></div>
<section id="dest_prod">
	<ul class="list_prod_det">
		<li> <a href="http://gart.com.br/linha_de_produto/roda-tetos/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_roda-teto.jpg" alt="Roda-tetos" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Roda-tetos</span></h2>
      </a> </li>
		<li> <a href="http://gart.com.br/linha_de_produto/rosetas/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_roseta.jpg" alt="Rosetas" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Rosetas</span></h2>
      </a> </li>
		<li> <a href="http://gart.com.br/linha_de_produto/roda-meios/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_rodameios.jpg" alt="Rodameios" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Roda-meios</span></h2>
      </a> </li>
		<li> <a href="http://gart.com.br/linha_de_produto/rodapes/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_rodape.jpg" alt="Roda-tetos" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Rodapés</span></h2>
      </a> </li>
		<li> <a href="http://gart.com.br/wallstyl-color/"> <img  src="<?php echo get_template_directory_uri()?>/img/dest_prod_wallstyl.jpg" alt="Wallstyl Color" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Wallstyl Color <sup>®</sup></span></h2>
      </a> </li>
		<li> <a href="http://gart.com.br/linha_de_produto/molduras-externas/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_molduras_externas.jpg" alt="Roda-tetos" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Molduras externas</span></h2>
      </a> </li>
		<li><a href="http://gart.com.br/caixa-de-corte-gart/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_caixa_corte.jpg" alt="Caixa de Corte" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Caixa de Corte</span></h2>
      </a> </li>
		<li><a href="http://gart.com.br/colas-gart-fix/"> <img src="<?php echo get_template_directory_uri()?>/img/dest_prod_colas.jpg" alt="Colas" />
      <h2><img src="<?php echo get_template_directory_uri()?>/img/icon_more.png" class="more"><span class="label_prod">Colas</span></h2>
      </a> </li>
	</ul>
	<div id="search_box">
		<h2>Busca de produtos</h2>

	  <div id="search_filter_prod"><?php echo do_shortcode( '[searchandfilter taxonomies="search,linha_de_produto" search_placeholder="Buscar produto" submit_label="ok"]' ); ?></div>
	</div>
</section>

<!-- Galeria de imagens -->
<section id="gallery">
	<div class="container">
		<h2>CONFIRA ALGUMAS DAS APLICAÇÕES DE NOSSOS PRODUTOS</h2>
		<p>Veja algumas sugestões de como os acabamentos Gart podem ajudar você a reinventar seu ambiente</p>
	</div>
   <?php $recent = new WP_Query("page_id=7240"); while($recent->have_posts()) : $recent->the_post();?>
       <?php the_content(); ?>
<?php endwhile; ?>
	<div id="more_galery"><a href="galeria/">Confira a galeria completa</a></div>
</section>

<!-- Destaques  -->
<section id="destaques">
	<ul id="list_dest">
		<li> <img src="<?php echo get_template_directory_uri()?>/img/onde_comprar.png" alt="onde comprar">
			<h2>ONDE COMPRAR</h2>
			<p>Acesse nossa página<br> exclusiva e busque<br> a revenda mais próxima <br> de você</p>
			<span class="call_orange"><a href="http://gart.com.br/revenda">Confira</a></span> </li>
		<li> <img src="<?php echo get_template_directory_uri()?>/img/assista_videos.png" alt="Vídeos">
			<h2>VÍDEOS</h2>
			<p>Confira nossos vídeos<br> mostrando como instalar<br> de maneira fácil e prática<br> os produtos Gart</p>
			<span class="call_orange"><a href="movies/">Confira</a></span> </li>
		<li> <img src="<?php echo get_template_directory_uri()?>/img/downloads.png" alt="Downloads"/>
			<h2>CATÁLOGOS</h2>
			<p>Baixe nossos catálogos<br> e confira de maneira <br> detalhada as especifiações <br> de nosso produto </p>
			<span class="call_orange"><a href="http://www.gart.com.br/downloads/catalogo_gart.pdf" target="_blank">Download</a></span> </li>
	</ul>
</section>

<!-- Notícias -->
<section id="news">
	<div id="title_news">
		<div class="container">
			<h2>NOTÍCIAS</h2>
		</div>
	</div>
	<ul id="list_news">

		<?php 


        $args = array(
        'posts_per_page' => 3,
        'orderby' => 'most_recent'
        );

        $the_query = new WP_Query( $args );

        ?>

		<ul>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<li class="det_news">
				<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
				<a href="<?php the_permalink();?>">
					<h3>
						<?php the_title(); ?>
					</h3>
				</a>
				<hr/>
				<a href="<?php the_permalink();?>">
				<p>
					<?php the_excerpt(); ?>
				</p>
				</a>
			</li>

			<?php endwhile; else: ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</ul>

		<div id="more_news"><a href="category/noticias/">Veja todas as notícias</a></div>
</section>



<?php get_footer(); ?>