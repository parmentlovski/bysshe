<?php get_header(); ?>
<main id="video" class="display-menu">
    <section class="container">
    <?php $args = array(
            'pagename' => 'video'
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

            <?php $post = array(
                'post_type' => 'video',
                'posts_per_page' => -1,
                'order' => 'DESC', // classé par ordre alphabétique
            );

            $post_query = new WP_Query($post);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();

                    $bdd = get_post_custom($post_id);

                    $video = $bdd['_video'][0];

                    ?>
    <iframe class="col-12 col-md-6"
src="<?php echo $video ;?>" allowfullscreen="allowfullscreen">
</iframe> 

            <?php
                endwhile;
            endif; ?>

</div>
    </section>
</main>
<?php do_action( 'display_footer', 'bysshe_footer' ); ?>