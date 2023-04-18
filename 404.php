<?php
/**
*    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>


<main class="site__main home">
    <!-- <code>front-page.php</code> -->

    <!-- <section></section> -->
   
    
    <section class="hero">
        <div class="hero-content">
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

    <article class="menu-cours-container">
        <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
        <strong><?= get_field('domaine') ?></strong>
        <h6><?= $titre_long ?></h6>
        <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
        <strong><?= get_field('enseignant') ?></strong>
        <p><?= $duree ?> - <?= get_field('location') ?></p>
    </article>


    <article class="menu-note-wp-container">
        <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
        <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    </article>



</main> 
<?php get_footer(); ?>