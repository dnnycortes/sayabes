<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->
<div class="intro">
	<div class="main-width">
		<div class="text one">
			<h3>Bienvenido</h3>
			<p>La casa que covertirás en ese lugar especial dónde se crean los mejores recuerdos.</p>
			<p>Espacio y ambiente en perfecto equilibrio esperan llenarse con tus vivencias y sueños, <br> Sáyabes es el hogar que complementa tu estilo de vida.</p>
		</div>

		<div class="text two">
			<h3>Rodeado de bosque y jardines</h3>
			<p>Balance entre arquitectura y áreas verdes. Vivir rodeado de naturaleza y estar a un paso <br> de las comodidades de la ciudad es cálidad de vida.</p>
		</div>

		<div class="text three">
			<h3>Las amenidades que siempre soñaste</h3>
			<p>Con todas las amenidades y aventuras que garantizan emoción y felicidad cada día. <br> Ya no querrás salir de casa.</p>
		</div>
	</div>
</div>

<section class="section-departamentos">
	<div class="main-width">
		<h2>Departamentos</h2>
		<div class="owl-carousel owl-theme">
			<div>1</div>
			<div>2</div>
			<div>3</div>
			<div>4</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>