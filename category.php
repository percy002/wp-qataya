<?php 
/*
    Template Name: pagina categoria
*/
get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    <?php 
        $category=get_field('category_name')
    ?>
    <h1 class="categoryTitle"><?php echo the_title() ?></h1>
    <section>

        <div class="container">
            <?php list_products($category,6) ?>
        </div>
    </section>
<?php endwhile ?>
<?php get_footer() ?>