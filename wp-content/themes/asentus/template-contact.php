<?php
/*
		Template Name: contact
	*/

get_header();

get_template_part('template/main', 'block');
?>


<div class="section-seperator">
    <div class="content-lg container">

        <?php if( have_rows('main') ): ?>
        <div class="row">



            <?php while( have_rows('main') ): the_row();
                $title = get_sub_field('title');
                $edit = get_sub_field('edit');
                $prof = get_sub_field('prof');
                $phone = get_sub_field('phone');
                $mail = get_sub_field('mail');
                $delay = get_sub_field('duration');
                ?>

            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".<?php echo $delay; ?>s">
                    <h3><a href="#"><?php echo $title; ?></a> <span class="text-uppercase margin-l-20"><?php echo $prof; ?></span></h3>
                    <p><?php echo $edit; ?></p>
                    <ul class="list-unstyled contact-list">
                        <li><i class="margin-r-10 color-base icon-call-out"></i> <?php echo $phone; ?></li>
                        <li><i class="margin-r-10 color-base icon-envelope"></i> <?php echo $mail; ?></li>
                    </ul>
                </div>
            </div>
                <?php endwhile;?>

        </div>
        <?php endif;?>
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->

<!-- Google Map -->
<div id="map" class="map height-400"></div>

<!-- Promo Section -->
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
