<?php get_header('products');

/* Template Post Type: team*/

?>

<!-- General Questions -->
<div class="content-lg container layout_bg">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <div class="col-sm-7 sm-margin-b-50">
            <div class="margin-b-30">
               <?php the_content(); ?>
                </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt=" <?php the_content(); ?>">
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End General Questions -->



















<?php get_footer(); ?>
