<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    
    <?php 
        if (get_field('portada_1')) $portada1 = get_field('portada_1');
        if (get_field('abstract')) $abstract = get_field('abstract');
        if (get_field('imagen_taller')) $imagen_taller = get_field('imagen_taller');
        if (get_field('catalogo1')) $catalogo1 = get_field('catalogo1');
        if (get_field('catalogo2')) $catalogo2 = get_field('catalogo2');
        if (get_field('catalogo3')) $catalogo3 = get_field('catalogo3');
        if (get_field('video')) $video = get_field('video');

        // Use preg_match to find iframe src.
        preg_match('/src="(.+?)"/', $video, $matches);
        $src = $matches[1];

        // Add extra parameters to src and replace HTML.
        $params = array(
            'controls'  => 0,
            'rel'=> 0,
            'showinfo'=> 0
        );
        $new_src = add_query_arg($params, $src);
        $video = str_replace($src, $new_src, $video);
        

    ?>
     <div class="slider hero-home">
        <ul class="slides">
            <li>
                <img src="<?php echo $portada1['url'] ?>"> 
                <!-- <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div> -->
            </li>
        </ul>
    </div>
    <section>
        <div class="container about-us">
            <p>
                <?php 
                echo $abstract
                ?>
            </p>
        </div>
    </section>
    <section>
        <div class="collections container row">
            <div class="col s12 m4">
                <div class="card z-depth-0">
                    <div class="card-image collection-image">
                        <a href="<?php echo get_site_url() ?>/coleccion-deep-in-nature/"><img class="responsive-image" src="<?php  echo $catalogo1['imagen1']['url'] ; ?>" alt=""></a> 
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
                        <a href="<?php echo get_site_url() ?>/coleccion-ocaso/"><img class="responsive-image" src="<?php  echo $catalogo2['imagen1']['url'] ; ?>" alt=""></a> 
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
                        <a href="<?php echo get_site_url() ?>/coleccion-happy-life/"><img class="responsive-image" src="<?php  echo $catalogo3['imagen1']['url'] ; ?>" alt=""></a> 
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
    </section>
    <section>
        <div class="video-container container">
            <?php if(get_field('video')): ?>
                <?php echo $video ?>
            <?php endif ?>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>
                <?php if(get_locale()=='en_US'): ?>
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
                    <?php if(get_locale()=='en_US'): ?>
                        THREADS OF HISTORY: THE GRAND TRADITION OF THE ART OF SILK
                    <?php else: ?>
                        THREADS OF HISTORY: THE GRAND TRADITION OF THE ART OF SILK
                    <?php endif ?>
                </h2>
                <p>
                    <?php echo $abstract ?>
                    <p>
                        
                    <a href="">
                        <?php if(get_locale()=='en_US'): ?>
                            Discover more
                        <?php else: ?>
                            Ver mas
                        <?php endif ?>
                    </a>
                    </p>
                </p>
            </div>
            <div class="abstract__img">
                <img src="<?php if (get_field('imagen_taller')) echo $imagen_taller['url'] ?>" alt="">
            </div>
        </div>
    </section> -->
    
    
<?php endwhile; ?>
<?php get_footer() ?>