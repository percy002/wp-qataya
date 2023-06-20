<?php 
/*
    Template Name: pagina servicios
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="hero-secondary" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <?php 
        if(get_field('direccion')) $direccion=get_field('direccion');
        if(get_field('telefono')) $telefono=get_field('telefono');
        if(get_field('correo_electronico')) $correo=get_field('correo_electronico');
    ?>
    <section>
        <div class="servicios container">
            <p>Si le ha interesado nuestro trabajo textil y de confección, hemos establecido una división que provee el servicio de fabricación de extensa variedad de prendas para nuestros clientes, que nos permite plasmar sus diseños utilizando nuestros textiles de alpaca y baby alpaca, su mezcla con seda, lana y otras fibras de origen animal, u otros como los de vicuña o guanaco.</p>
        </div>
    </section>
    <section>
        <div class="servicios_contacto container">
            
        </div>
        
    </section>
    
    <section>
        <div class="container">

            <h3>
                <?php if(get_locale()=='en_US'): ?>
                    Get In Touch With Us
                <?php else: ?>
                    Pongase en Contacto Con Nosotros
                <?php endif ?>
                
            </h3>
            <div class="contact-qataya">
                <?php get_template_part("template-parts/contact_form") ?>
            </div>
        </div>
    </section>

<?php endwhile ?>
<?php get_footer() ?>