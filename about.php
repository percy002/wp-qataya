<?php 
/*
    Template Name: pagina nosotros
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="hero-secondary" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <?php 
        if(get_field('mision')) $mision=get_field('mision');
        if(get_field('vision')) $vision=get_field('vision');
        if(get_field('valores')) $valores=get_field('valores');
    ?>
    <section>
        <div class="about container">
        </div>
    </section>
    <section>
        <div class="mision-vision container sub-h3">
            <div class="text-justify">  
                <?php if(get_locale()=='en_US'): ?>
                    <h3>MISSION</h3>
                <?php else: ?>
                    <h3>MISION</h3>
                <?php endif ?>
                          
                <p><?php echo get_field('mision')?  $mision : ""; ?></p>
            </div>
            <!-- VISION -->
            <div class="text-justify">
                <?php if(get_locale()=='en_US'): ?>
                    <h3>VISION</h3>
                <?php else: ?>
                    <h3>VISION</h3>
                <?php endif ?>
                <p><?php echo get_field('vision')?  $vision : ""; ?></p>
            </div>
        </div>
        <div class="valores container sub-h3">
            <div class="text-center ">
            <?php if(get_locale()=='en_US'): ?>
                <h3>VALUES</h3>
            <?php else: ?>
                <h3>VALORES</h3>
            <?php endif ?>
                <p><?php echo get_field('valores')?  $valores : ""; ?></p>
            </div>
        </div>
        
    </section>

<?php endwhile ?>
<?php get_footer() ?>