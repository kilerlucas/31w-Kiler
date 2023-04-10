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
        <h1>TP2</h1>
        <h1><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1> 
        <h2><?php  bloginfo('description'); ?></h2>
        <hr>
        <h2>pour Lucas Kiler</h2>

        <?php $pages = get_pages(array(
            'number' =>  3
        ));
        
        if($pages):
            foreach($pages as $index => $page):?>
                <a class="latest-pages" href="/<?= $page->post_name; ?>">
                <img src="/wp-content/themes/31w-Lucas-Kiler/img/<?= $index + 1 ?>.svg" alt="" />
                <?= $page->post_title; ?></a>
                <?php
            endforeach;
        endif;
        
        
        ?>

    </div>
</section>

    <section class="blocflex mw">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
                <?php 
                $ma_categorie = "note-wp";
                if (in_category('galerie')){$ma_categorie = "galerie";}
                get_template_part("template-parts/categorie", $ma_categorie);
            endwhile;
        endif; ?>   
    </section>
</main> 
<?php get_footer(); ?>