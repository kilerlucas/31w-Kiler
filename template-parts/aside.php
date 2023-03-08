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