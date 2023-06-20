<?php 
/*
    Template Name: pagina productos
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="hero-secondary" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <?php 
        if(get_field('producto')) $producto=get_field('producto');
        if(get_field('producto2')) $producto2=get_field('producto2');
        if(get_field('telefono')) $telefono=get_field('telefono');
        if(get_field('correo_electronico')) $correo=get_field('correo_electronico');
    ?>
    <section>
        <div class="product container">
            <div class="producto__first">
                <div class="car">
                    <div class="card-image">
                        <a href="<?php echo $producto['link'] ?>">
                    
                        <img src="<?php echo $producto['imagen_producto']['url'] ?>" alt="">
                        </a>
                    </div>
                    <div class="card-title">
                        <a href="<?php echo $producto['link'] ?>">
                    
                        <h2><?php echo $producto['categoria'] ?></h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="producto__first">
                <div class="car">
                    <div class="card-image">
                        <a href="<?php echo $producto2['link'] ?>">
                            <img src="<?php echo $producto2['imagen_producto']['url'] ?>" alt="">
                        </a>
                    </div>
                    <div class="card-title">
                    <a href="<?php echo $producto2['link'] ?>">
                        <h2><?php echo $producto2['categoria'] ?></h2>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

<?php endwhile ?>
<?php get_footer() ?>