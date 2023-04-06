

<aside class="site__aside">
<?php if(! in_category('galerie')): ?>



        <h3>Menu Secondaire</h3>
        <?php 

        if (!is_page()) {
            $lemenu = 'note-wp';
            if (in_category('cours'))
            {$lemenu = 'cours';}
            wp_nav_menu(array(
                "menu" => $lemenu,
                "container" => "nav"
            )); 
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

            <h2>The <br />Galerie</h2>

        <?php endif ?>

    </aside>
