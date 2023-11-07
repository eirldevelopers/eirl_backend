<section class="sign_up_section1 container">
    <?php if ($this->session->flashdata('message') !== NULL) { ?>
        <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php print_r($this->session->flashdata('message')['1']); ?>
        </div>
    <?php } ?>
    <div class="signup-row row">
        <div class="data col-lg-7">
            <div id="page3" class="data_step_3">
                <h1>Verify Mobile Number</h1>
                <div class="form-email">
                    <?php echo form_open('mobile_verification') ?>
                    <label for="verify_email">Verify Mobile Number</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><img src="./images/sign_up/phone.png" alt=""></span>
                        <input id="verify_number" type="number" name="verify_number" class="form-control" placeholder="Mobile Number" value="<?php echo ($this->session->flashdata('mobile') !== NULL) ? $this->session->flashdata('mobile') : '' ?>">
                        <button class="btn otp-btn" type="button" id="button-addon2">Get OTP</button>
                    </div>
                    <div class="otp">
                        <label for="otp">Mobile Number OTP</label>
                        <div>
                            <div class="ap-otp-inputs" data-username="otibij" data-channel="email" data-nonce="0-8bf87e338f" data-length="6" data-form="registration">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="0" name="otp_1">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="1" name="otp_2">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="2" name="otp_3">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="3" name="otp_4">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="4" name="otp_5">
                                <input class="ap-otp-input" type="tel" maxlength="1" data-index="5" name="otp_6">
                            </div>
                        </div>
                    </div>
                    <div class="verify_btn">
                        <button id="phone" class="btn btn-next">VERIFY</button>
                    </div>
                    <?php echo form_close() ?>

                </div>
            </div>
        </div>
        <div class="image col-lg-5">
            <img src="<?php echo base_url('assets/img/login/login.png') ?>" alt="">
        </div>
    </div>
</section>