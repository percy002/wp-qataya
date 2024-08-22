<?php get_header(); ?>

<?php while (have_posts()):
    the_post(); ?>

    <?php
    if (get_field('portada_1'))
        $portada1 = get_field('portada_1');
    if (get_field('abstract'))
        $abstract = get_field('abstract');
    if (get_field('imagen_taller'))
        $imagen_taller = get_field('imagen_taller');
    if (get_field('catalogo1'))
        $catalogo1 = get_field('catalogo1');
    if (get_field('catalogo2'))
        $catalogo2 = get_field('catalogo2');
    if (get_field('catalogo3'))
        $catalogo3 = get_field('catalogo3');
    if (get_field('video'))
        $video = get_field('video');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $video, $matches);
    $src = $matches[1];

    // Add extra parameters to src and replace HTML.
    $params = array(
        'controls' => 0,
        'rel' => 0,
        'showinfo' => 0
    );
    $new_src = add_query_arg($params, $src);
    $video = str_replace($src, $new_src, $video);


    ?>
    <div class="slider hero-home">
        <ul class="slides">
            <li>
                <img src="<?php echo $portada1['url'] ?>">
            </li>
        </ul>
    </div>
    <section class="pt-[120px] pb-[80px] bg-gris ">
        <div class="flex flex-col gap-[30px] px-5 sm:px-[180px] about-us items-center">
            <div class="flex justify-center">
                <img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png"
                    alt="logo qataya">
            </div>
            <div class="">
                <?php
                echo $abstract
                    ?>
            </div>

            <div class="max-w-[1080px] flex flex-col md:flex-row gap-20">
                <div class="p-[20px] flex-col gap-y-20 bg-white shadow-lg rounded-lg">
                    <h4 class="italic font-semibold">Misión</h4>
                    <p class="text-center">Producir y comercializar productos y servicios de excelencia con tradición,
                        creando valor en cada agente
                        de la cadena comercial con responsabilidad social y sostenibilidad.</p>
                </div>
                <div class="p-[20px] flex-col gap-y-20 bg-white shadow-lg rounded-lg">
                    <h4 class="italic font-semibold">Vision</h4>
                    <p class="text-center">Producir y comercializar productos y servicios de excelencia con tradición,
                        creando valor en cada agente
                        de la cadena comercial con responsabilidad social y sostenibilidad.</p>
                </div>
                <div class="p-[20px] flex-col gap-y-20 bg-white shadow-lg rounded-lg">
                    <h4 class="italic font-semibold">Valores</h4>
                    <p class="text-center">Producir y comercializar productos y servicios de excelencia con tradición,
                        creando valor en cada agente
                        de la cadena comercial con responsabilidad social y sostenibilidad.</p>
                </div>
            </div>
            <div class="flex justify-center">
                <button class="bg-brown-light text-white font-semibold py-[15px] px-[30px] focus:bg-brown-light">CONOCER
                    MAS</button>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="relative bg-tejido bg-cover bg-center py-[50px] flex flex-col gap-y-10">
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <div class="z-10">
            <h3 class="text-[70px] font-dancing text-white">Nuestras colecciones</h3>
        </div>
        <div class="collections container row ">
            <div class="col s12 m4">
                <div class="card z-depth-0">
                    <div class="card-image collection-image">
                        <a href="<?php echo get_site_url() ?>/coleccion-deep-in-nature/"><img class="responsive-image"
                                src="<?php echo $catalogo1['imagen1']['url']; ?>" alt=""></a>
                    </div>
                    <div class="card-content">
                        <a href="<?php echo get_site_url() ?>/coleccion-deep-in-nature/">
                            <h4><?php
                            echo $catalogo1['titulo']
                                ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card z-depth-0">
                    <div class="card-image collection-image">
                        <a href="<?php echo get_site_url() ?>/coleccion-ocaso/"><img class="responsive-image"
                                src="<?php echo $catalogo2['imagen1']['url']; ?>" alt=""></a>
                    </div>
                    <div class="card-content">
                        <a href="<?php echo get_site_url() ?>/coleccion-ocaso/">
                            <h4><?php
                            echo $catalogo2['titulo']
                                ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card z-depth-0">
                    <div class="card-image collection-image">
                        <a href="<?php echo get_site_url() ?>/coleccion-happy-life/"><img class="responsive-image"
                                src="<?php echo $catalogo3['imagen1']['url']; ?>" alt=""></a>
                    </div>
                    <div class="card-content">
                        <a href="<?php echo get_site_url() ?>/coleccion-happy-life/">
                            <h4><?php
                            echo $catalogo3['titulo']
                                ?></h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center Z-10">
            <button class="bg-brown-light text-white font-semibold py-[15px] px-[30px] focus:bg-brown-light Z-10">VER MAS
                PRODUCTOS</button>
        </div>
    </section>
    <section class="py-[60px] bg-gris w-full">
        <div class="flex w-full items-center h-[80vh]">
            <div class="hidden sm:block bg-brown-light w-2/12 h-1/2">

            </div>
            <div class="w-full sm:w-6/12">
                <lite-youtube videoid="Va7AqGifX74"></lite-youtube>

                <!-- <?php if (get_field('video')): ?>
                    <?php echo $video ?>
                <?php endif ?> -->
            </div>
            <div class="relative bg-tejido-espiral bg-cover bg-center w-4/12 h-[80%] hidden sm:block">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="h-full flex flex-col px-[30px] justify-center">
                    <div class="flex flex-col gap-1 z-10 ">
                        <p class="text-[48px] text-white text-pretty">PRODUCTOS DE ALTA CALIDAD</p>
                        <p class="text-[40px] text-[#C8C8C8]">PARA OFRECERTE</p>
                    </div>
                    <div class="flex justify-center z-10">
                        <button
                            class="bg-brown-light text-white font-semibold py-[15px] px-[30px] focus:bg-brown-light Z-10">VER
                            MAS
                            PRODUCTOS</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <h3>
                <?php if (get_locale() == 'en_US'): ?>
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


    <!-- <section>
        <div class="container double abstract">
            <div class="abstract__text">
                <h2>
                    <?php if (get_locale() == 'en_US'): ?>
                        THREADS OF HISTORY: THE GRAND TRADITION OF THE ART OF SILK
                    <?php else: ?>
                        THREADS OF HISTORY: THE GRAND TRADITION OF THE ART OF SILK
                    <?php endif ?>
                </h2>
                <p>
                    <?php echo $abstract ?>
                    <p>
                        
                    <a href="">
                        <?php if (get_locale() == 'en_US'): ?>
                            Discover more
                        <?php else: ?>
                            Ver mas
                        <?php endif ?>
                    </a>
                    </p>
                </p>
            </div>
            <div class="abstract__img">
                <img src="<?php if (get_field('imagen_taller'))
                    echo $imagen_taller['url'] ?>" alt="">
            </div>
        </div>
    </section> -->


<?php endwhile; ?>
<?php get_footer() ?>