<?php
/*
Template Name: Page cgv
*/
?>
<?php do_action( 'display_header', 'bysshe_header' ); ?>
<main id="cgv" class="display-menu">
<?php $pagename = get_query_var('pagename');

$args = array(
    'pagename' => $pagename
);
$post_query = new WP_Query($args);

if ($post_query->have_posts()) :
    while ($post_query->have_posts()) : $post_query->the_post();

        ?>
        <section class="container">
            <h1 class="text-center text-md-left"><?php the_title(); ?></h1>

            <div class="row">
                <div><?php the_content(); ?></div>
            </div>
        </section>
<?php
    endwhile;
endif; ?>
</main>
<?php do_action('display_footer', 'bysshe_footer'); ?>