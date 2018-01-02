<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<link rel='stylesheet' media='(min-width: 320px) and (max-width: 480px)' href='<?php echo get_template_directory_uri()?>/css/mobile.css' />

	<link rel='stylesheet' media='(min-width: 768px) and (max-width: 1024px)' href='<?php echo get_template_directory_uri()?>/css/tablets.css' />

	<script type="text/javascript">
		document.addEventListener('wpcf7mailsent', function(event){
			location = 'http://gart.com.br/mensagem-enviada/';
		},false);

		function MM_showHideLayers() { //v9.0
			var i,p,v,obj,args=MM_showHideLayers.arguments;
			for (i=0; i<(args.length-2); i+=3) 
				with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
					if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
					obj.visibility=v; }
		}
	</script>
</head>

<body <?php body_class(); ?>>
	<header>
		<!--top menus-->
		<div id="top_menu">
			<div class="container">
				<ul id="social_list">
					<li>
						<a href="https://www.facebook.com/gartacabamentos/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/img/icon_facebook.png" alt="Facebook">
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/gart_molduras/" target="_blank">
							<img src="<?php echo get_template_directory_uri()?>/img/icon_instagram.png" alt="instagram">
						</a>
					</li>
				</ul>
				<div class="label_social">Acompanhe a Gart nas redes sociais</div>
			</div>
		</div>
		<!-- Main menu -->
		<div id="main_menu">
			<div class="container"> 
				<a href="<?php echo home_url(); ?>">
					<img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo_gart.png" width="150px;" alt="logo Gart Acabamentos">
				</a>
				<a href="<?php echo home_url(); ?>"> 
					<img class="home_icon" src="<?php echo get_template_directory_uri()?>/img/icon_home.png"/>
				</a>
				<button class="icon-menu-reposive"><i class="genericon genericon-menu"></i></button>
				<?php
					$args = array(
								'theme_location' => 'primary',
								'menu_class' => 'primary-menu',
							); 
					wp_nav_menu( $args );
				?>
			</div>
		</div>
	</header>