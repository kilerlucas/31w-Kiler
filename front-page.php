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
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category( 'galerie' ) ) : ?>
                    <?php get_template_part( 'template-parts/categorie', 'galerie' ); ?>
                <?php else : ?>
                    <?php get_template_part( 'template-parts/categorie', 'note-wp' ); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
?>