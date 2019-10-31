<?php
/*
Template Name: Page music
*/
?>

<?php do_action('display_header', 'bysshe_header'); ?>

<main id="music" class="display-menu">
    <section class="container">
        <?php $pagename = get_query_var('pagename');

        $args = array(
            'pagename' => $pagename
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) : $post_query->the_post();

                ?>
                <h1 class="text-center text-md-left"><span><?php the_title(); ?></span></h1>
        <?php
            endwhile;
        endif; ?>

        <div class="row">
            <iframe class="col-12 col-lg-9" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&#038;url=https%3A%2F%2Fapi.soundcloud.com%2Fusers%2F153893005&#038;show_artwork=true&#038;maxwidth=1260&#038;maxheight=1000&#038;dnt=1">

            </iframe>

            <div class="content-music col-12 col-lg-3 d-flex flex-column justify-content-around">
                <div id="streaming">
                    <h2>Streaming</h2>
                    <ul>
                        <li>
                            <a href="https://www.deezer.com/fr/album/71535362" target="_blank">Deezer</a>
                        </li>
                        <li>
                            <a href="https://open.spotify.com/album/2CjCkB7hY1OsI0kcTXcRp5" target="_blank">Spootify</a>
                        </li>
                        <li>
                            <a href="https://us.napster.com/artist/bysshe/album/clouds-326313466" target="_blank">Naster</a>
                        </li>
                        <li>
                            <a href="https://tidal.com/browse/album/94087537" target="_blank">Tidal</a>
                        </li>
                    </ul>
                </div>


                <div id="download">
                    <h2>Télécharger</h2>
                    <ul>
                        <li>
                            <a href="https://www.amazon.com/gp/product/B07GTDKPQ9/?tag=distrokid06-20" target="_blank">Amazon</a>
                        </li>
                        <li>
                            <a href="https://music.apple.com/us/album/clouds/1434116136?app=music&ign-mpt=uo%3D4" target="_blank">Itunes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>