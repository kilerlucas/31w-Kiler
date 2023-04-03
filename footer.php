<footer class="site__footer">

    <section class="widgets">
        <div class="widget-container"><?php dynamic_sidebar('footer-1'); ?></div>
        <div class="widget-container"><?php dynamic_sidebar('footer-2'); ?></div> 
        <div class="widget-container"><?php dynamic_sidebar('footer-3'); ?></div> 
    </section>


    <div class="main-links-container">
        <?php
        wp_nav_menu(
            array(
                'menu'           => 'entete',
                'container'      => 'nav',
                'menu_class'     => 'footer-menu',
            )
        );
       
        ?>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col col-md-6 text-md-right">
                <h4>Contact Nous</h4>
                <p>123 Main St.</p>
                <p>Montreal, QC 12345</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@lucaskiler.com</p>
            </div>
            <div class="spacer"></div>
            <div class="col col-md-2 text-md-right right-column">
                <h4>Nos réseaux sociaux</h4>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/votrepage" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/img/facebook.webp" alt="facebook"/> </a></li>
                    <li><a href="https://twitter.com/votrepage" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/img/twitter.webp" alt="facebook"/> </a></li>
                    <li><a href="https://www.instagram.com/votrepage" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/img/instagram.webp" alt="facebook"/> </a></li>
                </ul>
            </div>
        </div>  
    </div>
</footer>

<script>


document.querySelector(".burger").addEventListener("click", function(){ document.querySelector(".menusearch").classList.toggle("active"); });
document.querySelector(".menu-entete-container").addEventListener("click", function(){ document.querySelector(".menusearch").classList.remove("active"); });

</script>

<?php wp_footer(); ?>