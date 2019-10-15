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

$object = sanitize_email($_POST['object']);

$message = sanitize_text_field($_POST['message']);

$admin_email = get_option('admin_email');

$headers = "From: \"" . $name . "\" <" . $email . ">\r\n";

$sujet = $object;

$envoie = mail ($admin_email, $sujet, $message, $headers);

$textSend = ($envoie === true) ? 'sent' : 'notSent';


$wp->add_query_var('send');
$url = get_page_by_title('accueil');
wp_redirect(get_permalink($url) . '?send=' . $textSend);

exit();
}
}

add_action('init', 'contact_form'); 


##################################### CUSTOM POST TYPE #################################

############### NEWS ################

function wpm_custom_post_type_news() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'News', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'News', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'News'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les news du groupe Bysshe'),
		'view_item'           => __( 'Voir les news du groupe Bysshe'),
		'add_new_item'        => __( 'Ajouter une nouvelle news'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer les news'),
		'update_item'         => __( 'Modifier les news'),
		'search_items'        => __( 'Rechercher une news'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'News'),
		'description'         => __( 'Tous sur news'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'news'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'news', $args );
}

add_action( 'init', 'wpm_custom_post_type_news', 0 );


############### TOURS ################

function wpm_custom_post_type_tour() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Tour', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Tour', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Tour'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les dates du groupe Bysshe'),
		'view_item'           => __( 'Voir les dates du groupe Bysshe'),
		'add_new_item'        => __( 'Ajouter une nouvelle date'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer les tour'),
		'update_item'         => __( 'Modifier les tour'),
		'search_items'        => __( 'Rechercher une date'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Tour'),
		'description'         => __( 'Tous sur les prochains tour'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'tour'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'tour', $args );
}

add_action( 'init', 'wpm_custom_post_type_tour', 0 );

 ######## METABOX TOURS #######

 add_action('add_meta_boxes', 'initialisation_metaboxes_tour');
 function initialisation_metaboxes_tour()
 {
	 //on utilise la fonction add_metabox() pour initialiser une metabox
	 add_meta_box('id_ma_meta', 'Informations tour', 'meta_function_tour', 'tour', 'normal', 'high');
 }
 
 function meta_function_tour($post)
 {
	 // on récupère la valeur actuelle pour la mettre dans le champ
	 $date = get_post_meta($post->ID, '_date_tour', true);
	 $place = get_post_meta($post->ID, '_place_tour', true);
	 $city = get_post_meta($post->ID, '_city_tour', true);
	 $country = get_post_meta($post->ID, '_country_tour', true);
	 $informations = get_post_meta($post->ID, '_informations_tour', true);
	 $year = get_post_meta($post->ID, '_year_tour', true);


	 echo '<label for="date_tour"> Date du concert : </label>';
	 echo '<input id="date_tour" type="date" name="date_tour" value="' . $date . '"/></br>';
	 echo '<label for="place_tour">Lieu : </label>';
	 echo '<input id="place_tour" type="text" name="place_tour" value="' . $place . '"/></br>';
	 echo '<label for="city_tour">Ville : </label>';
	 echo '<input id="city_tour" type="text" name="city_tour" value="' . $city . '" /></br>';
	 echo '<label for="country_tour">Pays : </label>';
	 echo '<input id="country_tour" type="text" name="country_tour" value="' . $country . '"/></br>';  
	 echo '<label for="informations_tour">Url : </label>';
	 echo '<input id="informations_tour" type="text" name="informations_tour" value="' . $informations . '"/><br>'; 
	 echo '<label for="year_tour">Année : </label>';
	 echo '<input id="year_tour" type="text" name="year_tour" value="' . $year . '"/>';           
 }

 add_action('save_post_tour', 'save_metaboxes_tour');

 function save_metaboxes_tour($post_ID)
 {
	 if (isset($_POST['date_tour'])) {
		 update_post_meta(
			 $post_ID,
			 '_date_tour',
			 sanitize_text_field($_POST['date_tour'])
		 );
	 }
	 if (isset($_POST['place_tour'])) {
		 update_post_meta(
			 $post_ID,
			 '_place_tour',
			 sanitize_text_field($_POST['place_tour'])
		 );
	 }
	 if (isset($_POST['city_tour'])) {
		 update_post_meta(
			 $post_ID,
			 '_city_tour',
			 sanitize_text_field($_POST['city_tour'])
		 );
	 }

	 if (isset($_POST['country_tour'])) {
		update_post_meta(
			$post_ID,
			'_country_tour',
			sanitize_text_field($_POST['country_tour'])
		);
	}

	if (isset($_POST['informations_tour'])) {
		update_post_meta(
			$post_ID,
			'_informations_tour',
			sanitize_text_field($_POST['informations_tour'])
		);
	}

	if (isset($_POST['year_tour'])) {
		update_post_meta(
			$post_ID,
			'_year_tour',
			sanitize_text_field($_POST['year_tour'])
		);
	}
	 
 }


