     <? $padding=(is_single()?'pt-5':''); ?>
    <!--Grid row-->
    <div class="row <? echo $padding;?>">
        <!--Grid column-->
        <div class="col-lg-5 col-xl-4 pb-3">
            <!--Featured image-->
            <div class="view view-post overlay hm-white-slight z-depth-1-half">
                <?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid', 'alt'=> 'Кофейня | Кофе с собой | Дисерты | Завтраки | Сергиев Посад')); ?>
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 col-xl-6 content-text">
            <!--Excerpt-->
            <!--<a href="" class="green-text"><h6 class="font-bold pb-1"><i class="fa fa-cutlery"></i> Food</h6></a>-->
            <a href="<?php echo get_permalink() ?>"><h4 class="mb-4"><strong><?php the_title(); ?></strong></h4></a>
            <?php
              if (is_single()){
                //the_content();
                $content = get_the_content();
                echo '<p class="text-left">'.$content.'</p>';?>
                <p>Автор <a><strong><?php the_author(); ?></strong></a>, <?php echo get_the_date(); ?></p>
                <?
              }
              else {
                the_excerpt();
            ?>
                <p>Автор <a><strong><?php the_author(); ?></strong></a>, <?php echo get_the_date(); ?></p>
                <!--"Read more" button-->
                <a href="<?php echo get_permalink() ?>" class="btn btn-primary mb-3">Подробнее</a>
              <?php
              }
              $id=get_the_ID();
              $video = get_post_meta($id, 'video', true );

              if ($video) {
                  if (is_single()) {
                      echo '<div class="embed-responsive embed-responsive-16by9 my-5"><iframe class="embed-responsive-item" src="'.$video.'" allowfullscreen></iframe></div>';
                  }
              }

              ?>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->
    <?
    echo (is_single()?'':'<hr class="hr-width my-3 pb-3">');

