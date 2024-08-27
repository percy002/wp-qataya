<?php
/*
    Template Name: pagina nosotros
*/

get_header(); ?>
<?php while (have_posts()):
    the_post(); ?>
    <?php
    $thumbnail_url = get_the_post_thumbnail_url();
    $default_url = get_template_directory_uri() . "/assets/img/bg/bg-prenda.jpg";
    ?>
    <div class="relative h-[350px] bg-prenda bg-center">
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <div class="h-full flex flex-col justify-center items-center font-playfair italic">
            <div class="flex justify-center">
                <h2 class="z-10 text-white text-[60px] font-playfair italic"><?php the_title(); ?></h2>
            </div>
            <div class="flex gap-10 text-white z-10 text-[32px]">
                <span>Inicio</span>
                <span>Nosotros</span>
            </div>
        </div>
    </div>
    <?php
    if (get_field('mision'))
        $mision = get_field('mision');
    if (get_field('vision'))
        $vision = get_field('vision');
    if (get_field('valores'))
        $valores = get_field('valores');
    ?>
    <main>
        <div class="flex flex-col gap-y-[30px] font-playfair italic bg-stone bg-opacity-50">

            <div class="pt-[80px] md:px-[150px] pb-[20px] flex flex-col gap-y-[20px]">
                <div class="flex justify-center">

                    <img class="responsive-img h-[40px]"
                        src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png" alt="logo qataya">
                </div>
                <div class="">
                    <p class="text-center font-playfair text-[20px] italic px-2">«Qatay Perú nace con la misión de envolver al
                        mundo en
                        su
                        esencia. Su compromiso inquebrantable con la
                        excelencia impregna cada una de sus colecciones, ofreciendo una calidad superior. Con un enfoque en
                        la
                        elegancia, Qatay viste a la mujer con prendas que crean una armonía cautivadora en colores y
                        texturas,
                        fusionando a la perfección la innovación en sus diseños.»</p>
                </div>
                <section>
                    <div class="flex flex-col gap-y-[50px]">
                        <div class="flex  shadow-lg">
                            <div class="relative flex-1 bg-tejido-2 bg-top bg-cover flex justify-center items-center">
                                <div class="absolute inset-0 bg-black opacity-30"></div>
                                <div class="z-10">
                                    <h3 class="text-white font-playfair text-[36px] ">Misión</h3>
                                </div>
                            </div>
                            <div class="flex-1 bg-white">
                                <p class="  py-[20px] px-[50px]">
                                    <?php echo get_field('mision') ? $mision : ""; ?>
                                </p>
                            </div>
                        </div>
                        <!-- VISION -->
                        <div class="flex  shadow-lg">
                            <div class="flex-1 bg-white">
                                <p class="py-[20px] px-[50px]">
                                    <?php echo get_field('vision') ? $vision : ""; ?>

                                </p>
                            </div>
                            <div class="relative flex-1 bg-tejido-2 bg-center flex justify-center items-center">
                                <div class="absolute inset-0 bg-black opacity-30"></div>
                                <div class="z-10">
                                    <h3 class="text-white font-playfair text-[36px] ">Visión</h3>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>
            </div>
        </div>
        <section class="py-[60px] bg-stone w-full h-fit">
            <div class="flex flex-col lg:flex-row w-full items-center">
                <div class="hidden lg:flex bg-brown-light w-2/12 h-1/2 lg:min-h-[200px] xl:min-h-[300px]">

                </div>
                <div class="w-full lg:w-6/12">
                    <lite-youtube videoid="Va7AqGifX74"></lite-youtube>

                    <!-- <?php if (get_field('video')): ?>
                    <?php echo $video ?>
                <?php endif ?> -->
                </div>
                <div class="relative bg-tejido-espiral bg-cover bg-center w-full lg:w-4/12 h-full lg:h-[80%]">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="h-full py-10 flex flex-col px-[30px] justify-center">
                        <div class="flex flex-col gap-1 z-10 ">
                            <p class="text-[48px] text-white text-beauty">PRODUCTOS DE ALTA CALIDAD</p>
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
    </main>

<?php endwhile ?>
<?php get_footer() ?>