<?php
/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<main class="site__main">
    <section class="blocflex">
        <?php if ( have_posts() ) : 
                 while ( have_posts() ) : the_post(); ?>
                    <?php 
                    $ma_categorie = "note-wp";
                    if (in_category( 'galerie' )){$ma_categorie = "galerie";} 
                        get_template_part('template-parts/categorie', $ma_categorie); 
                endwhile;
             endif; ?>
    </section>
</main>
<?php
get_footer();
?>