<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <script src="https://kit.fontawesome.com/841e236107.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.5.0/lite-youtube.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gris: '#ECECEC',
                        'grey-menu': '#545C63',
                        'brown-light': '#CCA57E',
                        primary: '#758C7C',
                        'black-30': 'rgba(0,0,0,0.3)',

                    },
                    backgroundImage: {
                        tejido: "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-tejido.webp')",
                        'tejido-espiral': "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/tejido_espiral.jpg')",
                        'contacto': "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-contacto.jpg')",
                        'lana': "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-lana.jpg')",
                        stone: "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/stone.webp')",
                    },
                    fontFamily: {
                        dancing: ['"Dancing Script"', 'sans-serif'],
                    },

                }
            }
        }
    </script>

    <?php wp_head(); ?>
</head>

<body>
    <div id="slide"
        class="fixed w-full lg:w-1/2 top-0 right-0 h-screen bg-stone z-[999] backface-hidden will-change transform transition-transform duration-300 ease-in-out translate-x-full h-screen flex flex-col justify-center">
        <div class=" flex flex-col justify-center gap-y-[20px] h-full pl-[30px] md:p-[50px]">
            <div class="flex justify-center">
                <a class=""><img class="responsive-img h-[40px]"
                        src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png" alt="logo qataya">
                </a>
            </div>
            <?php
            $args2 = array(
                'theme_location' => 'menu-principal',
                'container' => '',
                'menu_class' => 'flex flex-col justify-center gap-y-[20px]',
            );

            wp_nav_menu($args2);
            ?>
        </div>
    </div>

    <header>

        <div class="fixed z-20">
            <div class="w-screen flex justify-between px-20 py-4 items-center">
                <div class="">
                    <a class="brand-logo "><img class="responsive-img"
                            src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya-blanco.png"
                            alt="logo qataya">
                    </a>
                </div>
                <div class="">
                    <a href="#" id="menu-toggle" class="text-white"><i class="fas fa-bars fa-2x"></i></a>
                </div>
            </div>
        </div>
    </header>

    <div id="menu-overlay" class="fixed inset-0 bg-black opacity-50 hidden z-10"></div>


    <script type="module">
        document.getElementById('menu-toggle').addEventListener('click', function () {
            event.preventDefault(); // Prevenir el comportamiento predeterminado

            const menu = document.getElementById('slide');
            const overlay = document.getElementById('menu-overlay');
            const body = document.body;

            menu.classList.toggle('translate-x-full');
            menu.classList.toggle('translate-x-0');
            overlay.classList.toggle('hidden');
            body.classList.toggle('overflow-hidden');

        });

        document.getElementById('menu-overlay').addEventListener('click', function () {
            event.preventDefault(); // Prevenir el comportamiento predeterminado

            const menu = document.getElementById('slide');
            const overlay = document.getElementById('menu-overlay');
            const body = document.body;

            menu.classList.add('translate-x-full');
            menu.classList.remove('translate-x-0');
            overlay.classList.add('hidden');
            body.classList.remove('overflow-hidden');

        });

        document.getElementById('slide').insertAdjacentHTML('afterbegin', '<button id="menu-close" class="absolute top-8 right-8 text-black cursor-pointer"><i class="fas fa-times fa-2x text-primary"></i></button>');

        document.getElementById('menu-close').addEventListener('click', function () {
            event.preventDefault(); // Prevenir el comportamiento predeterminado

            const menu = document.getElementById('slide');
            const overlay = document.getElementById('menu-overlay');
            const body = document.body;

            menu.classList.add('translate-x-full');
            menu.classList.remove('translate-x-0');
            overlay.classList.add('hidden');
            body.classList.remove('overflow-hidden');

        });

        document.addEventListener('DOMContentLoaded', function () {
            const submenuParents = document.querySelectorAll('.menu-item-has-children > a');

            console.log(submenuParents);
            
            submenuParents.forEach(parent => {
                parent.addEventListener('click', function (event) {
                    event.preventDefault();
                    const submenu = parent.nextElementSibling;
                    console.log(submenu);
                    
                    submenu.classList.toggle('show');
                });
            });
        });
        const submenuParents = document.querySelectorAll('.menu-item-has-children');
        submenuParents.forEach(parent => {
            const link = parent.querySelector('a');
            link.classList.add('flex', 'gap-8', 'items-center');
            if (link) {
                const icon = document.createElement('i');
                icon.className = 'fas fa-caret-down';
                link.appendChild(icon);
            }
        });
    </script>