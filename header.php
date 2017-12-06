<html>
<head>
	<title>Custom Wordpress Site</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
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
	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

	

	

	
	<?php if( is_front_page() ): ?>
 		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>">
	<?php endif; ?>
	<div class="container">









		










