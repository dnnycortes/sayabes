<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="galeria">
    <header class="main-header">
        <div class="main-width">
            <h1>
                <a href="<?php bloginfo('url'); ?>">
                    <p class="log1">Ambientes en equilibrio</p>
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


    <div class="cover galeria">
        <div class="main-width">
            <h2>Galería</h2>
            <div class="text" data-paroller-factor="0.9" data-paroller-type="foreground" data-paroller-direction="vertical">
                <h3>Equilibrio natural a un paso de la ciudad</h3>
                <p>Sáyabes está en Bosque Real. A tres minutos de Interlomas rodeado de naturaleza.</p>
            </div>
        </div>
    </div>


    <section class="section-galeria">
        <div class="main-width">
            <h2>Descubre todo lo que tenemos para ti</h2>
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