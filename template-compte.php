<?php
/*
Template Name: Page compte
*/
?>

<?php do_action('display_header', 'bysshe_header'); ?>

<main id="compte" class="display-menu">
    <section class="container">

        <?php $pagename = get_query_var('pagename');

        $args = array(
            'pagename' => $pagename
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) : $post_query->the_post();

                ?>
                <h1 class="text-center text-md-left"><span><?php the_title(); ?></span></h1>
                <ul id="menu-shop">
                    <li><a href="boutique"><i class="fas fa-store"><span>Boutique</span></i></a></li>
                    <li><a href="panier"><i class="fas fa-shopping-basket"><span>Panier</span></i></a></li>
                </ul>
        <?php
            endwhile;
        endif; ?>

        <div class="row content-compte">
            <?php the_content(); ?>
        </div>
    </section>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>