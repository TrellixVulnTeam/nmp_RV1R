<?php $pods_settings = pods('website_settings'); ?>
<script>
    window.ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';
</script>
<div id="footer-simple" class="navbar navbar-expand navbar-dark">
    <div class="container flex-column flex-md-row my-3">
        <div class="footer_holder">
            <div class="row footer_social_holder">
                <div class="col-md-2 col-12">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="col-md-6 col-12">
                    <div class="footer-social-icons">
                        <ul class="social-media-icons-sections mb-3">
                            <li class="social-media-icon"><a target="_blank" href="https://www.facebook.com/"
                                                             title=""><i class="fab fa-facebook-square"
                                                                         aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://twitter.com/" title=""><i
                                            class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://www.youtube.com/" title=""><i
                                            class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="social-media-icon"><a target="_blank" href="https://www.instagram.com/"
                                                             title="Follow us on Instagram"><i class="fab fa-instagram"
                                                                                               aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control fnt-1-2 border-0" placeholder="Enter email">
                        <button class="btn btn-subscribe fnt-1-2" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="address text-center">
                    <?php echo $pods_settings->display('address'); ?>
                </div>
            </div>
            <div class="row">
                <?php
                //                wp_nav_menu(
                //                    array(
                //                        'theme_location' => 'footer',
                //                        'depth' => 1,
                //                        'container' => 'nav',
                //                        'container_class' => 'mt-5 mt-md-0 ms-md-auto',
                //                        'container_id' => '',
                //                        'menu_class' => 'footer-menu navbar-nav',
                //                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                //                        'walker' => new WP_Bootstrap_Navwalker(),
                //                    )
                //                );

                ?>
            </div>
        </div>
    </div>

</div> <!-- #footer-simple -->
<div class="floating-form" id="contact_form">
    <div class="contact-opener">Enquiry</div>
    <div class="floating-form-heading">Please Contact Us</div>
    <div id="contact_results"></div>
    <div id="contact_body">
        <label class="w-100"><span>Name <span class="required">*</span></span>
            <input type="text" name="name" id="name" required="true" class="form-control input-field">
        </label>
        <label class="w-100"><span>Email <span class="required">*</span></span>
            <input type="email" name="email" required="true" class="form-control input-field">
        </label>
        <label class="w-100"><span>Phone <span class="required">*</span></span>
            <input type="text" name="phone1" maxlength="13" placeholder="+91" required="true"
                   class="form-control tel-number-field">
        </label>
        <label class="w-100" for="field5"><span>Message <span class="required">*</span></span>
            <textarea name="message" id="message" class="form-control textarea-field" required="true"></textarea>
        </label>
        <label class="w-100">
            <input type="submit" id="floating_enq_submit" class="btn btn-primary" value="Submit">
        </label>
    </div>
</div>


