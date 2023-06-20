<footer class="footer">
    <div class="container footer__content">
        <div class="footer__content__brand">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>\assets\img\main-logo.png" alt="logo qatay"></a>
            <p>Somos una empresa peruana ubicada en cusco, junto a nuestras mujeres emprendedoras producimos prendas de baby alpaca y accesorios. </p>
        </div>
        <div class="footer__content__menu">

            <div class="">
                <h3>Explore</h3>
                <?php 
                    $args=array(
                        'theme_location' => 'menu-explore',
                        'items_wrap' => '<ul>%3$s</ul>'
                    );
                    wp_nav_menu($args);
                ?>
                
            </div>
            <div class="">
                <h3>
                    <?php if(get_locale()=='en_US'): ?>
                        Follow Us
                    <?php else: ?>
                        Siguenos
                    <?php endif ?>
                    
                </h3>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/qatayperu">Facebook</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/qatayperu/">Instagram</a></li>
                    
                </ul>
            </div>
            <div class="">
                <h3>
                    <?php if(get_locale()=='en_US'): ?>
                        Privacy
                    <?php else: ?>
                        Politicas
                    <?php endif ?>
                    
                </h3>
                <?php 
                    $args=array(
                        'theme_location' => 'menu-politicas',
                        'items_wrap' => '<ul>%3$s</ul>'
                    );
                    wp_nav_menu($args);
                ?>
                
            </div>
        </div>
        

    </div>
        <div class="copyright">    
            <p>Todos los derechos reservados. <?php echo get_bloginfo("name")." ".date('Y') ?></p>
        </div>
    
</footer>
<?php wp_footer(); ?>



</body>
</html>