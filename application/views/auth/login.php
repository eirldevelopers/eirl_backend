<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Innovation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <a href="index-2.html">
                                    <span><img src="<?php echo base_url('assets/web/images/logo.png'); ?>" alt="" height="40" width="140"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                            </div>
                            <?php if ($this->session->flashdata('message') !== NULL) { ?>
                                <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><?php echo $this->session->flashdata('message')['1']; ?></div>
                            <?php } ?>
                            <?php echo form_open("auth/login"); ?>

                            <div class="form-group mb-3">
                                <label for="emailaddress"><?php echo lang('login_identity_label', 'identity'); ?></label>
                                <?php echo form_input($identity); ?>
                                <?php echo form_error('identity'); ?>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password"><?php echo lang('login_password_label', 'password'); ?></label>
                                <?php echo form_input($password); ?>
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>

                            <?php echo form_close(); ?>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <!-- 
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="<?php echo base_url('auth/forgot_password'); ?>" class="text-white-50 ml-1" style="
                              color: black !important">Forgot your password?</a></p>
                    </div>  -->
                    <!-- end col -->
                    <!-- <div class="col-12 text-center">
                        <p> <a href="<?php echo base_url('auth/create_user'); ?>" class="text-white-50 ml-1" style="
                              color: black !important">Register</a></p>
                    </div>
                </div> -->
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>