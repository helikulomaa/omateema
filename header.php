<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="site-container">
    <nav id="top-navi">
    <?php wp_nav_menu([ 'theme location' => 'primary']); ?>
    </nav>

    
