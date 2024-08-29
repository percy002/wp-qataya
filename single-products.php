<?php get_header(); ?>

<?php while (have_posts()):
    the_post(); ?>

    <?php
    if (get_field('nombre_producto'))
        $nombre_producto = get_field('nombre_producto');
    if (get_field('descripcion'))
        $descripcion = get_field('descripcion');
    if (get_field('imagenes'))
        $imagenes = get_field('imagenes');
    ?>
    <section>
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

        <div class="px-[180px] py-[50px] bg-stone bg-cover flex flex-col gap-y-[50px]">
            <div class="flex justify-center">
                <h1 class="font-dancing text-primary text-[70px]"><?php echo ucwords(strtolower($nombre_producto ?? '')) ?>
                </h1>

            </div>

            <div class="flex gap-[60px]">
                <div class="flex-1">
                    <div class="carousel-product carousel carousel-slider center container" data-indicators="true">
                        <div class="carousel-fixed-item center middle-indicator">
                            <div class="left back-black">
                                <a href="Previo"
                                    class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i
                                        class="material-icons left  middle-indicator-text">chevron_left</i></a>
                            </div>

                            <div class="right back-black">
                                <a href="Siguiente"
                                    class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i
                                        class="material-icons right middle-indicator-text">chevron_right</i></a>
                            </div>
                        </div>

                        <?php if (get_field('imagenes')['imagen1']): ?>

                            <div class="carousel-item white-text" href="#!">
                                <img class="responsive-img " src="<?php echo $imagenes['imagen1']['url'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <?php if (get_field('imagenes')['imagen2']): ?>

                            <div class="carousel-item white-text" href="#!">
                                <img class="responsive-img " src="<?php echo $imagenes['imagen2']['url'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <?php if (get_field('imagenes')['imagen3']): ?>

                            <div class="carousel-item white-text" href="#!">
                                <img class="responsive-img " src="<?php echo $imagenes['imagen3']['url'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <?php if (get_field('imagenes')['imagen4']): ?>

                            <div class="carousel-item white-text" href="#!">
                                <img class="responsive-img " src="<?php echo $imagenes['imagen4']['url'] ?>" alt="">
                            </div>
                        <?php endif ?>


                    </div>


                </div>

                <div class="flex-1">
                    <div class="py-[50px] flex flex-col gap-[20px] font-playfair italic text-[36px] font-bold">
                        <p class="text-primary">Talla S/M</p>
                        <h6 class="text-second">Descripción</h6>
                        <?php if (get_field('descripcion')): ?>
                            <p class="text-[20px] font-regular">
                                <?php echo $descripcion ?? "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, cumque." ?>
                            </p>
                        <?php endif ?>
                        <!-- <h4>talla</h4> -->
                        <!-- <a href="" class="btn">Talla</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>


    </section>


<?php endwhile ?>
<?php get_footer() ?>