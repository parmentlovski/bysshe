<?php
/*
Template Name: Page accueil
*/
?>

<?php do_action('display_header', 'bysshe_header'); ?>

<main id="accueil" class="display-menu">
    <section class="d-flex flex-column">

        <div id="content-accueil">
            <!-- begining accueil  -->
            <div id="content-actualites">
                <div class="row">
                    <div class="news col-12 col-lg-6 d-flex flex-column align-items-center">
                        <!-- begining news  -->

                        <a href="news">
                            <h2 class="text-center">News</h2>
                        </a>

                        <div style="background-image: url(wp-content/themes/bysshe/assets/img/news.jpg); background-size: 100% auto;">
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
                                            <a href="<?php the_permalink(); ?>">
                                                <p><?php the_title(); ?>: <?php the_excerpt(); ?></p>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>

                            <!-- </span> -->
                        </div>
                    </div> <!-- end news  -->


                    <div class="tour col-12 col-lg-6 d-flex flex-column align-items-center">
                        <!-- begining tour  -->

                        <a href="tour">
                            <h2 class="text-center">Tour</h2>
                        </a>
                        <div style="background-image: url(wp-content/themes/bysshe/assets/img/tour.jpg); background-size: 140% auto; background-position: center;">

                        <div id="content-tour">
                            <a href="tour">
                                <?php

                                $post = array(
                                    'post_type' => 'tour',
                                    'posts_per_page' => 5,
                                    'order' => 'DESC', // classé par ordre alphabétique
                                    'orderby' => 'meta_value',
                                    'meta_key' => '_date_tour'
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
                    </div>
                </div> <!-- end tour  -->
            </div>
        </div>

        </div> <!-- end header  -->

    </section>

</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>