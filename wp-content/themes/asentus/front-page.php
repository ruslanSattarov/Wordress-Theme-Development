<?php get_header(); ?>
<?php
/*
    Template Name: Home
*/
?>

    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <?php $slider = new WP_Query(array('post_type' => 'sider', 'posts_per_page' => 2, 'order' => 'ASC')); ?>

        <?php if ($slider->have_posts()) : ?>
            <div class="carousel-inner" role="listbox">

                <?php while ($slider->have_posts()):$slider->the_post(); ?>
                    <div class="item">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url('full'); ?>" alt="Slider Image">
                        <div class="container">
                            <div class="carousel-centered">
                                <div class="margin-b-40">
                                    <h1 class="carousel-title"><?php the_title(); ?></h1>
                                    <p><?php the_content(); ?></p>
                                </div>
                                <a href="<?php the_field('btn_link'); ?>"
                                   class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?php the_field('btn'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>

        <?php endif; ?>

    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
<?php if (have_rows('six_icon', 7)): ?>
    <div class="row row-space-1 margin-b-2">
    <?php while( have_rows('six_icon', 7) ): the_row();
        $name = get_sub_field('name');
        $icon = get_sub_field('icon');
        $delay = get_sub_field('delay');
        $descr = get_sub_field('descr');
        ?>


        <div class="col-sm-4 sm-margin-b-2">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay="<?php echo $delay; ?>s">
                <div class="service" data-height="height">
                    <div class="service-element">
                        <i class="<?php echo $icon; ?>"></i>
                    </div>
                    <div class="service-info">
                        <h3><?php echo $name; ?></h3>
                        <p class="margin-b-5"><?php echo $descr; ?></p>
                    </div>
                    <a href="#" class="content-wrapper-link"></a>
                </div>
            </div>
        </div>

<?php endwhile; ?>
    </div>

    <?php endif;?>


    </div>
    </div>
    <!-- End Service -->

    <!-- Latest Products -->
    <div class="content-lg container">
        <div class="row margin-b-40">
            <?php $hero = get_field('grop_befor_first', 7); ?>
            <div class="col-sm-6">
                <h2>
                  <?php echo $hero['name']; ?>
                </h2>
                <p> <?php echo $hero['editor']; ?></p>
            </div>
        </div>
        <!--// end row -->
<?php $products = new WP_Query(array('post_type' => 'products', 'posts_per_page' => 3, 'order' => 'ASC')); ?>

<?php if ($products->have_posts()) : ?>
        <div class="row">



            <!-- Latest Products -->
    <?php while ($products->have_posts()):$products->the_post(); ?>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".2s">
                        <a href="<?php the_permalink(); ?>">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"
                             alt="Latest Products Image"></a>
                    </div>
                </div>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20"><?php the_field('profile'); ?></span></h4>
                <p><?php do_excerpt(strip_tags(get_the_content()), 18) ?></p>
                <a class="link" href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile; ?>
            <!-- End Latest Products -->



        </div>
        <!--// end row -->
    <?php endif; ?>
    </div>
    <!-- End Latest Products -->

    <!-- Clients work_our_company -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <!-- Swiper Clients -->
            <div class="swiper-slider swiper-clients">
                <!-- Swiper Wrapper -->
               <?php if( have_rows('work_our_company', 7) ): ?>
                <div class="swiper-wrapper">
                   <?php while( have_rows('work_our_company', 7) ): the_row();
                       $image = get_sub_field('img');
                       ?>


                    <div class="swiper-slide">
                        <img class="swiper-clients-img"
                             src="<?php  echo $image['sizes']['customfunctionsizes']; ?>" alt="Clients Logo">
                    </div>



                   <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <!-- End Swiper Wrapper -->
            </div>
            <!-- End Swiper Clients -->
        </div>
    </div>
    <!-- End Clients -->

    <!-- Testimonials -->
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Customer Reviews</h2>
                <?php $reviews = new WP_Query(array('post_type' => 'reviews', 'posts_per_page' => -1, 'order' => 'ASC')); ?>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->

<?php if ($reviews->have_posts()) : ?>

                    <div class="swiper-wrapper">
    <?php while ($reviews->have_posts()):$reviews->the_post(); ?>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                  <?php the_content(); ?>
                                </div>

                                <p><span class="fweight-700 color-link"><?php the_field('name'); ?></span>, <?php the_field('profes'); ?></p>
                            </blockquote>
                        </div>

        <?php endwhile; ?>

                    </div>

    <?php endif; ?>


                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->

    <!-- Pricing REPIT INSIDE REPIT  -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
<?php if( have_rows('repit_inside_repit', 7) ): ?>
            <div class="row row-space-1">
                <?php while( have_rows('repit_inside_repit', 7) ): the_row(); ?>
                <div class="col-sm-4 sm-margin-b-2">
                    <!-- Pricing -->
                    <div class="pricing">
                        <div class="margin-b-30">
                            <i class="<?php the_sub_field('icon_calss'); ?>"></i>
                            <h3><?php the_sub_field('name_just'); ?>

                              <?php if(get_sub_field('price')): ?>  <span> - $ </span><?php endif; ?>  <?php the_sub_field('price'); ?></h3>
                            <p><?php the_sub_field('descr'); ?></p>
                        </div>
                        <?php if( have_rows('inside', 7) ): ?>
                        <ul class="list-unstyled pricing-list margin-b-50">
                            <?php while( have_rows('inside', 7) ): the_row(); ?>
                            <li class="pricing-list-item"><?php the_sub_field('nama_sub'); ?></li>
                             <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                        <a href="<?php the_sub_field('btn_link'); ?>" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">
                            <?php the_sub_field('btn_text'); ?>
                        </a>
                    </div>
                    <!-- End Pricing -->
                </div>
                <?php endwhile; ?>


            </div>
            <!--// end row -->

<?php endif; ?>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">

<?php  $hero = get_field('our_client', 7); if( $hero ): ?>
                        <div class="promo-section-col">
                            <h2><?php echo $hero['main']; ?></h2>
                            <div>
                                <?php echo $hero['editor']; ?>

                            </div>
                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="<?php echo $hero['img']['url'];  ?>"
                 alt="Content Image">
        </div>
    </div>
    <!-- End Promo Section -->




    <!-- Work -->
<?php $work = get_field('first_call', 7); ?>
<?php //echo print_r($work); ?>
    <div class="bg-color-sky-light overflow-h">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2><?php echo $work['main_text']; ?></h2>
                    <p><?php echo $work['main_descr']; ?></p>
                </div>
            </div>
<!--// end row -->




            <!-- Masonry Grid -->
<?php $rows=$work['main_repit']; if( $rows ) : ?>
            <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

    <?php foreach( $rows as $row ) :?>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-<?php $nell =$row['colors'];   echo implode($nell, ',') ?>">
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".<?php echo $row['duration']; ?>s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive"
                                 src="<?php echo $row['inmg']['url']; ?>"
                                 alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5"><?php echo $row['text']; ?></h3>
                            <p class="color-white margin-b-0"><?php echo $row['descr']; ?></p>
                        </div>

                    </div>
                </div>
    <?php endforeach; ?>

            </div>
<?php endif;?>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->
    <!--========== END PAGE LAYOUT ==========-->
    <?php get_footer(); ?>