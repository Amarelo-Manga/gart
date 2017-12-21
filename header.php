<!doctype html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>




<script>
	document.addEventListener('wpcf7mailsent', function(event){
		location = 'http://gart.com.br/mensagem-enviada/';
	},false);
	</script>

</head>

<body <?php body_class(); ?>>
<header>

<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>


  <!--top menus-->
  <div id="top_menu">
    <div class="container">
      <ul id="social_list">
        <li><a href="https://www.facebook.com/gartacabamentos/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/icon_facebook.png" alt="Facebook"></a></li>
        <li><a href="https://www.instagram.com/gart_molduras/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/icon_instagram.png" alt="instagram"></a></li>
      </ul>
      <div class="label_social">Acompanhe a Gart nas redes sociais </div>
    </div>
  </div>
  <!-- Main menu -->
  <div id="main_menu">
    <div class="container"> <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo_gart.png" width="150px;" alt="logo Gart Acabamentos"></a>
     <a href="<?php echo home_url(); ?>"> <img class="home_icon" src="<?php echo get_template_directory_uri()?>/img/icon_home.png"/> </a>
          <?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'primary-menu',
					) );
	?>

    </div>
  </div>
</header><strong></strong>