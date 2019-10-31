<?php
/*
Template Name: Page bio
*/
?>
<?php get_header(); ?>
<main id="bio" class="display-menu">

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


                <div class="row content-bio">

                    <?php the_content(); ?>

                </div>
        <?php
            endwhile;
        endif; ?>

        <div class="row content-groupe">
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-between member-groupe">
                <img class="img-fluid" src="wp-content/themes/bysshe/assets/img/quentin.png" alt="Photo de Quention Aymonier"> <!-- width="960" height="640" -->
                <ul class="d-flex flex-column justify-content-center">
                    <li>Aymonier</li>
                    <li>Quentin</li>
                    <li>Guitare et chant</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-between member-groupe">
                <img class="img-fluid" src="wp-content/themes/bysshe/assets/img/fernand.png" alt="Photo de Fernand"> <!--  width="867" height="578" -->
                <ul class="d-flex flex-column justify-content-center">
                    <li>Bulle-Piourot</li>
                    <li>Fernand</li>
                    <li>Batterie</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-between member-groupe">
                <ul class="d-flex flex-column justify-content-center">
                    <li>Maradan</li>
                    <li>Elodie</li>
                    <li>Chant et clavier</li>
                </ul>
                <img class="img-fluid" src="wp-content/themes/bysshe/assets/img/elodie.png" alt="Photo d'Elodie"> <!--  width="867" height="578" -->
            </div>

            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-between member-groupe">
                <ul class="d-flex flex-column justify-content-center">
                    <li>Aymonier</li>
                    <li>Théo</li>
                    <li>Basse et lyrics</li>
                </ul>
                <img class="img-fluid" src="wp-content/themes/bysshe/assets/img/theo.png" alt="Photo de Théo Aymonier"> <!-- width="640" height="960" -->
            </div>
        </div>

    </section>

</main>
<?php get_footer(); ?>