<article class="blocflex-article">
    <a href="<?php the_permalink(); ?>" class="thumbnail">
        <?php the_post_thumbnail(); ?>
    </a>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
    <div class="date"><?php the_date(); ?></div>
</article>
