<?php
/*
Template Name: Page news
*/
?>

<?php do_action('display_header', 'bysshe_header'); ?>

<main id="news" class="display-menu">
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
        <?php
            endwhile;
        endif; ?>

        <div class="row">

            <?php
            $post = array(
                'post_type' => 'news',
                'posts_per_page' => -1,
                'order' => 'DESC', // classé par ordre alphabétique
            );

            $post_query = new WP_Query($post);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();

                    ?>

                    <div class="display-news col-12 col-md-4">
                        <a href="<?php the_permalink($post->ID); ?>" class="d-flex justify-content-center align-items-center" style="background-size:100%; background-repeat: no-repeat; background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
                            <p class="title-news"><?php the_title(); ?>
                            </p>
                        </a>
                    </div>

            <?php
                endwhile;
            endif; ?>
        </div>

    </section>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>