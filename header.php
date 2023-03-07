<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'site' ); ?>>
    <header class="site__entete">  
        <section class="logomenu">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php the_custom_logo(); ?>
            </a>
            <div class="menusearch">
                <?php wp_nav_menu( array(
                    'menu'       => 'entete',
                    'container'  => 'nav',
                    'menu_class' => 'menu',
                ) ); ?>
                <div class="menu-item-search">
                    <?php get_search_form(); ?>
                </div>
            </div>   
        </section>
        <hgroup class="site__entete-titres">
            <h1 class="site__titre"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site__sous-titre"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
    </header>
    <aside class="site__aside">
        <h3 class="site__aside-titre">Menu Secondaire</h3>
        <?php 
        $category = get_queried_object();
        if ( isset( $category ) ) {
            $lemenu = $category->slug;
        } else {
            $lemenu = "note-wp";
        }
    wp_nav_menu( array(
        'menu'       => $lemenu,
        'container'  => 'nav',
        'menu_class' => 'menu',
    ) );
    ?>
</aside>