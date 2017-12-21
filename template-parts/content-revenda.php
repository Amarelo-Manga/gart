<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="http://gart.com.br/revenda/">voltar a lista de revendas</a><br><br>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	<div class="map">
<?
$values = get_field('mapa'); 
$lat = $values['lat'];
$lng = $values['lng'];
$address = $values['map'];
		?>	

  <style>
       #map {
           width: 580px;
		   height: 350px;
       
       }
    </style>

  
   <!--mapa-->
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo $lat ?>, lng: <?php echo $lng ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc88eUXqKltcz1nehmuMareCfEQvXIFcc&callback=initMap"></script>
	</div>
	<br><br>
	<!--Dados da revenda-->
	<h2><? echo the_field('Nome Fantasia'); ?></h2>
  <div id="address">
	<b>ENDEREÇO:</b> <?php echo the_field('endereco')?> <br>
	<? the_field('bairro') ?>, <? echo the_field('cidade')?> - <? echo the_field('uf')?><br>
	<b>CEP:</b> <? the_field('cep') ?>
	<b><br>
	TELEFONE:</b> <?php echo the_field('telefone');?>
	</div>
	<?php //twentysixteen_excerpt(); ?>

	<?php // twentysixteen_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
			the_content();
		
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div>
</article>
