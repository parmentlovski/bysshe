<?php get_header(); ?>
<main class="display-menu">

    <section class="container">

        <?php 
        $pagename = get_query_var('pagename');

        $args = array(
            'pagename' => $pagename
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) : $post_query->the_post();

                ?>
                <h1 class="text-center text-md-left"><span><?php the_title(); ?></span></h1>


                <div class="row">

                    <?php the_content(); ?>

                </div>
        <?php
            endwhile;
        endif; ?>


    </section>

</main>
<?php get_footer(); ?>