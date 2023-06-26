<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    
    <?php 
        if(get_field('nombre_producto')) $nombre_producto=get_field('nombre_producto');
        if(get_field('descripcion')) $descripcion=get_field('descripcion');
        if(get_field('imagenes')) $imagenes=get_field('imagenes');
    ?>
    <section>
        <div class="row">
            
            <div class="col s12 m6 ">
                <div class="carousel-product carousel carousel-slider center container"  data-indicators="true">
                <div class="carousel-fixed-item center middle-indicator">
                    <div class="left back-black">
                        <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
                    </div>
                    
                    <div class="right back-black">
                        <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
                    </div>
                </div>
       
                    <?php if(get_field('imagenes')['imagen1']): ?>

                        <div class="carousel-item white-text" href="#!" >
                            <img class="responsive-img " src="<?php echo $imagenes['imagen1']['url'] ?>" alt="">
                        </div>
                    <?php endif ?>
                    <?php if(get_field('imagenes')['imagen2']): ?>

                        <div class="carousel-item white-text" href="#!" >
                            <img class="responsive-img " src="<?php echo $imagenes['imagen2']['url'] ?>" alt="">
                        </div>
                    <?php endif ?>
                    <?php if(get_field('imagenes')['imagen3']): ?>

                        <div class="carousel-item white-text" href="#!" >
                            <img class="responsive-img " src="<?php echo $imagenes['imagen3']['url'] ?>" alt="">
                        </div>
                    <?php endif ?>
                    <?php if(get_field('imagenes')['imagen4']): ?>

                        <div class="carousel-item white-text" href="#!" >
                            <img class="responsive-img " src="<?php echo $imagenes['imagen4']['url'] ?>" alt="">
                        </div>
                    <?php endif ?>
                    
        
                </div>

                
            </div>
            <?php if(get_field('nombre_producto')): ?>
                <div class="col s12 m6">
                    <div class="">
                        <h1><?php echo $nombre_producto ?></h1>
                        <?php if(get_field('descripcion')) : ?>
                            <p><?php echo $descripcion ?></p>
                        <?php endif ?>
                        <!-- <h4>talla</h4> -->
                        <!-- <a href="" class="btn">Talla</a> -->
                    </div>
                </div>  
            <?php endif ?>
        </div>
    </section>
    <section>
        
        
    </section>
   

<?php endwhile ?>
<?php get_footer() ?>