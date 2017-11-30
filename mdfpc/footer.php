
<!--Footer-->
<footer class="page-footer default-color center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!--Second column-->
            <div class="col-auto">
                <?php
                wp_nav_menu( array(
                'menu'              => 'footer1',
                'theme_location'    => 'footer1',
                'container' => false,
                'menu_class'        => 'breadcrumb',
                'walker' => new magomra_walker_nav_menu())
                );
                ?>
            </div>
        </div>
            <!--/.Second column-->

        <div class="row justify-content-center">
            <div class="col-auto">
                <ul class="d-flex justify-content-start">
                    <li><a class="nav-link" href="https://vk.com/sweethomeolivia"><i class="fa fa-2x fa-vk"></i></a></li>
                    <li><a class="nav-link" href="https://www.instagram.com/sweethomeolivia"><i class="fa fa-2x fa-instagram"></i></a></li>
                    <li><a class="nav-link" href="https://www.tripadvisor.ru/Restaurant_Review-g445047-d12829952-Reviews-Sweet_Home_Olivia-Sergiyev_Posad_Sergiyevo_Posadsky_District_Moscow_Oblast_Centr.html"><i class="fa fa-2x fa-tripadvisor" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Sweet Home Olivia

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
            
<?php wp_footer(); ?>
</body>
</html>     

<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
                