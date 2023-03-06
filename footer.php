<footer class="site__footer">
    <div class="blocflex">
    <section>
        <h4><?php bloginfo('name'); ?></h4>
        <p><?php bloginfo('description'); ?></p>
    </section>
    <section>
        <h4>Liens utiles</h4>
        <?php wp_nav_menu(array(
            'menu' => 'pied',
            'container' => false,
        )); ?> 
    </section>
    <section>
        <h4>Contact</h4>
        <p><?php bloginfo('name'); ?></p>
        <p><?php bloginfo('description'); ?></p>
        <p><?php bloginfo('admin_email'); ?></p>
        <p><?php bloginfo('url'); ?></p>
    </section>

</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>