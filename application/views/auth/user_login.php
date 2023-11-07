    <section class="container login-section">
      <?php if ($this->session->flashdata('message') !== NULL) { ?>
        <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <?php print_r($this->session->flashdata('message')['1']); ?>
        </div>
      <?php } ?>
      <div class="login-row row">
        <div class="login-img col-lg-7">
          <img src="<?php echo base_url('assets/img/login/login.png') ?>" alt="" />
        </div>
        <div class="login-data col-lg-5">
          <div class="login">
            <h1>LOGIN</h1>
            <?php echo form_open('login') ?>
            <div class="number">
              <label for="number">Mobile Number</label>
              <div class="num-input input-group mb-3">
                <span class="number-input input-group-text" id="basic-addon1">
                  <img src="<?php echo base_url('assets/img/login/phone.png') ?>" alt="" />
                </span>
                <input id="verify_number" type="text" name="verify_number" class="num-form form-control" placeholder="Mobile Number" value="<?php echo set_value('verify_number') ?>" />
                <span class="number-btn input-group-text" id="basic-addon1"><button class="btn" type="button">GET OTP</button></span>
                <?php echo form_error('verify_number') ?>;
              </div>
            </div>
            <div class="otp">
              <label for="otp">Phone OTP</label>
              <div>
                <div class="ap-otp-inputs" data-username="otibij" data-channel="email" data-nonce="0-8bf87e338f" data-length="6" data-form="registration">
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="0" name="otp_1" />
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="1" name="otp_2" />
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="2" name="otp_3" />
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="3" name="otp_4" />
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="4" name="otp_5" />
                  <input class="ap-otp-input" type="tel" maxlength="1" data-index="5" name="otp_6" />
                </div>
              </div>
            </div>
            <button class="btn login-btn" type="submit">LOGIN</button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </section>