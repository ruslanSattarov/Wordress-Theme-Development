<?php
/*
		Template Name: faq
	*/

get_header();

get_template_part('template/main', 'block');
?>


<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <?php if (have_rows('six_icon', 7)): ?>
        <div class="row row-space-1 margin-b-2">
            <?php while( have_rows('six_icon', 7) ): the_row();
                $name = get_sub_field('name');
                $delay = get_sub_field('delay');
                $descr = get_sub_field('descr');
                ?>

                <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="service" data-height="height">
                        <h3><?php echo $name; ?></h3>
                        <p class="margin-b-5"><?php echo $descr; ?></p>

                    </div>
                </div>
            </div>
<?php endwhile; ?>






        </div>
        <?php endif; ?>
        <!--// end row -->
    </div>
</div>
<!-- End Service -->

<!-- General Questions -->
<?php $hero = get_field('hero');  ?>
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
<!-- End General Questions -->

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
<!--========== END PAGE LAYOUT ==========-->



















<?php get_footer(); ?>
