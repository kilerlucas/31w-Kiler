<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main single">
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        // the_title('<h1>','</h1>');
        // the_permalink(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
        
        <?php 
        // the_content();
        // the_excerpt();
        echo the_content();

        if (is_page()) {
            echo "<strong>Date et heure: </strong>" . get_field('date_et_heure') . "<br>";
            echo "<strong>Téléphon: </strong>" . get_field('telefone') . "<br>";
            echo "<strong>Courriel: </strong>" . get_field('courriel') . "<br>";
            echo "<strong>Site web: </strong><a href=\"" . get_field('site_web') . "\"> ".get_field('site_web')." </a><br>";
        }
        
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>