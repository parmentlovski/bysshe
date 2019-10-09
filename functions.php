<?php
##################################### LOAD SCRIPT ##################################
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{
    wp_enqueue_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('parent-style', '/wp-content/themes/bysshe/style.css?v=<?php echo time(); ?>');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('font_styles_poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,700,800&display=swap');

    wp_enqueue_script('script-bootstrap-1', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), 1.0, true);
    wp_enqueue_script('script-bootstrap-2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), 1.0, true);
    wp_enqueue_script('script-bootstrap-3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), 1.0, true);
    wp_enqueue_script('script', '/wp-content/themes/bysshe/script.js', array('jquery'), 1.0, true);
    wp_enqueue_script('script_navbar', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), 1.0, true);
    wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php'));
}


##################################### MENU ##################################
function register_my_menu()
{
    register_nav_menus(array('top' => 'Menu principal'));
};

add_action('init', 'register_my_menu');


##################################### MAIL #################################

function contact_form()
{
global $wp;

if (isset($_POST['message-submit']) && $_POST['hidden'] === "1") {

$name = sanitize_text_field($_POST['name']);

$email = sanitize_email($_POST['email']);


$message = sanitize_text_field($_POST['message']);



$admin_email = get_option('admin_email');


$headers = "From: \"" . $name . "\" <" . $email . ">\r\n";


$sujet = 'Vous recevez un message';

$envoie = mail ($admin_email, $sujet, $message, $headers);

$textSend = ($envoie === true) ? 'sent' : 'notSent';


$wp->add_query_var('send');
$url = get_page_by_title('home');
wp_redirect(get_permalink($url) . '?send=' . $textSend);

exit();
}
}

add_action('init', 'contact_form'); 