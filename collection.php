<?php
/*
    Template Name: pagina Colecciones
*/
get_header(); ?>

<?php while (have_posts()):
    the_post(); ?>
    <?php

    $datos_principales = get_field('datos_principales');
    $term = get_term($datos_principales['collection_name']);

    ?>
    <?php if ($datos_principales): ?>
        <div class="relative h-[350px] bg-prenda bg-center">
            <div class="absolute inset-0 bg-black opacity-30"></div>

            <div class="h-full flex flex-col justify-center items-center font-playfair italic">
                <div class="flex justify-center">
                    <h1 class="z-10 text-white text-[60px] font-playfair italic">Colección</h1>
                </div>
                <div class="flex gap-10 text-white z-10 text-[24px]">
                    <span>Inicio</span>
                    <span>Colecciones</span>
                </div>
            </div>
        </div>
        <section class="bg-stone flex flex-col gap-[40px]">
            <div class="flex justify-center">
                <h1 class="z-10 text-primary text-[60px] font-playfair italic"><?php echo $term->name; ?></h1>
            </div>
            <div class="px-10 lg:px-[150px]">
                <?php list_products_taxonomy($term) ?>
            </div>
        </section>
    <?php endif ?>
<?php endwhile ?>
<?php get_footer() ?>