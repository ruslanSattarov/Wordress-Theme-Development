<?php
/*
		Template Name: about
	*/

get_header();

get_template_part('template/main', 'block');
?>


<!-- Features -->
<div class="section-seperator">
    <div class="content-lg container">
        <?php $products = new WP_Query(array('post_type' => 'products', 'posts_per_page' => 3, 'order' => 'DESC')); ?>

        <?php if ($products->have_posts()) : ?>
        <div class="row">
            <?php while ($products->have_posts()):$products->the_post(); ?>


            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h3><?php the_title(); ?></h3>
                    <p><?php do_excerpt(strip_tags(get_the_content()), 18) ?></p>
                    <a class="link" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <!--// end row -->
    </div>
</div>
<!-- End Features -->

<!-- About -->
<?php $hero = get_field('hero', 140); ?>
<div class="content-lg container">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2><?php echo $hero['title']; ?></h2>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <div class="col-sm-7 sm-margin-b-50">
            <div class="margin-b-30">
                <p><?php echo $hero['editor']; ?></p>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <img class="img-responsive" src="<?php echo $hero['img']['url']; ?>" alt="Our Office">
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End About -->

<!-- Service hery josi-->
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

<!-- Testimonials from front page -->

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
        </div>
    </div>
    <!--// end row -->
</div>
<!-- Team -->

<?php $second = get_field('secend', 140); ?>
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2><?php echo $second['title']; ?></h2>
                <p><?php echo $second['descr']; ?></p>
            </div>
        </div>
        <!--// end row -->
        <?php $reviews = new WP_Query(array('post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
        <?php if ($reviews->have_posts()) : ?>
        <div class="row">
            <?php while ($reviews->have_posts()):$reviews->the_post(); ?>

            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".<?php the_field('delay'); ?>s">
                        <a href="<?php the_permalink(); ?>">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Team Image">
                        </a>
                    </div>
                </div>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20"><?php the_field('profes'); ?></span></h4>
                <p><?php do_excerpt(strip_tags(get_the_content()), 18) ?></p>
                <a class="link" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            <!-- End Team -->

<?php endwhile; ?>

        </div>
        <?php endif; ?>
        <!--// end row -->
    </div>
</div>






















<?php get_footer(); ?>
