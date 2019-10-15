<?php get_header(); ?>
<main id="tour" class="display-menu">
    <section class="container">

        <h2 class="text-center"> 2019 </h2>

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

                    $test = substr($date, 0, 4);

                    if ($test == '2019') :
                        ?>

                        <div class="col-6">
                            <ul class="list-tour d-flex">
                                <li id="date"><?php
                                                            echo $dateTour; ?> </li>
                                <li id="localisation"><?php
                                                                    $place = $tour['_place_tour'][0];
                                                                    $city = $tour['_city_tour'][0];
                                                                    $country = $tour['_country_tour'][0];
                                                                    echo $place . ' - <span id="city-and-country">';
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
        </div>

        <h2 class="text-center"> 2018 </h2>

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

                    $test = substr($date, 0, 4);

                    if ($test == '2018') :
                        ?>

                        <div class="col-6">
                            <ul class="list-tour d-flex">
                                <li id="date"><?php
                                                            echo $dateTour; ?> </li>
                                <li id="localisation"><?php
                                                                    $place = $tour['_place_tour'][0];
                                                                    $city = $tour['_city_tour'][0];
                                                                    $country = $tour['_country_tour'][0];
                                                                    echo $place . ' - <span id="city-and-country">';
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
        </div>

        <h2 class="text-center"> 2017 </h2>

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

                    $test = substr($date, 0, 4);

                    if ($test == '2017') :
                        ?>

                        <div class="col-6">
                            <ul class="list-tour d-flex">
                                <li id="date"><?php
                                                            echo $dateTour; ?> </li>
                                <li id="localisation"><?php
                                                                    $place = $tour['_place_tour'][0];
                                                                    $city = $tour['_city_tour'][0];
                                                                    $country = $tour['_country_tour'][0];
                                                                    echo $place . ' - <span id="city-and-country">';
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
        </div>

        <h2 class="text-center"> 2016 </h2>

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

                    $test = substr($date, 0, 4);

                    if ($test == '2016') :
                        ?>

                        <div class="col-6">
                            <ul class="list-tour d-flex">
                                <li id="date"><?php
                                                            echo $dateTour; ?> </li>
                                <li id="localisation"><?php
                                                                    $place = $tour['_place_tour'][0];
                                                                    $city = $tour['_city_tour'][0];
                                                                    $country = $tour['_country_tour'][0];
                                                                    echo $place . ' - <span id="city-and-country">';
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
        </div>

        <h2 class="text-center"> 2015 </h2>

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

                    $test = substr($date, 0, 4);

                    if ($test == '2015') :
                        ?>

                        <div class="col-6">
                            <ul class="list-tour d-flex">
                                <li id="date"><?php
                                                            echo $dateTour; ?> </li>
                                <li id="localisation"><?php
                                                                    $place = $tour['_place_tour'][0];
                                                                    $city = $tour['_city_tour'][0];
                                                                    $country = $tour['_country_tour'][0];
                                                                    echo $place . ' - <span id="city-and-country">';
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
        </div>

    </section>
</main>
<?php get_footer(); ?>