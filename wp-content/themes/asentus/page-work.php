<?php
/*
		Template Name: work
	*/

get_header();

get_template_part('template/main', 'block');
?>
<?php $hero = get_field('hero'); ?>
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2><?php echo $hero['title']; ?></h2>
            <p><?php echo $hero['descr']; ?></p>
        </div>
    </div>
    <!--// end row -->
    <?php $products = new WP_Query(array('post_type' => 'products', 'posts_per_page' => 6, 'order' => 'ASC')); ?>

    <?php if ($products->have_posts()) : ?>
    <div class="row">
    <div class="row margin-b-50">
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



    </div>
        <?php endif; ?>
    <!--// end row -->
</div>
<!-- End Our Exceptional Solutions -->

<!-- Clients -->
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
</div>



<!-- End Clients -->

<!-- Promo Section -->
<?php $secod = get_field('secod', 179); ?>
<div class="promo-section overflow-h">
    <div class="container">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <h2><?php echo $secod['title']; ?></h2>
                        <p><?php echo $secod['editor']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section-img-right">
        <img class="img-responsive" src="<?php echo $secod['img']['url']; ?>" alt="Content Image">
    </div>
</div>


















<?php get_footer(); ?>
