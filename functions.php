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



function about_init() {
    $labels = array(
        'name'               => _x( 'About', 'post type general name' ),
        'singular_name'      => _x( 'About', 'post type singular name' ),
        'menu_name'          => _x( 'About', 'admin menu' ),
        'name_admin_bar'     => _x( 'About', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New About', 'programme' ),
        'add_new_item'       => __( 'Add New About' ),
        'new_item'           => __( 'New About' ),
        'edit_item'          => __( 'Edit About' ),
        'view_item'          => __( 'View About' ),
        'all_items'          => __( 'All About' ),
        'search_items'       => __( 'Search About' ),
        'parent_item_colon'  => __( 'Parent About:' ),
        'not_found'          => __( 'No About found.' ),
        'not_found_in_trash' => __( 'No About found in Trash.' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'about'),
        'query_var' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',),
        );
    register_post_type( 'about', $args );
}
add_action( 'init', 'about_init' );


function case_init() {
    $labels = array(
        'name'               => _x( 'Case Studies', 'post type general name' ),
        'singular_name'      => _x( 'Case Studies', 'post type singular name' ),
        'menu_name'          => _x( 'Case Studies', 'admin menu' ),
        'name_admin_bar'     => _x( 'Case Studies', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Case Studies', 'programme' ),
        'add_new_item'       => __( 'Add New Case Studies' ),
        'new_item'           => __( 'New Case Studies' ),
        'edit_item'          => __( 'Edit Case Studies' ),
        'view_item'          => __( 'View Case Studies' ),
        'all_items'          => __( 'All Case Studies' ),
        'search_items'       => __( 'Search Case Studies' ),
        'parent_item_colon'  => __( 'Parent Case Studies:' ),
        'not_found'          => __( 'No Case Studies found.' ),
        'not_found_in_trash' => __( 'No Case Studies found in Trash.' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'case'),
        'query_var' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',),
        );
    register_post_type( 'case', $args );
}
add_action( 'init', 'case_init' );






$metaboxes = array(
    'services' => array(
        'title' => __('Person Information'),
        'applicableto' => 'services',
        'location' => 'normal',
        'priority' => 'low',
        'fields' => array(
            'person_name' => array(
                'title' => __('Name of Person: '),
                'type' => 'text'
            ),
            'endDate' => array(
            	'title' => __('End Date: '),
            	'type' => 'number'
            )
        )
    )
);
add_action( 'admin_init', 'add_post_format_metabox' );
function add_post_format_metabox() {
    global $metaboxes;
    if ( ! empty( $metaboxes ) ) {
        foreach ( $metaboxes as $id => $metabox ) {
            add_meta_box( $id, $metabox['title'], 'show_metaboxes', $metabox['applicableto'], $metabox['location'], $metabox['priority'], $id );
        }
    }
}
function show_metaboxes( $post, $args ) {
    global $metaboxes;
    $custom = get_post_custom( $post->ID );
    $fields = $tabs = $metaboxes[$args['id']]['fields'];
    $output = '<input type="hidden" name="post_format_meta_box_nonce" value="' . wp_create_nonce( basename( __FILE__ ) ) . '" />';
    if ( sizeof( $fields ) ) {
        foreach ( $fields as $id => $field ) {
            switch ( $field['type'] ) {
                default:
                case "text":
                    $output .= '<label for="' . $id . '">' . $field['title'] . '</label><input class="customInput" id="' . $id . '" type="text" name="' . $id . '" value="' . $custom[$id][0] . '" style="width: 100%;" />';
                    break;
                case "number":
                    $output .= '<label for="' . $id . '">' . $field['title'] . '</label><input class="customInput" id="' . $id . '" type="number" name="' . $id . '" value="' . $custom[$id][0] . '" style="width: 100%;" />';
                break;
            }
        }
    }
    echo $output;
}
add_action( 'save_post', 'save_metaboxes' );
function save_metaboxes( $post_id ) {
    global $metaboxes;
    if ( ! wp_verify_nonce( $_POST['post_format_meta_box_nonce'], basename( __FILE__ ) ) )
        return $post_id;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;
    if ( 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) )
            return $post_id;
    } elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    $post_type = get_post_type();
    foreach ( $metaboxes as $id => $metabox ) {
        if ( $metabox['applicableto'] == $post_type ) {
            $fields = $metaboxes[$id]['fields'];
            foreach ( $fields as $id => $field ) {
                $old = get_post_meta( $post_id, $id, true );
                $new = $_POST[$id];
                if ( $new && $new != $old ) {
                    update_post_meta( $post_id, $id, $new );
                }
                elseif ( '' == $new && $old || ! isset( $_POST[$id] ) ) {
                    delete_post_meta( $post_id, $id, $old );
                }
            }
        }
    }
}




