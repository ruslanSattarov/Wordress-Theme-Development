
<!--========== FOOTER ==========-->
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                  <?php   wp_nav_menu( array(
                    'theme_location'  => 'left_menu',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.

                    'menu_class'      => 'list-unstyled footer-list',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ) ); ?>

                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->

                    <?php   wp_nav_menu( array(
                        'theme_location'  => 'footer_menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.

                        'menu_class'      => 'list-unstyled footer-list',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) ); ?>

                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Send Us A Note</h2>
                    <form>
                        <?php echo do_shortcode( '[contact-form-7 id="137" title="Contact form 1"]' ); ?>



                    </form>

                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Asentus Logo">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<?php if (is_page('contact')): ?>
    <!--home page custom JS-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.easing.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.back-to-top.js" type="text/javascript"></script>
<!--<script src="/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/js/layout.min.js" type="text/javascript"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/layout.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/wow.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/swiper.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/components/masonry.min.js" type="text/javascript"></script>



<?php wp_footer(); ?>
</body>
<!-- END BODY -->
</html>