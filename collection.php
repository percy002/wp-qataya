<?php 
/*
    Template Name: pagina Catalogo
*/
get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    <?php 
        
        $datos_principales = get_field('datos_principales');
    ?>

    <div class="hero-secondary" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php echo $datos_principales['collection_name']; ?></h2>

            
        </div>
    </div>
    <div class="collectionQataya contenedor">
        <div class="collectionQataya__description">
            <img src="" alt="">
            <div class="">
                <p>
                    <?php echo $datos_principales['collection_description']; ?>
                </p>
            </div>
        </div>
    </div>
<?php endwhile ?>
<?php get_footer() ?>