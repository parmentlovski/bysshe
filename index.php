<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Bysshe
 * @since Bysshe 1.0
 */
?>

<?php 

if ( is_front_page()) {
 get_header('frontpage'); 
} else {
    get_header('');
}