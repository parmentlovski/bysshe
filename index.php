<?php 

if ( is_front_page()) {
 get_header('frontpage'); 
} else {
    get_header('');
}