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

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.5.0/lite-youtube.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gris: '#ECECEC',
                        'brown-light': '#CCA57E',

                    },
                    backgroundImage: {
                        tejido: "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-tejido.webp')",
                        'tejido-espiral': "url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/tejido_espiral.jpg')",
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
    <?php
    $args2 = array(
        'theme_location' => 'menu-principal',
        'container' => '',
        'menu_id' => 'slide-out',
        'menu_class' => 'sidenav',
        // 'items_wrap' => '<ul class="sidenav collapsible" id="%1$s">%3$s</ul>'
    );

    wp_nav_menu($args2);
    ?>

    <header>
        <!-- Dropdown Structure -->

        <!-- <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a class="brand-logo " ><img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png" alt="logo qataya">
                </a>
                <a href="#" data-target="slide-out" class="top-nav right sidenav-trigger"><i class="fas fa-bars fa-2x"></i></a>
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => '',
                    'menu_id' => 'main-menu',
                    'menu_class' => 'right hide-on-med-and-down '
                );
                wp_nav_menu($args);
                ?>
            </div>
        </nav>
    </div> -->

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a class="brand-logo "><img class="responsive-img"
                            src="<?php echo get_template_directory_uri(); ?>\assets\img\logo-qataya.png"
                            alt="logo qataya">
                    </a>
                    <a href="#" data-target="slide-out" class="top-nav right sidenav-trigger"><i
                            class="fas fa-bars fa-2x"></i></a>
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => '',
                        'menu_id' => 'main-menu',
                        'menu_class' => 'right hide-on-med-and-down '
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </nav>
        </div>

    </header>