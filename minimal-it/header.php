<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0d6efd">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="mb-4 border-bottom" style="background-color: var(--color-bg);">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light" aria-label="Primary Menu">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'minimal-it' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => 'div',
                'container_class'=> 'collapse navbar-collapse',
                'container_id'   => 'primary-menu',
                'menu_class'     => 'navbar-nav ms-auto mb-2 mb-md-0',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>
    </div>
</header>
<main class="container my-4">
