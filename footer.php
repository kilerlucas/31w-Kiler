<footer class="site__footer">
    <div>
        <?php
        wp_nav_menu(
            array(
                'menu'           => 'entete',
                'container'      => 'nav'
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
            <div class="col col-md-2 text-md-right">
                <h4>Nos réseaux sociaux</h4>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/votrepage" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/votrepage" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/votrepage" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>  
    </div>
</footer>

<script>

burger = document.querySelector(".burger");
burger.addEventListener("click", function(){
    document.querySelector(".menusearch").classList.toggle("active");
});


</script>

<?php wp_footer(); ?>