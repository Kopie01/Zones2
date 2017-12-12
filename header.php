<html>
<head>
	<title>Custom Wordpress Site</title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
	
	<?php wp_head(); ?>
</head>
<?php 
	if( is_front_page() ){
		$bodyClass = array('my-body', 'front-page');
	} else {
		$bodyClass = array('my-body');
	}

 ?>
<body <?php body_class($bodyClass); ?>>
	<?php if(is_front_page()): ?>
		
	<?php endif; ?>
	<?php the_custom_logo(); ?>
	<?php wp_nav_menu(array('theme_location'=>'primary', 'menu_id' => 'menu-main-nav')); ?>

	

	

	

	
	<?php if( is_front_page() ): ?>
		
		 <div class="aboutimage" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>)"></div>
	<?php endif; ?>
	<br>
	









		










