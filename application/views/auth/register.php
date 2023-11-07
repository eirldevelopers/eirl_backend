<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="sign_up_section1 container">
    <?php if ($this->session->flashdata('message') !== NULL) { ?>
        <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php print_r($this->session->flashdata('message')['1']); ?>
        </div>
    <?php } ?>
    <div class="signup-row row">
        <div class="data col-lg-7">
            <div id="page1" class="data_step_1">
                <h1>REGISTER</h1>
                <?php echo form_open("auth/register"); ?>
                <div class="data-row row">
                    <div class="col-lg-6 information">
                        <label for="first_name">First Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>" alt=""></span>
                            <input type="text" name="first_name" class="form-control text_input" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
                        </div>
                        <?php echo form_error('first_name') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="last_name">Last Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>" alt=""></span>
                            <input type="text" name="last_name" class="form-control text_input" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">
                        </div>
                        <?php echo form_error('last_name') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="last_name">Mobile</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>"></span>
                            <input type="text" name="mobile" value="<?php echo set_value('mobile'); ?>" placeholder="Enter Mobile" class="form-control">
                        </div>
                        <?php echo form_error('mobile') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="last_name">Email</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/mail.png') ?>"></span>
                            <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Enter Email">
                        </div>
                        <?php echo form_error('email') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="dob">Date of Birth</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/calendar.png') ?>" alt=""></span>
                            <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control">
                        </div>
                        <?php echo form_error('dob') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="gender">Gender</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>" alt=""></span>
                            <select class="form-select" value="<?php echo set_value('first_name'); ?>" id="inputGroupSelect03" name="gender">
                                <option value="" selected>Gender</option>
                                <option value="1" <?php echo  set_select('Gender', '1'); ?>>Male</option>
                                <option value="2" <?php echo  set_select('Gender', '2'); ?>>Female</option>
                                <option value="3" <?php echo  set_select('Gender', '3'); ?>>Other</option>
                            </select>
                        </div>
                        <?php echo form_error('gender') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="pass">Password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>" alt=""></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <?php echo form_error('password') ?>
                    </div>
                    <div class="col-lg-6 information">
                        <label for="c_password">Confirm Password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url('assets/img/sign_up/user.png') ?>" alt=""></span>
                            <input type="password" name="c_password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <?php echo form_error('c_password') ?>
                    </div>
                </div>
                <button id="first_next" class="btn btn-next">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="image col-lg-5">
            <img src="<?php echo base_url('assets/img/login/login.png') ?>" alt="">
        </div>
    </div>
</section>