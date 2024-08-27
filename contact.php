<?php
/*
    Template Name: pagina contacto
*/

get_header(); ?>
<?php while (have_posts()):
    the_post(); ?>
    <div class="relative h-[350px] bg-wool bg-center">
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <div class="h-full flex flex-col justify-center items-center font-playfair italic">
            <div class="flex justify-center">
                <h2 class="z-10 text-white text-[60px] font-playfair italic"><?php the_title(); ?></h2>
            </div>
            <div class="flex gap-10 text-white z-10 text-[32px]">
                <span>Inicio</span>
                <span>Contacto</span>
            </div>
        </div>
    </div>
    <?php
    if (get_field('direccion'))
        $direccion = get_field('direccion');
    if (get_field('telefono'))
        $telefono = get_field('telefono');
    if (get_field('correo_electronico'))
        $correo = get_field('correo_electronico');
    ?>
    <section class="relative bg-modelo1 bg-left bg-cover py-5 px-10 lg:py-[60px] lg:px-[150px]">
        <!-- <div class="absolute inset-0 bg-black opacity-50"></div> -->

        <div class="w-full flex flex-col lg:flex-row lg:justify-between">
            <div class="flex-1 "></div>
            <div class="flex-1 z-10 bg-white/80 py-[30px] px-[46px] flex flex-col gap-[10px]  xl:max-w-[40%]">
                <h3 class="text-[28px] font-semibold text-primary">
                    ¡Envíanos un correo electrónico!
                </h3>
                <div class="color-primary">
                    <?php get_template_part("template-parts/contact_form") ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile ?>
<?php get_footer() ?>