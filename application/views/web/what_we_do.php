<div class="mobile-logo fixed-top ">
  <a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/web/images/logo.png') ?>" alt=""></a>
  <div class="dropdown">
    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url('assets/web/images/hamburger.png') ?>" class="hamburger_image" style="height:30px"/>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="<?php echo base_url('privacy_policy') ?>">Privacy Policy</a></li>
      <li><a class="dropdown-item" href="<?php echo base_url('terms_and_conditions') ?>">Terms And Conditions</a></li>
      <li><a class="dropdown-item" href="<?php echo base_url('return_policy') ?>">Return Policy</a></li>
    </ul>
  </div>
</div>
<section class="ei-about-section">
  <div class="what_we_do_head container" data-aos="fade-down">
    <h1>It is our mission to shape products and services that improve the lives of millions every single day.</h1>
    <h4>Our approach is simple.</h4>
  </div>
  <div class="what_we_do_body container">
    <div class="what_we_do_body_row row">
      <div class="col-lg-6 col-md-12" data-aos="slide-right">
        <div class="what_we_do_body_img">
          <img src="<?php echo base_url('assets/web/images/what_we_do.webp') ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-12" data-aos="slide-left">
        <div class="what_we_do_body_data row">
          <div class="what_we_do_details col-lg-12 col-md-6">
            <h4>Analyze</h4>
            <p>By exploring and investigating, we uncover insights and shape brands, websites, and products.</p>
          </div>
          <div class="what_we_do_details col-lg-12 col-md-6">
            <h4>Design</h4>
            <p>With our team of designers & developers, we create unique and memorable visual brand identities and design people-friendly digital experiences.</p>
          </div>
          <div class="what_we_do_details col-lg-12 col-md-6">
            <h4>Craft</h4>
            <p>We create websites and products that enhance functionality, ensure reliability, and adapt over time.</p>
          </div>
          <div class="what_we_do_details col-lg-12 col-md-6">
            <h4>Enhance</h4>
            <p>Our design approach is constantly improving along with the evolving world and the enterprises we work with.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="ei-contact-foot">
      <button id="desktop-talk-to-us" class="btn ei-contact-foot-btn" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">Talk to us</button>
      <a href="<?php echo base_url('tak_to_us') ?>" id="mobile-talk-to-us" class="btn ei-contact-foot-btn">Talk to us</a>
    </div>
    <div class="what_we_do_work container" id="our_blogs">
      <h1 data-aos="fade-up">Explore some of our work</h1>

      <?php
      // print_r($blogs);
      if ($blogs) {
        $i = 1;
        foreach ($blogs as $blog) {
          if ($i % 2 != 0) {
      ?>
            <div class="what_do_do_work_row row">
              <div class="col-lg-7 col-md-7 col-sm-12" data-aos="slide-right">
                <div class="what_we_do_work_img">
                  <img src="<?php echo base_url('uploads/'.$blog->blog_image) ?>" alt="">
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12" data-aos="slide-left">
                <div class="what_we_do_work_data">
                  <h1><?php echo $blog->blog_name ?></h1>
                  <p class="what_do_do_work_para"><?php echo $blog->blog_description ?></p>
                </div>
              </div>
            </div>
          <?php

          } else {
          ?>
            <div class="what_do_do_work_row mob-2-data row">
              <div class="col-lg-5 col-md-5 col-sm-12" data-aos="slide-right">
                <div class="what_we_do_work_data">
                  <h1><?php echo $blog->blog_name ?></h1>
                  <p class="what_do_do_work_para"><?php echo $blog->blog_description ?></p>
                </div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12" data-aos="slide-left">
                <div class="what_we_do_work_img">
                  <img src="<?php echo base_url('uploads/'.$blog->blog_image) ?>" alt="">
                </div>
              </div>
            </div>
      <?php
          }
          $i++;
        }
      }
      ?>
    </div>
  </div>