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
<div class="footer-div container-fulid">
  <footer>
    <div class="foot-divs container">
      <div class="foot-logo">
        <img src="<?php echo base_url('assets/web/images/footer/footer-logo.png') ?>" alt="">
      </div>
      <div class="foot-body">
        <div class="foot-data">
          <a href="<?php echo base_url('about') ?>">About Us</a>
          <a data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">Contact Us</a>
          <!-- <a href="#">Login</a> -->
          <!-- <a href="#">Sign Up</a> -->
        </div>
        <div class="foot-data">
          <a href="<?php echo base_url('what_we_do') ?>">What we do</a>
          <a href="<?php echo base_url('work_with_us') ?>">Work with us</a>
          <!-- <a href="#">Book a call</a> -->
        </div>
        <div class="foot-data">
          <a href="<?php echo base_url('return_policy') ?>">Return, Refund & Cancelation</a>
          <!-- <a href="#">Shipping & delivery policy</a> -->
          <!-- <a href="#">Pricing Policy</a> -->
        </div>
        <div class="foot-contact">
          <div class="foot-address">
            <img src="<?php echo base_url('assets/web/images/footer/map.png') ?>" alt="">
            <p>2004/C,Vijay Nagar,Jabalpur,482002</p>
          </div>
          <div class="foot-address">
            <img class="phone-foot-img" src="<?php echo base_url('assets/web/images/footer/phone.png') ?>" alt="">
            <a class="index-contact-card" href="tel:919516703294">+91 9516703294</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="end-statement container">
    <div class="terms">
      <a href="<?php echo base_url('terms_and_conditions') ?>">Terms and Conditions</a>
      <a href="<?php echo base_url('privacy_policy') ?>">Privacy Policy</a>
    </div>
    <div class="copyright">
      <p>© 2023 Engineering Innovations Research Lab Pvt Ltd</p>
    </div>
  </div>
</div>
</section>
<div class="talk-to-us">
  <div class="ei-talkto-us offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="ei-talkto-us-head offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Talk to us</h5>
      <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img src="<?php echo base_url('assets/web/images/cross.webp') ?>" alt=""></button>
    </div>
    <div class="ei-talkto-us-body offcanvas-body">
      <form id="talk_to_us_form" enctype="multipart/form-data">
        <div class="talk-to-us-details">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter Full Name" required>
        </div>
        <div class="talk-to-us-details">
          <label for="phone">Phone Number</label>
          <input type="number" name="phone" id="phone" class="only-10-digit" placeholder="Enter Phone Number" required>
        </div>
        <!-- <div class="talk-to-us-details ">
                    <label for="date">Meeting Date and Time</label>
                    <input class="datetime" type="date" name="date" id="date" placeholder="Select Date" required>
                    <input class="datetime" type="time" name="date" id="date" placeholder="Select Date" required>
                </div> -->
        <div class="talk-to-us-details">
          <label for="format">Meeting Format</label>
          <select class="form-select" aria-label="Default select example" id="format" name="format">
            <option selected value="">Online / Offline</option>
            <option value="1">Online</option>
            <option value="2">Offline</option>
          </select>
        </div>
        <div class="talk-to-us-details">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter Email Address" required>
        </div>
        <!-- <div class="talk-to-us-details">
                    <label for="org">Company / Organization</label>
                    <input type="text" name="org" id="org" placeholder="Enter the name of your company" required>
                </div> -->
        <!-- <div class="talk-to-us-details">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="Enter time, eg. 30min/1 hour" required>
                </div> -->
        <div class="talk-to-us-details">
          <label for="purpose">Meeting Purpose/Agenda</label>
          <select class="form-select" aria-label="Default select example" id="purpose" name="purpose">
            <option selected value="">Choose</option>
            <option value="1">Startup Idea</option>
            <option value="2">Website/App services</option>
            <option value="3">Cyber security</option>
            <option value="4">Others</option>
          </select>
        </div>
        <div class="talk-to-us-details">
          <label for="question">Additional Questions</label>
          <textarea name="question" id="question" cols="30" rows="3" placeholder="You can mention your questions for us here." required></textarea>
        </div>
        <div class="form-submit-div">
          <button class="btn form-submit-btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  let base_url = '<?php echo base_url(); ?>';
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo base_url('assets/web/js/aos.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/about-scroll.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/home-vid-animation.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/video.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/digits.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/preloader.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/gallery.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/cv.js') ?>"></script>
<script>
  let index_nav = document.querySelector(".ei-nav")

  window.addEventListener('scroll', () => {
    if (window.scrollY >= 300) {
      index_nav.classList.add("ei-nav-scrolled")
    } else if (window.scrollY < 300) {
      index_nav.classList.remove("ei-nav-scrolled")
    }
  })
</script>
<script>
  let index_mob_nav = document.querySelector(".mobile-logo")

  window.addEventListener('scroll', () => {
    if (window.scrollY >= 20) {
      index_mob_nav.classList.add("mob-nav-scrolled")
    } else if (window.scrollY < 20) {
      index_mob_nav.classList.remove("mob-nav-scrolled")
    }
  })
</script>
<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel').owlCarousel({
      items: 3, // Set the number of visible items in the carousel
      loop: true,
      center: true,
      margin: 10,
      autoplay: false,
      autoplayTimeout: 3000, // Adjust as needed
      responsive: {
        0: {
          items: 1, // Number of items to show on small screens
        },
        768: {
          items: 3, // Number of items to show on larger screens
        },
      },
    });

    // Play the first video by default
    var firstVideo = $('.carousel-video').eq(0);
    firstVideo[0].play();

    // When a video comes into center view, play it
    owl.on('translated.owl.carousel', function(event) {
      var currentItem = event.item.index;
      var videos = $('.carousel-video');

      // Pause all videos
      videos.each(function() {
        this.pause();
      });

      // Play the video in the center
      var centerVideo = videos.eq(currentItem);
      centerVideo[0].play();
    });
  });

  $(".only-10-digit").on("input", function() {
    var input = $(this).val();
    // Remove non-numeric characters using a regular expression
    var sanitizedInput = input.replace(/[^0-9]/g, "");
    // Ensure the length does not exceed 10 characters
    sanitizedInput = sanitizedInput.slice(0, 10);
    // Update the input field with the sanitized input
    $(this).val(sanitizedInput);
  });

  $(document).on('submit', '#work_with_us_form', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: base_url + 'welcome/work_with_us',
      type: 'POST',
      data: formData,
      dataType: 'json',
      success: function(response) {
        if (response.status) {
          $("#work_with_us_form")[0].reset()
          $(".file_name_class").html('')
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