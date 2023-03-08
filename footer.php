<footer class="site__footer">
    <div class="blocflex">
        <section>
            <h4><?php bloginfo('name'); ?></h4>
            <p><?php bloginfo('description'); ?></p>
        </section>
        <section>
            <h4>Liens utiles</h4>
            <?php wp_nav_menu(array(
                'menu' => 'footer',
                'container' => false,
            )); ?> 
        </section>
        <section>
            <h4>Contact</h4>
            <p><?php bloginfo('name'); ?></p>
            <p><?php bloginfo('url'); ?></p>
        </section>
    </div>
    <div>
        <p class="site__footer-mentions">
            &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> - <?php _e('Tous droits réservés', 'montheme'); ?>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>


