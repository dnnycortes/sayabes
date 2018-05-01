<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="wrapper">
	<div class="slide one">
		<div class="overlay"></div>
		<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		<p>Somos expertos en consultoría sobre Asuntos Regulatorios y de cumplimiento de BPF para la industria:</p>
		<ul>
			<li>· Famacéutica </li>
			<li>· Farmoquímica </li>
			<li>· Dispositivos médicos </li>
			<li>· Alimentaria </li>
			<li>· Cosmética </li>
		</ul>
	</div>
	<div class="slide two">
		<div class="overlay"></div>
		<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		<p>Alcance a:</p>
		<ul>
			<li>· Desarrollo e implementación de la estrategia regulatoria para la obtención de autorizaciones (Licencias Sanitarias, CBPF, PSI, etc.) ante COFEPRIS.</li>
			<li>· Desarrollo e implementación de estrategia regulatoria para obtener la aprobación de FDA (Food and Drug Administration), HPB (Health Protection Branch), EMA (European Medicines Agency) y agencias sanitarias Latinoamericanas.</li>
			<li>· Auditorías internas y a proveedores</li>
			<li>· Capacitación a la medida</li>
			<li>· Reclutamiento de personal y/o outsourcing </li>
			<li>· Servicios de validación y calibración</li>
			<li>· Trámites ante COFEPRIS</li>
		</ul>
	</div>
	<ul class="slide-menu">
		<li>
			<a href="" class="btn-slide-one active">
				<span></span>
				<p>Somos expertos</p>
			</a>
		</li>
		<li>
			<a href="" class="btn-slide-two">
				<span></span>
				<p>Alcance</p>
			</a>
		</li>
	</ul>
</div><!-- .wrap -->
<?php get_footer(); ?>