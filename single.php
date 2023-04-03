<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main single">
    <!-- <h3>single.php</h3>  -->
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        // usar funcao in_category (ver aside em template-parts)
        the_title('<h1>','</h1>');
        the_content();

        if (in_category('cours')) {
            echo "<strong>Domaine: </strong>" . get_field('domaine') . "<br>";
            echo "<strong>Enseignant: </strong>" . get_field('enseignant') . "<br>";
            echo "<strong>Duree: </strong>" . get_field('dureee') . "<br>";
            echo "<strong>Location: </strong>" . get_field('location') . "<br>";
        }

        
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>