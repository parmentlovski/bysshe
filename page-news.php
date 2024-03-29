<?php do_action( 'display_header', 'bysshe_header' ); ?>

<main id="news" class="display-menu">
    <section class="container">
    <?php $args = array(
            'pagename' => 'news'
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) : $post_query->the_post();

                    ?>
        <h1 class="text-center text-md-left"><span><?php the_title();?></span></h1>
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

                        <div class="display-news col-4">
                            <ul>
                                <li><?php the_title() ;?>
                                <li><a href="<?php the_permalink($post->ID); ?>"> <?php the_post_thumbnail('thumbnail'); ?></a></li>
                                <li><?php the_excerpt() ;?>
                            </ul>
                        </div>

            <?php
                endwhile;
            endif; ?>
        </div>

    </section>
</main>
<?php do_action( 'display_footer', 'bysshe_footer' ); ?>