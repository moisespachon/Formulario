<?php 

/*
    Template name: Plantilla de contacto
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
		    	echo do_shortcode('[contact-form-7 id="5" title="Formulario de Contacto" id:fromrepro]');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
