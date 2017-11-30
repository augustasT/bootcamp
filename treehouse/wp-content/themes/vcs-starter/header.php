<!doctype html>
<html <?php language_attributes(); ?>> <!-- Nustato kalba automatiskai -->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" > <!-- Nustato charseta -->
        <meta name="viewport" width="device-width,initial-scale=1">
        <!-- <meta name="description" content="flex test">   Pakeicia YOAST SEO pluginas --> 
        <title><?php wp_title(' - ', true, 'right');  bloginfo('name'); ?></title>
        <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url').'/assets/images/logo.png'; ?>">
       <?php wp_head(); ?>
    </head>
    <body>
    	<?php get_template_part('elements/site-header'); ?>

