<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' - '); bloginfo('name');?></title>
	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url').'/assets/images/logo.png';?>">

	
	


	
	
	
	

	

<?php wp_head(); ?> 
</head>
<body>
	<?php get_template_part('elements/site-header'); ?> 