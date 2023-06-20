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
        
        <div class="listProducts">
            <?php while($products->have_posts()): $products->the_post(); ?>
                <?php 
                    $main_image=get_field("imagenes");
                    $productName=get_field('nombre_producto');
                    $details = get_field("descripcion");
                ?>
                
                <div class="listProducts__und card">
                    <div class="listProducts__und__img">
                        <a href="<?php echo get_permalink() ?>">
                            <img class="" src="<?php echo $main_image['imagen1']['url'] ?>" alt="">
                    
                        </a>
                    </div>
                    <div class="listProducts__und__details">
                        <a href="<?php echo get_permalink() ?>">
                            <h3><?php echo $productName ?></h3>
                        </a>
                    </div>
                </div>
                <?php wp_reset_postdata() ?>
            <?php endwhile ?>
        </div>


<?php } ?>

<?php function list_products_taxonomy($taxonomy="",$cantidad="6"){?>
        <?php 
            $args=array(
                "post_type"=>"products",
                // 'post-page' => $cantidad,//cantidad de tours recuperados
                'orderby' => 'modified',
                'taxonomy'=> $taxonomy
            ) ;
            $products = new WP_Query($args);   
            
        ?>
        
        <div class="listProducts">
            <?php while($products->have_posts()): $products->the_post(); ?>
                <?php 
                    $main_image=get_field("imagenes");
                    $productName=get_field('nombre_producto');
                    $details = get_field("descripcion");
                ?>
                
                <div class="listProducts__und card">
                    <div class="listProducts__und__img">
                        <a href="<?php echo get_permalink() ?>">
                            <img class="" src="<?php echo $main_image['imagen1']['url'] ?>" alt="">
                    
                        </a>
                    </div>
                    <div class="listProducts__und__details">
                        <a href="<?php echo get_permalink() ?>">
                            <h3><?php echo $productName ?></h3>
                        </a>
                    </div>
                </div>
                <?php wp_reset_postdata() ?>
            <?php endwhile ?>
        </div>


<?php } ?>