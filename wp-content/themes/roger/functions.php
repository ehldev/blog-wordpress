<?php

if(!function_exists('roger_scripts')) {
	function roger_scripts() {

		// Styles
		wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400&display=swap|Poppins:400,700&display=swap', null, '1.0.0', 'all');
		wp_register_style('icons', get_template_directory_uri() . '/css/font/css/all.min.css', null, '1.0.0', 'all');
		wp_register_style('styles', get_stylesheet_uri(), array('google_fonts'), '1.0.4', 'all');

		wp_enqueue_style('google_fonts');
		wp_enqueue_style('icons');
		wp_enqueue_style('styles');

		// Scripts

		wp_register_script('scripts', get_template_directory_uri() . '/js/app.js', null, '1.0.0', true);

		wp_enqueue_script('scripts');
	}
}

add_action('wp_enqueue_scripts', 'roger_scripts');


// Obtener imágenes estáticas

function getImage($url) {
	return get_template_directory_uri() . '/images/' . $url;
}

// Menu

if (!function_exists('roger_menus')) {
	function roger_menus() {
		register_nav_menus(array(
			'main_menu' => __('Menú principal', 'roger'),
			'social_menu' => __('Menú de redes sociales', 'roger')
		));
	}
}

add_action('init', 'roger_menus');

// Añadir clase a etiqueta li

function my_nav_special_class($classes, $item){
    $classes[] = 'nav__item';
    
    return $classes;
}

add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);

// Añadir clase a link
function add_specific_menu_location_atts($atts, $item, $args) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'main_menu' ) {
      // add the desired attributes:
      $atts['class'] = 'nav__link';
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );


if (!function_exists('roger_setup')) {
	function roger_setup() {
		add_theme_support('post-thumbnails');
	}
}

add_action('after_setup_theme', 'roger_setup');

// Hacer post destacado
function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Post Destacado', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
 
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
  <p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Hacer el post destacado', 'sm-textdomain' )?>
        </label>
        
    </div>
  </p>
 
    <?php
}
 
add_action( 'add_meta_boxes', 'sm_custom_meta' );

// Almacenamos el valor del checkbox
function sm_meta_save( $post_id ) {
 
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
	if( isset( $_POST[ 'meta-checkbox' ] ) ) {
	    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
	} else {
	    update_post_meta( $post_id, 'meta-checkbox', '' );
	}
 
}

add_action( 'save_post', 'sm_meta_save' );

?>