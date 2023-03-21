<footer class="site__footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h4>Menu</h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu_footer',
                        'menu'           => 'entete',
                        'container'      => 'nav'
                    )
                );
                ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12">
                <h4>Contact Us</h4>
                <p>123 Main St.</p>
                <p>Anytown, USA 12345</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@example.com</p>
            </div>
        </div>
    </div>
</footer>
