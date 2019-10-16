<?php get_header(); ?>
<main id="news" class="display-menu">
    <section class="container">

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

                        <div class="display-news col-12">
                            <ul>
                                <li><?php the_title() ;?>
                                <li><?php the_excerpt() ;?>
                                <li><?php the_content() ;?>
                            </ul>
                        </div>

            <?php
                endwhile;
            endif; ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>