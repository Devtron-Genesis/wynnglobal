<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
            <div class="container">
                <div class="row">
                    <!--<div class="col-12 col-md-1"></div>-->
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-4 footer-widget-areas"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-4 footer-widget-areas"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-4 footer-widget-areas"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    <!--<div class="col-12 col-md-1"></div>-->
                <p class="design-by">Design and developed by <a href="http://dev.devtrongenesis.com/"><b>Devtron Genesis</b></a></p>
                </div>
            </div>




            <div class="site-info slide-up">
                <div class="bottomslider">
                    <div class="contents">
                              <div class="tab"><p><span class="arrow"><i class="fas fa-chevron-up"></i>&nbsp;&nbsp;&nbsp;Individuals&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Corporate Business&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Strategic Partners</span></p></div>
                        <div class="contents-inner">
                            <div class="footer-bg-overlay">
                                <div class="container"> 
                                    <div class="row">
                                        <div class="box box-1 col-12 col-md-3">
                                            <h3>How can we help?</h3>
                                                <a target="_blank" href="http://wynnglobal.com"><img src="/wp-content/uploads/2019/03/Wynn-Global-Inc-Rectangle-Logo-Blue.png" width="75%"></a><br><br><br>
                                                <a target="_blank"  href="http://www.supervalores.gob.pa/"><img src="/wp-content/uploads/2019/03/SMV-Logo.png" width="75%"></a>
                                        </div>
                                        <div class="box box-2 col-12 col-md-3">
                                            <h3>Individuals</h3>
                                            <p>There are many reasons you would choose to use our services as an individual. An investment savings plan for example, will achieve your retirement goals, pay for your child’s university fees or buy you your dream holiday home. Contact us today!</p>
                                        </div>
                                        <div class="box box-3 col-12 col-md-3">
                                            <h3>Corporate Business</h3>
                                            <p>We understand that the financial needs of a corporate business can be complex. Wynn Global can help you diversify your capital across different asset classes, to reduce your overall investment risk. Contact us today!</p>
                                        </div>
                                        <div class="box box-4 col-12 col-md-3">
                                            <h3>Strategic Partners</h3>
                                            <p>Our Strategic Partners gain our expert knowledge, access to our highly sought after product portfolio, operational support, training programmes, conventions and more. Contact us today!</p>
                                        </div> 
                                    </div>
                                </div>
                                <p class="design-by">Design and developed by <a href="http://dev.devtrongenesis.com/"><b>Devtron Genesis</b></a></p>
                            </div>
                        </div>
                        <div class="container" style="position: relative;">
                            <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close .site-info -->
        </div>

<?php }
