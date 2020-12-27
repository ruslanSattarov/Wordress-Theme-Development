<?php
/*
		Template Name: pricing
	*/

get_header();

get_template_part('template/main', 'block');
?>





<!--========== PAGE LAYOUT ==========-->
<!-- Pricing -->
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



















<?php get_footer(); ?>
