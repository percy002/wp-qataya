<?php 
/*
    Template Name: pagina contacto
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
        <div class="container">
        </div>
    </section>
    <section>
        <div class="info_qataya container">
            <div class="">

                <?php if(get_field('direccion')): ?>
                    <div class="">
                        <?php if(get_locale()=='en_US'): ?>
                            <h3>Visit Us At:</h3>
                        <?php else: ?>
                            <h3>Visitenos en:</h3>
                        <?php endif ?>
                        <p><?php echo $direccion ?></p>            
                    </div>
                <?php endif ?>
                <div class="">
                    <?php if(get_locale()=='en_US'): ?>
                        <h3>Call Us On:</h3>
                    <?php else: ?>
                        <h3>Lamanos:</h3>
                    <?php endif ?>
                    <p><?php echo $telefono ?></p>            
                </div>
                <div class="">
                    <?php if(get_locale()=='en_US'): ?>
                        <h3>Email Us:</h3>
                    <?php else: ?>
                        <h3>Escribenos:</h3>
                    <?php endif ?>
                    <p><?php echo $correo ?></p>            
                </div>
            </div>
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