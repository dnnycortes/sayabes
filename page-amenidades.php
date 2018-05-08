<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="amenidades">
    <header class="main-header">
        <div class="main-width">
            <h1>
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
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
        <?php wp_nav_menu(array('theme_location' => 'primary'));?>
    </nav>


    <div class="cover amenidades">
        <div class="main-width">
            <h2>Amenidades y aventuras</h2>
            <div class="text" data-paroller-factor="0.6" data-paroller-type="foreground" data-paroller-direction="vertical">
                <h3>Las amenidades que siempre soñaste</h3>
                <p>Amenidades y aventuras que se convierten en momentos inolvidables, en nuevos retos, en convivencia y diversión. en tu estilo de vida.</p>
                <p>Descubre todas las amenidades y verás que no querrás salir de casa</p>
            </div>
        </div>
    </div>


    <section class="section-amenidades">
        <div class="main-width">
            <h2>Amenidades y aventuras</h2>
            <div class="owl-carousel amenidades">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-salon-juegos.png">
				<p>Circuito</p>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-area-juegos.png">
				<p>Alberca</p>
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/amenidades-cancha-tennis.png">
				<p>Canche de tenis</p>
			</div>
		</div>
        </div>    
    </section>


    <section class="section-adventure-map">
        <div class="main-width">
            <h2>Mapa de aventuras</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/mapa-amenidades.png">
        </div>
    </section>


    <section class="section-galeria">
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

    <section class="section-contacto" id="contacto">
        <div class="main-width">
            <h2>Contacto</h2>
            <p>Envía un mensaje y pronto nos pondremos en contacto:</p>
            <?php echo do_shortcode( '[contact-form-7 id="13" title="contacto"]' ); ?>
        </div>
    </section>

    <?php get_footer(); ?>

</div>