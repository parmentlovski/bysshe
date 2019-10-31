<?php
/*
Template Name: Page tour
*/
?>

<?php do_action('display_header', 'bysshe_header'); ?>

<main id="tour" class="display-menu">

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
        endif;



        ?>
        <?php 
        
        // $cats = get_terms('category');

        $cats = get_terms( array(
        'taxonomy'   => 'category',
        'orderby'    => 'name',
        'order'      => 'DESC',
        'hide_empty' => true
        ) );

        foreach ($cats as $cat) : ?>


            <h2 class="text-center"><?php echo $cat->name; ?></h2> <!-- yields correct category name -->
            <div class="row">

                <?php

                    $post = array(
                        'post_type' => 'tour',
                        'posts_per_page' => -1,
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

                            $year = substr($date, 0, 4);

                            if ($year == $cat->name) :
                                ?>

                            <div class="col-12 col-lg-6 effect-tour">
                                <ul class="list-tour d-flex flex-column flex-md-row">
                                    <li id="date"><?php
                                                                    echo $dateTour; ?> </li>
                                    <li id="localisation" class="d-flex flex-column flex-md-row"><?php
                                                                                                                    $place = $tour['_place_tour'][0];
                                                                                                                    $city = $tour['_city_tour'][0];
                                                                                                                    $country = $tour['_country_tour'][0];
                                                                                                                    echo $place . ' <span class="separate">-</span> <span id="city-and-country">';
                                                                                                                    echo $city . ' , ';
                                                                                                                    echo $country . '</span>'; ?>
                                    </li>
                                    <li><a id="informations" href="<?php echo $tour['_informations_tour'][0]; ?>" target="_blank"><span>+ INFOS</span></a></li>
                                </ul>
                            </div>

                <?php
                            endif;

                        endwhile;
                    endif; ?>
            </div> <?php
                    endforeach ?>
        </div>

        </div>

    </section>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>