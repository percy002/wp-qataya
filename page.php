<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <h2><?php the_title(); ?></h2>

            
        </div>
    </div>
    <div class="contenedor">

    </div>
<?php endwhile ?>