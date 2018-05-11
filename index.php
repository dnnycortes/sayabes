<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<header class="main-header">
	<div class="main-width">
		<h1>
			<a href="<?php bloginfo('url'); ?>">
				<p class="log1">Ambientes en equilibrio</p>
				<span></span>
				<p class="log2">Departamentos en Bosque Real</p>
			</a>
		</h1>
		<div class="contact-info">
			<div class="social-media">
				<a href="#" class="social facebook">Facebook</a>
				<a href="#" class="social instagram">Instagram</a>
			</div>
			<div class="call-us">
				<p>Llámanos <span>(55)81142040</span></p>
			</div>
			<a href="#" class="btn-descarga-pdf">Descarga el PDF</a>
		</div>

		<a href="javascript:void(0);" class="btn-menu">Menu</a>
	</div>
</header>

<nav class="main-nav">
	<a href="javascript:void(0);" class="btn-close">Cerrar</a>
	<div class="main-nav-menu"><?php wp_nav_menu(array('theme_location' => 'primary'));?></div>
</nav>

<nav class="dots-nav">
	<ul>
		<li><a href="#intro" class="selected">Intro</a></li>
		<li><a href="#departamentos">Departamentos</a></li>
		<li><a href="#amenidades">Amenidades</a></li>
		<li><a href="#galeria">Galería</a></li>
		<li><a href="#ubicacion">Ubicación</a></li>
		<li><a href="#contacto">Contacto</a></li>
	</ul>
</nav>

<div class="intro" id="intro">
	<div class="main-width">
		<div class="text one" data-paroller-factor="0.9" data-paroller-type="foreground">
			<h3>Bienvenido</h3>
			<p>La casa que covertirás en ese lugar especial dónde se crean los mejores recuerdos.</p>
			<p>Espacio y ambiente en perfecto equilibrio esperan llenarse con tus vivencias y sueños, <br> Sáyabes es el hogar que complementa tu estilo de vida.</p>
		</div>

		<div class="text two" data-paroller-factor="0.9" data-paroller-type="foreground">
			<h3>Rodeado de bosque y jardines</h3>
			<p>Balance entre arquitectura y áreas verdes. Vivir rodeado de naturaleza y estar a un paso <br> de las comodidades de la ciudad es cálidad de vida.</p>
		</div>

		<div class="text three" data-paroller-factor="0.9" data-paroller-type="foreground">
			<h3>Las amenidades que siempre soñaste</h3>
			<p>Con todas las amenidades y aventuras que garantizan emoción y felicidad cada día. <br> Ya no querrás salir de casa.</p>
		</div>
	</div>
</div>

<section class="section-departamentos" id="departamentos">
	<div class="main-width">
		<h2>Departamentos</h2>
		<div class="owl-carousel departamentos">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/departamento-tipo-A.png" alt="">
				<div class="features">
					<h3>Tipo A. 158 m2</h3>
					<p>Lista de características</p>
				</div>
			</div>
			<div class="item">
				2
			</div>
		</div>
	</div>
</section>

<section class="section-amenidades" id="amenidades">
	<div class="main-width">
		<h2>Amenidades</h2>
		<div class="owl-carousel amenidades">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-salon-juegos.png">
				<p>Salón de juegos</p>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-area-juegos.png">
				<p>Área de juegos</p>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-cancha-tennis.png">
				<p>Cancha de tenis</p>
			</div>
		</div>
	</div>
</section>

<section class="section-galeria" id="galeria">
	<div class="main-width">
		<h2>Galería</h2>
		<!--EMPIEZA EL LOOP-->
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?> 
		<?php endwhile; else: ?>
			<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
		<?php endif; ?>
		<!--TERMINA EL LOOP-->
	</div>
</section>

<section class="section-ubicacion" id="ubicacion">
	<div class="main-width">
		<h2>Ubicación</h2>
	</div>
	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15050.66515415244!2d-99.29476467613237!3d19.426819490199893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d206afcbeeb94f%3A0xadd2494484aa49aa!2sBosque+Real%2C+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1525406087325" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>

<section class="section-contacto" id="contacto">
	<div class="main-width">
		<h2>Contacto</h2>
		<p>Envía un mensaje y pronto nos pondremos en contacto:</p>
		<?php echo do_shortcode( '[contact-form-7 id="13" title="contacto"]' ); ?>
	</div>
</section>
<?php get_footer(); ?>