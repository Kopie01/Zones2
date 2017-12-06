<?php 

add_image_size( 'front-thumb', 350, 350, true );


function customThemeEnqueues(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/zonesStyle.css' , array(), '1.0.0', 'all' );


	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/zonesScript.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'customThemeEnqueues');

function customThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('primary','This is the main navigation, positioned at the top of the page');
	register_nav_menu('secondary','This is the secondary navigation, positioned at the bottom of the page');
}

add_action('init','customThemeSetUp');

// only turn on if you want the user to be able to customize

add_theme_support('custom-background');

$customHeaderSetting = array(
		'default-image' => '',
		'width' => 100,
		'height' => 50,
		'flex-height' => true,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'uploads' => true,
		'video' => false
	);

add_theme_support( 'custom-header' );
add_theme_support('post-thumbnails');
//for logo customization
add_theme_support( 'custom-logo' );
add_theme_support('post-formats', array('aside', 'image', 'video'));

function customTheme_sidebar_setup(){
	register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'This is our main sidebar on the right',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'

		));
}

add_action('widgets_init', 'customTheme_sidebar_setup');

// customize colours

function customTheme_customize_colour($wp_customize){

	// settings 
	$wp_customize->add_setting('newtheme_text_colour', array(
				'default' => '#000000',
				'transport' => 'refresh'
		));

	//Section
	$wp_customize->add_section('newtheme_text_colour_section', array(
			'title' => __('Standard Colours', 'New Custom Theme'),
			'priority' => 30
		));

	// Add the control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_text_colour_control', array(
			'label'=>__('text colour','New Custom Theme'),
			'section' => 'newtheme_text_colour_section',
			'settings' => 'newtheme_text_colour',

		)));
}
add_action('customize_register', 'customTheme_customize_colour');

function newtheme_customize_css(){
	?>
			<style type="text/css">
				
				p{
					color: <?php echo get_theme_mod('newtheme_text_colour') ?>;;
				},

			</style>

			

	<?php
}
add_action('wp_head', 'newtheme_customize_css');


function newTheme_footer_text($wp_customize){
	// Settings
	$wp_customize->add_setting('newTheme_footer_text',array(
			'default' =>'This is your footer Text',
			'transport' => 'refresh'
		));

	// section
	$wp_customize->add_section('newTheme_footer_text_section', array(
			'title' => 'Footer Text'
		));

	// control
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newTheme_footer_text_control', array(
			'label' => 'Footer Text',
			'section' => 'newTheme_footer_text_section',
			'settings' => 'newTheme_footer_text'
		)));

}

add_action('customize_register','newTheme_footer_text');


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );






function services_init() {
    $labels = array(
        'name'               => _x( 'Services', 'post type general name' ),
        'singular_name'      => _x( 'Services', 'post type singular name' ),
        'menu_name'          => _x( 'Services', 'admin menu' ),
        'name_admin_bar'     => _x( 'Services', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Services', 'programme' ),
        'add_new_item'       => __( 'Add New Services' ),
        'new_item'           => __( 'New Services' ),
        'edit_item'          => __( 'Edit Services' ),
        'view_item'          => __( 'View Services' ),
        'all_items'          => __( 'All Servicess' ),
        'search_items'       => __( 'Search Services' ),
        'parent_item_colon'  => __( 'Parent Services:' ),
        'not_found'          => __( 'No Services found.' ),
        'not_found_in_trash' => __( 'No Services found in Trash.' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'services'),
        'query_var' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',),
        );
    register_post_type( 'services', $args );
}
add_action( 'init', 'services_init' );












