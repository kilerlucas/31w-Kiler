<?php
/**
*    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>


<main class="site__main home">
   
    
    <section class="background-image">
        <div>
            <h1>Erreur 404</h1>
            <h2>Page introuvable, vous pouvez tenter une recherche</h2>



        </div>
    </section>

    <section class="campu">
        <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
            <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button class="recherche__bouton" type="submit" class="search-submit">
            <span class="recherche__icone">&#x1F50D;</span>
        </button>
        </form>
    </section>

    <h2>Nos Choix de cours</h2>
    <div class="menu-note-wp-cpontainer">
        <?php
        $category = get_queried_object();
        $args = array(
           'category_name' => $category->slug,
           'orderby' => 'title',
           'order' => 'ASC'
        );
       
        ?>
    </div>

    <h2>Les note de cours</h2>





</main> 
<?php get_footer(); ?>