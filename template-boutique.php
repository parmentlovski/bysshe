<?php
/*
Template Name: Page boutique
*/
?>

<?php do_action( 'display_header', 'bysshe_header' ); ?>

<main id="boutique" class="display-menu">

    <section class="container">
        <?php $args = array(
            'pagename' => 'boutique'
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) : $post_query->the_post();

                ?>
                <h1 class="text-center text-md-left"><span><?php the_title(); ?></span></h1>
                <ul id="menu-shop">
                    <li><a href="panier">Panier</a></li>
                    <li><a href="validation">Valider commande</li>
                </ul>
        <?php
            endwhile;
        endif; ?>

        <ul class="row"><?php
                $args = array(
                    'posts_per_page' => -1,
                    'product_cat' => 'products',
                    'post_type' => 'product',
                );
                $the_query = new WP_Query($args);
                // The Loop
                while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <li class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <h3>
                        
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <?php the_post_thumbnail(); ?>
                    <a class="buy" href="<?php the_permalink(); ?>"><span>Voir produit</span></a>
             
                </li> <?php 
                }
                wp_reset_postdata(); ?>
        </ul>


    </section>
</main>
<?php do_action( 'display_footer', 'bysshe_footer' ); ?>