<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="site <?= (is_front_page() ? "no-aside" : "");  ?> ">
    <header class="site__entete">  
        <section class="logomenu">
            <?php the_custom_logo(); ?> 
            <div class="menusearch">
                <?php wp_nav_menu(array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )); ?> 
                <label class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>   
                <?= get_search_form(); ?>
            </div> 
        </section>
    </header>
    <?php 
    if (is_front_page() == false)
    {
       get_template_part("template-parts/aside");
    }
     ?>