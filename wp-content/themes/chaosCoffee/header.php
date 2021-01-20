<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">

    <a class="title" href="<?= home_url( '/' ); ?>">Chaos Coffee Restaurant</a>
    
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour
                'menu_class' => 'menu-nav', // ma classe personnalisée
            )
        );
    ?>

    <a class="burger-icon"> Menu
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20px" height="20px" x="0" y="0" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
        <g xmlns="http://www.w3.org/2000/svg">
            <g id="Menu_1_">
                <path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03    c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z" fill="#ffffff" data-original="#000000" style=""/>
                <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03    S379.58,180.455,372.939,180.455z" fill="#ffffff" data-original="#000000" style=""/>
                <path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606    c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z" fill="#ffffff" data-original="#000000" style=""/>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            <g xmlns="http://www.w3.org/2000/svg">
            </g>
            </g>
        </svg>
    </a>

</header>