<?php 
/*
    Template Name: pagina productos & servicios
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="hero-secondary" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <?php 
        if(get_field('details')) $details=get_field('details');
        if(get_field('img_products')) $img_products=get_field('img_products');
        if(get_field('img_services')) $img_services=get_field('img_services');
    ?>
    <section>
        <div class="products-services container">
            <div class="">

                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo $img_products['url'] ?>" alt="">
                        <a href="http://qataya.test/es/productos/">

                            <h2 class="card-title center-align">
                                <?php if(get_locale()=='en_US'): ?>
                                    Products
                                <?php else: ?>
                                    Productos
                                <?php endif ?>
                            </h2>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="">

                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo $img_services['url'] ?>" alt="">
                        <a href="http://qataya.test/es/servicios/">

                            <h2 class="card-title center-align">
                                <?php if(get_locale()=='en_US'): ?>
                                    Services
                                <?php else: ?>
                                    Produccion y confeccion
                                <?php endif ?>
                            </h2>
                        </a>
                    </div>
                    
                </div>
            </div>
            
            
            
            

        </div>
    </section>
    <section>
        
        
    </section>

<?php endwhile ?>
<?php get_footer() ?>