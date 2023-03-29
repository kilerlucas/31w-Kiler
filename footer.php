<footer class="site__footer">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu_footer',
                        'menu'           => 'entete',
                        'container'      => 'nav'
                    )
                );
                ?>
            <div class="col col-md-6 text-md-right">
                <h4>Contact Nous</h4>
                <p>123 Main St.</p>
                <p>Montreal, QC 12345</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@lucaskiler.com</p>
            </div>
        </div>
    </div>
</footer>