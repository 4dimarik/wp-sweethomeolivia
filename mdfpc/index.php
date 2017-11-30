<?php get_header(); ?>

<main>
<!--Main layout-->
<div class="container container-posts">
    <div class="row">
        <!--Carousel Wrapper-->
            <div id="carousel-intro" class="col-12 p-0 carousel slide carousel-fade white-text d-none" data-ride="carousel" data-interval="false" >
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-intro" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-intro" data-slide-to="1"></li>
                    <li data-target="#carousel-intro" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                <!--Dynamic query listing posts from "carousel" category-->
                <?php
                $counter = 1;
                $args = array(
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'posts_per_page'   => 3,
                    'category_name'  => 'intro'
                    );

                // The Query
                $query1 = new WP_Query( $args );

                if ( $query1->have_posts() ) {
                    // The Loop
                    while ( $query1->have_posts() ) {
                        $query1->the_post();
                        ?>
                        <!-- Looping slide -->
                        <div class="carousel-item view hm-teal-slight <?php echo $counter==1 ? "active": ""; ?>" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-size: cover;">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-12">
                                    <li>
                                        <h1 class="h1-responsive pattern-3"><?php  echo get_the_title(); ?></h1>
                                    </li>
                                    <li>
                                        <!--<p><?php echo get_the_excerpt();?></p> -->
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink() ?>" class="btn btn-lg  btn-outline-default " rel="nofollow">Подробнее</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                        <!--/.Looping slide-->
                        <?php
                        $counter++;
                    }
                    wp_reset_postdata();
                } ?>
                <!--/.Dynamic query listing posts from "carousel" category-->

                </div>
                <!--/.Slides-->

                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-intro" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-intro" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        <!--Main column-->
        <div class="col-12">
            <section class="section py-3 text-center text-lg-left">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array('category_name'  => 'olivianews', 'paged' => $paged);
                $Indexquery = new WP_Query( $args );
                if ( $Indexquery->have_posts() ) {
                while ( $Indexquery->have_posts() ) {
                $Indexquery->the_post();
                ?>
                <!--Post-->
                    <?php get_template_part('content', get_post_format()); ?>
                <!--/.Post-->
                <?php
                } // end while
                } // end if
                ?>
            </section>
            <?php mdb_pagination(); ?>
        </div>
    </div>
</div>
<!--/.Main layout-->
</main>

<?php get_footer(); ?>