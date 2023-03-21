<?php get_header() ?>
<main class="site__main">
  <div class="container">
    <section class="row">
      <div class="col-md-8 col-sm-12">
        <?php
        $category = get_queried_object();
        $args = array(
          'category_name' => $category->slug,
          'orderby' => 'title',
          'order' => 'ASC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>
            <article class="mb-5">
              <?php if (has_post_thumbnail()) : ?>
                <div class="text-center">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')); ?>
                  </a>
                </div>
              <?php endif; ?>
              <h2 class="mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="text-muted"><?php the_time('F j, Y'); ?></p>
              <?php the_excerpt(); ?>
            </article>
          <?php endwhile; ?>
          <?php
        else :
          echo '<p>Aucun article trouvé</p>';
        endif;
        wp_reset_postdata(); ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
