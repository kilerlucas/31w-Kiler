

<aside class="site__aside">
<?php if(! in_category('galerie') && ! is_404()) : ?>



        <h3>Menu Secondaire</h3>
        <?php 

        if (!is_page()) {
            
            if (in_category('cours')) {

                $posts = get_posts( array(
                    'numberposts' => -1,
                    'tax_query' => array(
                    array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => array('cours'),
                    )
                )) );

                ?><nav class="menu-note-wp-container"><ul id="menu-note-wp" class="menu"> <?php

                foreach ($posts as $post): ?>
                    <li class="menu-item"><a class="latest-pages" href="/<?= $post->post_name; ?>"><?= substr($post->post_title, 0, 7); ?></a></li>
                <?php endforeach; ?>
                </ul></nav>
                <?php

            } else {
                wp_nav_menu(array(
                    "menu" => 'note-wp',
                    "container" => "nav"
                )); 
            }
            
        } else {
            $pages = get_pages(array(
                'number' =>  3
            ));
            
            ?>
            <div class="menu-note-wp-container"><ul class="menu">
            <?php
            if($pages):
                foreach($pages as $page):?>
                    <li class="menu-item"><a class="latest-pages" href="/<?= $page->post_name; ?>"><?= $page->post_title; ?></a></li>
                    <?php
                endforeach;
            endif;
            ?>
            </ul></div>
            <?php
        }

        ?>

        <?php else: ?>


        <?php endif ?>

    </aside>
