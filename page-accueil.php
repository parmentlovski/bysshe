<?php get_header(); ?>
<main id="accueil" class="display-menu">
    <section class="d-flex flex-column">

        <div id="content-accueil">
            <div id="content-actualites">
                <div class="row">
                    <div class="news col-6 d-flex flex-column align-items-center">
                        <h2 class="text-center">News</h2>
                        <a href="news">
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
                                            <p><?php the_title(); ?>: <?php the_excerpt(); ?></p>
                                        </div>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>
                            <!-- </span> -->
                        </a>
                    </div>


                    <div class="tour col-6 d-flex flex-column align-items-center">
                        <h2 class="text-center">Tour</h2>
                            <div id="content-tour">
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
   
                                        ?>
                                        <ul class="list-tour col-12 d-flex">
                                            <li><?php echo $tour['_date_tour'][0]; ?> </li>
                                            <li><?php echo $tour['_place_tour'][0]; ?> </li>
                                            <li><?php echo $tour['_city_tour'][0]; ?> </li>
                                            <li><?php echo $tour['_country_tour'][0]; ?> </li>
                                            <li><a href="<?php echo $tour['_informations_tour'][0]; ?>" target="_blank">+ INFOS</a></li>
                                        </ul>
                                <?php
                                    endwhile;
                                endif; ?>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<?php get_footer(); ?>