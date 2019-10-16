<?php get_header(); ?>
<main id="accueil" class="display-menu">
    <section class="d-flex flex-column">

        <div id="content-accueil">
            <div id="content-actualites">
                <div class="row">
                    <div class="news col-12 col-md-6 d-flex flex-column align-items-center">
                        <h2 class="text-center">News</h2>
                        <div style="background-image: url(wp-content/themes/bysshe/assets/img/news.jpg); background-size: 100% auto; background-position: bottom;">
                            <!-- <span class="img_hover"> -->
                            <div id="content-news">

                                <?php

                                $post = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC', // classé par ordre alphabétique
                                    'orderby' => 'date_post', // par titre
                                );

                                $post_query = new WP_Query($post);
                                if ($post_query->have_posts()) :
                                    while ($post_query->have_posts()) : $post_query->the_post();

                                        ?>
                                        <div class="list-news col-12">
                                            <a href="news">
                                                <p><?php the_title(); ?>: <?php the_excerpt(); ?></p>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>
                            <div id="content-news-smartphone">

                                <?php

                                $post = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 1,
                                    'order' => 'DESC', // classé par ordre alphabétique
                                    'orderby' => 'date_post', // par titre
                                );

                                $post_query = new WP_Query($post);
                                if ($post_query->have_posts()) :
                                    while ($post_query->have_posts()) : $post_query->the_post();

                                        ?>
                                        <div class="list-news col-12">
                                            <h2>Dernière news :</h2>
                                            <a href="news">
                                                <p><?php the_title(); ?>: <?php the_excerpt(); ?></p>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>
                            <!-- </span> -->
                        </div>
                    </div>


                    <div class="tour col-12 col-md-6 d-flex flex-column align-items-center">
                        <h2 class="text-center">Tour</h2>
                        <div style="background-image: url(wp-content/themes/bysshe/assets/img/tour.jpg); background-size: 140% auto; background-position: center;">
                            <div id="content-tour">
                                <a href="tour">


                                    <?php

                                    $post = array(
                                        'post_type' => 'tour',
                                        'posts_per_page' => 5,
                                        'order' => 'DESC', // classé par ordre alphabétique
                                    );

                                    $post_query = new WP_Query($post);
                                    if ($post_query->have_posts()) :
                                        while ($post_query->have_posts()) : $post_query->the_post();

                                            $tour = get_post_custom($post_id);

                                            $date = $tour['_date_tour'][0];

                                            $dateTour = date_i18n(get_option('date_format'), strtotime($date));

                                            ?>
                                            <ul class="list-tour col-12 d-flex">
                                                <li><?php echo $dateTour; ?> </li>
                                                <li><?php
                                                            echo $tour['_place_tour'][0] . ' - ';
                                                            echo $tour['_city_tour'][0]; ?>
                                                </li>
                                            </ul>
                                    <?php
                                        endwhile;
                                    endif; ?>
                                </a>
                            </div>

                            <div id="content-tour-smartphone">
                                <a href="tour">


                                    <?php

                                    $post = array(
                                        'post_type' => 'tour',
                                        'posts_per_page' => 1,
                                        'order' => 'DESC', // classé par ordre alphabétique
                                    );

                                    $post_query = new WP_Query($post);
                                    if ($post_query->have_posts()) :
                                        while ($post_query->have_posts()) : $post_query->the_post();

                                            $tour = get_post_custom($post_id);

                                            $date = $tour['_date_tour'][0];

                                            $dateTour = date_i18n(get_option('date_format'), strtotime($date));

                                            ?>
                                            <h2>Prochaine date :</h2>
                                            <ul class="list-tour col-12 d-flex">
                                                <li><?php echo $dateTour; ?> </li>
                                                <li><?php
                                                            echo $tour['_place_tour'][0] . ' - ';
                                                            echo $tour['_city_tour'][0]; ?>
                                                </li>
                                            </ul>
                                    <?php
                                        endwhile;
                                    endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<?php get_footer(); ?>