<?php  get_header(); ?>

<!--Main layout-->
<div class="container container-singl">
    <div class="row">
        <!--Main column-->
        <div class="col-12">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                ?>
                <!--Post-->
                    <?php get_template_part('content', get_post_format()); ?>
                <!--/.Post-->
                <?php
                } // end while
            } // end if
            ?>
        </div>
    </div>
</div>
<!--/.Main layout-->

<?php  get_footer(); ?>