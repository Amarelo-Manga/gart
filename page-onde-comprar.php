<?php 
 /* Template Name: Onde Comprar */
?>

<?php get_header(); ?>
<div id="banner_ondecomprar">
	<h1>Onde Comprar</h1>
</div>
<div id="primary" class="content-compra">
	<h2>Compre em uma loja  perto de você</h2>
	<p>Os produtos são vendidos pelos nossos revendedores espalhados por todo o Brasil. <br>
	  Cadastre-se no formulário abaixo para ter acesso ao endereço e contatos da loja mais próxima de você</p>

	<div id="cadastro_onde">
		<h2>Lojas Físicas</h2>
		<p>Cadastre-se para ter acesso a todas as lojas físicas<br> que vendem nossos produtos</p>
		<?php 
			// Use shortcodes in form like Landing Page Template.
			echo do_shortcode( '[contact-form-7 id="16987" title="Onde Comprar"]' );
		?>
	</div>
	<br><br><br>
	<div id="login_onde">
		<b>Já possui cadastro?</b>
		<p>Digite o e-mail utilizado no cadastro para acessar <br> a lista de Revendas</p>
		<?php 
			// Use shortcodes in form like Landing Page Template.
			echo do_shortcode( '[contact-form-7 id="16989" title="Revenda Acesso"]' );
		?>
		<br><br>
			<b>Telefones</b>
			<p>
				Se preferir, contate-nos através dos números abaixo:<br> SAC: 0800 171 708<br>
				<br> Vendas, Faturamento,Expedição e Cobrança<br> +55 (11) 2923 0990<br>
				<br> Projetos:+55 (11) 5511 7520</p>
	</div>

</div>
<?php get_footer(); ?>