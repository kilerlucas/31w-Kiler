<?php get_header(); ?>

<main class="site__contenu">

    <article class="site__article">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="site__meta">
            <p>Publié le <?php echo get_the_date(); ?> par <?php the_author_posts_link(); ?></p>
            <p>Catégorie : <?php the_category(', '); ?></p>
            <p><?php the_tags('Mots-clés : ', ', '); ?></p>
        </div>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </article>

    <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
