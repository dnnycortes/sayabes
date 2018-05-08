<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="ubicacion">
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


    <div class="cover ubicacion">
        <div class="main-width">
            <h2>Ubicación</h2>
            <div class="text" data-paroller-factor="0.9" data-paroller-type="foreground" data-paroller-direction="vertical">
                <h3>Equilibrio natural a un paso de la ciudad</h3>
                <p>Sáyabes está en Bosque Real. A tres minutos de Interlomas rodeado de naturaleza.</p>
            </div>
        </div>
    </div>


    <section class="section-ubicacion" id="ubicacion">
        <div class="main-width">
            <h2>Mapa de localización</h2>
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

</div>