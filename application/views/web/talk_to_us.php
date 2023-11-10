<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EIRL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url('assets/web/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/web/css/about.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/web/css/talk.css') ?>">
</head>

<body>
  <div class="preloader">
    <span class="loader"></span>
  </div>
  <div class="talk">
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
      <div class="talk-to-us-div container">
        <div class="ei-about-head head-1">
          <h1>Talk to us</h1>
        </div>
        <div class="mobile-talk-to-us-div ei-talkto-us-body">
          <form id="talk_to_us_form" enctype="multipart/form-data">
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Enter Full Name" required>
            </div>
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="phone">Phone Number</label>
              <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" required>
            </div>
            <!-- <div class="mobile-talk-to-us talk-to-us-details ">
                        <label for="date">Meeting Date and Time</label>
                        <input class="datetime" type="date" name="date" id="date" placeholder="Select Date" required>
                        <input class="datetime" type="time" name="date" id="date" placeholder="Select Date" required>
                    </div> -->
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="format">Meeting Format</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Online / Offline</option>
                <option value="1">Online</option>
                <option value="2">Offline</option>
              </select>
            </div>
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="email">Email Address</label>
              <input type="email" name="email" id="email" placeholder="Enter Email Address" required>
            </div>
            <!-- <div class="mobile-talk-to-us talk-to-us-details">
                        <label for="org">Company / Organization</label>
                        <input type="text" name="org" id="org" placeholder="Enter the name of your company" required>
                    </div> -->
            <!-- <div class="mobile-talk-to-us talk-to-us-details">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" id="duration" placeholder="Enter time, eg. 30min/1 hour" required>
                    </div> -->
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="purpose">Meeting Purpose/Agenda</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Choose</option>
                <option value="1">Startup Idea</option>
                <option value="2">Website/App services</option>
                <option value="3">Cyber security</option>
                <option value="4">Others</option>
              </select>
            </div>
            <div class="mobile-talk-to-us talk-to-us-details">
              <label for="question">Additional Questions</label>
              <textarea name="question" id="question" cols="30" rows="3" placeholder="You can mentions your questions for us here." required></textarea>
            </div>
            <div class="form-submit-div">
              <button class="btn form-submit-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="mob-bottom-bar">
        <div class="ei-bottom-bar-options">
          <?php
          if ($this->router->fetch_method() == 'index') {
          ?>
            <a href="<?php echo base_url('home')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/home-active.svg') ?>" alt=""></a>
          <?php
          } else {
          ?>
            <a href="<?php echo base_url('home')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/home.svg') ?>" alt=""></a>
          <?php
          }
          ?>
          <a href="<?php echo base_url('home')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/' . $this->router->fetch_method() == 'index' ? 'home-active.svg' : 'home.svg') ?>" alt=""></a>
          <span class="<?php echo $this->router->fetch_method() == 'index' ? 'bottom-bar-active' : ''; ?>">Home</span>
        </div>

        <div class="ei-bottom-bar-options">
          <?php
          if ($this->router->fetch_method() == 'load_about') {
          ?>
            <a href="<?php echo base_url('about')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/about-active.svg') ?>" alt=""></a>
          <?php
          } else {
          ?>
            <a href="<?php echo base_url('about')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/about.svg') ?>" alt=""></a>
          <?php
          }
          ?>
          <span class="<?php echo $this->router->fetch_method() == 'load_about' ? 'bottom-bar-active' : ''; ?>">About</span>
        </div>

        <div class="ei-bottom-bar-options">
          <?php
          if ($this->router->fetch_method() == 'load_what_we_do') {
          ?>
            <a href="<?php echo base_url('what_we_do')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/work-active.svg') ?>" alt=""></a>
          <?php
          } else {
          ?>
            <a href="<?php echo base_url('what_we_do')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/work.svg') ?>" alt=""></a>
          <?php
          }
          ?>
          <span class="<?php echo $this->router->fetch_method() == 'load_what_we_do' ? 'bottom-bar-active' : ''; ?>">Work</span>
        </div>
        <div class="ei-bottom-bar-options">
          <?php
          if ($this->router->fetch_method() == 'load_work_with_us') {
          ?>
            <a href="<?php echo base_url('work_with_us')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/career-active.svg') ?>" alt=""></a>
          <?php
          } else {
          ?>
            <a href="<?php echo base_url('work_with_us')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/careers.svg') ?>" alt=""></a>
          <?php
          }
          ?>
          <span class="<?php echo $this->router->fetch_method() == 'load_work_with_us' ? 'bottom-bar-active' : ''; ?>">Careers</span>
        </div>
        <div class="ei-bottom-bar-options">
          <?php
          if ($this->router->fetch_method() == 'load_talk_to_us') {
          ?>
            <a href="<?php echo base_url('tak_to_us')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/contact-active.svg') ?>" alt=""></a>
          <?php
          } else {
          ?>
            <a href="<?php echo base_url('tak_to_us')  ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/contact.svg') ?>" alt=""></a>
          <?php
          }
          ?>
          <span class="<?php echo $this->router->fetch_method() == 'load_talk_to_us' ? 'bottom-bar-active' : ''; ?>">Contact</span>
        </div>
      </div>
    </section>
  </div>
  <div class="rotate">
    <img src="<?php echo base_url('assets/web/images/rotate.gif') ?>" alt="">
    <h3>Uh oh! Seems like you rotated your phone.</h3>
    <p>Kindly flip back to portrait mode to view our website.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?php echo base_url('assets/web/js/digits.js') ?>"></script>
  <script src="<?php echo base_url('assets/web/js/preloader.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let base_url = '<?php echo base_url(); ?>';
    $(document).on('submit', '#talk_to_us_form', function(e) {
      e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
        url: base_url + 'welcome/talk_to_us',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.status) {
            $("#talk_to_us_form")[0].reset()
            Swal.fire({
              text: response.message,
              icon: "success"
            });
          } else {
            Swal.fire({
              text: response.message,
              icon: "error"
            });
          }
        },
        cache: false,
        contentType: false,
        processData: false
      });
    })
  </script>
</body>

</html>