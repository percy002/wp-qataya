<?php function list_products($category="",$cantidad="6"){?>
        <?php 
            $args=array(
                "post_type"=>"products",
                'post-page' => $cantidad,//cantidad de tours recuperados
                'orderby' => 'modified',
                'category_name'=> $category
            ) ;
            $products = new WP_Query($args);   
            
        ?>
        
        <div class="row">
            <?php while($products->have_posts()): $products->the_post(); ?>
                <?php 
                    $main_image=get_field("imagenes");
                    $productName=get_field('nombre_producto');
                    $details = get_field("descripcion");
                ?>
                <div class="col s12 m3">

                    <div class="card">
                        <div class="card-image">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="" src="<?php echo $main_image['imagen1']['url'] ?>" alt="">
                        
                            </a>
                        </div>
                        <div class="card-content">
                            <a href="<?php echo get_permalink() ?>">
                                <h4><?php echo $productName ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        </div>


<?php } ?>

<?php function list_products_taxonomy($collection=""){?>
        <?php 
            $args=array(
                "post_type"=>"products",
                'posts_per_page' => -1, 
                'orderby' => 'modified',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'collection', // Reemplaza 'nombre_de_la_taxonomia' por el nombre de tu taxonomía personalizada
                        'field' => 'slug', // Puedes usar 'term_id', 'slug' o 'name' como campo de comparación
                        'terms' => $collection->slug, // Reemplaza 'nombre_del_termino' por el término específico de la taxonomía que deseas consultar
                    ),
                ),
                
            ) ;
            $products = new WP_Query($args);   
            
        ?>
        <?php if($products->have_posts()): ?>
            <div class="row">
                <div class="col s12">
                    <div class="row">

                        <?php while($products->have_posts()): $products->the_post(); ?>
                            <?php 
                                $main_image=get_field("imagenes");
                                $productName=get_field('nombre_producto');
                                $details = get_field("descripcion");
                            ?>
                            <div class="col s12 m3">
                                <div class="card center-align">
                                    <div class="card-img">
                                        <a href="<?php echo get_permalink() ?>">
                                            <img class="" src="<?php echo $main_image['imagen1']['url'] ?>" alt="">
                                    
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <?php if($productName): ?>
                                            <a href="<?php echo get_permalink() ?>">
                                                <h5><?php echo $productName ?></h5>
                                                <h4>Colección <?php echo $collection->name ?></h4>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
        
                            </div>
                        <?php endwhile ?>
                        <?php wp_reset_postdata() ?>
                    </div>

                </div>
            </div>
        <?php else: ?>
        <p>no se encontro nada</p>
    <?php endif ?>


<?php } ?>