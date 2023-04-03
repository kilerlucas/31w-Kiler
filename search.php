<?php
/**
Modèle search.php pour afficher les résultats de recherche
*/
get_header() ?>
<main class="site__main">

<?php 


if (have_posts()): ?>
    <h3>Résultats de recherche</h3>
    <section class="blocflex">
    <?php while (have_posts()) : the_post(); ?>
        <article class="blocflex__article">
        <h5><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h5>
        <?= wp_trim_words(get_the_excerpt(), 30);?>
        </article>
    
    <?php endwhile;
else: ?>
    <img src="<?php echo get_template_directory_uri() ?>/img/empty.jpeg" alt="no results"/>
    <h3>Aucun résultat pour votre recherche</h3>
    <?php 
endif; ?>  
</section> 
</main> 
<?php get_footer(); ?>