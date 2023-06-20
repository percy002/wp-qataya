<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    
    <?php 
        if (get_field('portada_1')) $portada1 = get_field('portada_1');
        if (get_field('abstract')) $abstract = get_field('abstract');
        if (get_field('imagen_taller')) $imagen_taller = get_field('imagen_taller');
        if (get_field('catalogo1')) $catalogo1 = get_field('catalogo1');
        if (get_field('catalogo2')) $catalogo2 = get_field('catalogo2');

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
            <!-- <h1>QATAYA</h1> -->
        </div>
    </section>
    <section>
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
    </section>
    <?php if (get_field('catalogo1')) : ?>
    <section>
        <div class="catalogo container">
            <div class="catalogo__img double">
                <a href="http://qataya.test/es/ponchos/"><span><?php echo $catalogo1['titulo'] ; ?></span><img class="responsive-image" src="<?php  echo $catalogo1['imagen1']['url'] ; ?>" alt=""></a>                                
                <a href="http://qataya.test/es/ponchos/"><img class="responsive-image" src="<?php  echo $catalogo1['imagen2']['url'] ; ?>" alt=""></a>                                
                                               
            </div>
            <div class="catalogo__description bg-grey">
                <h3><?php echo $catalogo1['titulo'] ; ?></h3>                    
                <p><?php echo $catalogo1['descripcion'] ; ?>
                </p>
                <p>
                    <a href="http://qataya.test/es/ponchos/">
                        <?php if(get_locale()=='en_US'): ?>
                            Discover more
                        <?php else: ?>
                            Ver mas
                        <?php endif ?>
                    </a>

                </p>
            </div>
            
        </div>
    </section>
    <section>
        <div class="catalogo container">
            <div class="catalogo__img double">
                <a href="http://qataya.test/es/sueter/"><span><?php echo $catalogo2['titulo'] ; ?></span><img class="responsive-image" src="<?php  echo $catalogo2['imagen1']['url'] ; ?>" alt=""></a>                                
                <a href="http://qataya.test/es/sueter/"><img class="responsive-image" src="<?php  echo $catalogo2['imagen2']['url'] ; ?>" alt=""></a>                                
                                               
            </div>
            
            <div class="catalogo__description bg-grey">
                <h3><?php echo $catalogo2['titulo'] ; ?></h3>                    
                <p><?php echo $catalogo2['descripcion'] ; ?>
                </p>
                <p>
                    <a href="http://qataya.test/es/sueter/">
                        <?php if(get_locale()=='en_US'): ?>
                            Discover more
                        <?php else: ?>
                            Ver mas
                        <?php endif ?>
                    </a>

                </p>
            </div>
        </div>
    </section>
    <?php endif ?>
    
<?php endwhile; ?>
<?php get_footer() ?>