<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'display_header', 'bysshe_header' ); ?>


<main class="display-menu">
<section class="container content-product">

<?php    if (have_posts()) :
            while (have_posts()) : the_post();

                ?>
				<h1 class="text-center text-md-left"><span>Produits	</span></h1>
                <ul id="menu-shop">
                    <li><a href="../boutique">Boutique</a></li>
                    <li><a href="../panier">Panier</a></li>
                    <li><a href="../validation">Valider commande</li>
                </ul>
        <?php
            endwhile;
        endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>


		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
</section>

</main>
<?php do_action( 'display_footer', 'bysshe_footer' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
