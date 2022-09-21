<script>mw.moduleCSS("<?php print modules_url(); ?>users/users_modules.css")</script>

<?php if (is_logged() == false): ?>
    <section>
        <div class="container">
            <div class="row" id="form-holder{rand}">
                <div class="col-12 p-5 justify-content-center text-center">
                    <h4><?php _lang("Forgot your password?", "templates/wine"); ?></h4>
                    <label class="control-label mb-4"><?php _lang("Please fill the field below", "templates/wine"); ?></label>

                    <div class="alert alert-mini alert-danger margin-bottom-10" style="margin: 0;display: none;"></div>
                    <br/>
                    <div class="col-6 mx-auto">
                        <form method="post" id="user_forgot_password_form{rand}" action="#" autocomplete="off">
                            <div class="clearfix">
                                <!-- Email -->
                                <div class="form-group">
                                    <?php if (!isset($form_title) or $form_title == false): ?>
                                        <p class=" text-start text-left mb-1"><?php _lang("Enter your username or email", "templates/wine"); ?></p>
                                    <?php else: ?>
                                        <?php print $form_title; ?>
                                    <?php endif; ?>
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>

                                        <input required="" type="text" class="form-control" placeholder="<?php _lang("Email or username", "templates/wine"); ?>" name="username">
                                    </div>
                                    <b class="tooltip tooltip-bottom-right">"<?php _lang("Needed to verify your account", "templates/wine"); ?></b>
                                </div>

                                <p class=" text-start text-left mb-1"><?php _lang("Security code", "templates/wine"); ?></p>
                                <module type="captcha"/>
                            </div>
                            <button class="btn btn-outline-primary btn-lg btn-block my-3 text-center justify-content-center" type="submit"><?php print $form_btn_title; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
