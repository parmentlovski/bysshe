<?php do_action('display_header', 'bysshe_header'); ?>

<main id="single-news" class="display-menu">
    <section class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 class="text-center text-md-left"><span><?php the_title(); ?></span></h1>

                <ul class="row">
                    <li class="col-6"><?php the_content(); ?>
                    <li class="offset-2 col-4"><?php the_post_thumbnail('medium'); ?></li>
                </ul>
                <div class="row d-flex justify-content-center">
                    <a id="return-news" href="/demo/news">Retour aux news</a>
                </div>
        <?php
            endwhile;
        endif; ?>

    </section>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>