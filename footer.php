<footer class="footer">
    <div class="flex flex-col lg:flex-row  gap-y-[30px] gap-x-[50px] lg:justify-center text-white py-[40px] px-[20px]">
        <div
            class="w-full lg:w-1/3 flex flex-col gap-3 border-b-2 pb-5 lg:border-b-0 lg:pr-[50px] lg:border-r border-white">
            <div class="flex justify-center">
                <a href="" class="h-[60px]"><img
                        src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png"
                        alt="logo qatay"></a>
            </div>
            <p class="text-[11px] text-center text-white">Somos una empresa peruana ubicada en cusco, junto a nuestras
                mujeres emprendedoras producimos prendas de
                baby alpaca y accesorios. </p>
        </div>

        <div
            class="flex flex-col gap-5 items-center border-b-2 pb-5 lg:border-b-0 lg:pr-[50px] lg:border-r border-white">
            <h3 class="font-dancing">Contáctenos</h3>
            <ul class="text-center">
                <li><i class="fas fa-map-marker-alt mr-1"></i><a target="_blank" class=" text-white text-[16px]"
                        href="https://www.instagram.com/qatayperu/">CUSCO, PERU</a>
                </li>
                <li><i class="fas fa-mobile-alt mr-1"></i><a target="_blank" class=" text-white text-[16px]"
                        href="https://www.facebook.com/qatayperu">+51 999 999</a>
                </li>
                <li><i class="far fa-envelope mr-1"></i><a target="_blank" class=" text-white text-[16px]"
                        href="https://www.instagram.com/qatayperu/">info@qatayastore.com</a></li>

            </ul>

        </div>
        <div
            class="flex flex-col gap-5 items-center border-b-2 pb-5 lg:border-b-0 lg:pr-[50px] lg:border-r border-white">
            <h3 class="font-dancing">
                Explora

            </h3>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/qatayperu">Inicio</a></li>
                <li><a target="_blank" href="https://www.instagram.com/qatayperu/">Nosotros</a></li>
                <li><a target="_blank" href="https://www.instagram.com/qatayperu/">Colecciones</a></li>
                <li><a target="_blank" href="https://www.instagram.com/qatayperu/">Contáctenos</a></li>

            </ul>
        </div>
        <div class="flex flex-col gap-5 items-center">
            <h3 class="font-dancing">
                Síguenos en

            </h3>
            <div class="flex gap-4">
                <a target="_blank" href="https://www.facebook.com/qatayperu"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a target="_blank" href="https://www.instagram.com/qatayperu/"><i class="fab fa-youtube fa-2x"></i></a>
                <a target="_blank" href="https://www.instagram.com/qatayperu/"><i class="fab fa-instagram fa-2x"></i></a>

            </div>


        </div>


    </div>
    <div class="bg-[#A6815C] pt-4 pb-8 flex justify-center">
        <p class="text-white text-[20px]">copyright © <?php echo date('Y') . " - " . get_bloginfo("name") ?></p>
        <p></p>
    </div>

</footer>
<?php wp_footer(); ?>



</body>

</html>