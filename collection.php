<?php 
/*
    Template Name: pagina Colecciones
*/
get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    <?php 
        
        $datos_principales = get_field('datos_principales');
    ?>
    <?php if($datos_principales):?>
        <div>
            <h1>
                <?php                 
                    $term = get_term($datos_principales['collection_name']);
                    echo $term->name; // Muestra el nombre o etiqueta de la taxonomía
                ?>
            </h1>
            
        </div>
        <section>
            <div class="container">
                <?php list_products_taxonomy($term) ?>
            </div>
        </section>
    <?php endif ?>
<?php endwhile ?>
<?php get_footer() ?>