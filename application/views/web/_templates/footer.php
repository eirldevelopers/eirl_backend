<div class="mob-bottom-bar">
  <div class="ei-bottom-bar-options">
    <a href="./index.html"><img src="<?php echo base_url('/assets/web/images/bottom-bar/home-active.svg') ?>" alt=""></a>
    <span class="bottom-bar-active">Home</span>
  </div>
  <div class="ei-bottom-bar-options">
    <a href="./about_us.html"><img src="./assets/images/bottom-bar/about.svg" alt=""></a>
    <span>About</span>
  </div>

  <div class="ei-bottom-bar-options">
    <a href="./what_we_do.html"><img src="<?php echo base_url('/assets/web/images/bottom-bar/work.svg') ?>" alt=""></a>
    <span>Work</span>
  </div>
  <div class="ei-bottom-bar-options">
    <a href="./work-with-us.html"><img src="<?php echo base_url('/assets/web/images/bottom-bar/careers.svg') ?>" alt=""></a>
    <span>Careers</span>
  </div>
  <div class="ei-bottom-bar-options">
    <a href="./talk-to-us.html"><img src="<?php echo base_url('/assets/web/images/bottom-bar/contact.svg') ?>" alt=""></a>
    <span>Contact</span>
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
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
          <a href="#">Login</a>
          <a href="#">Sign Up</a>
        </div>
        <div class="foot-data">
          <a href="#">What we do</a>
          <a href="#">Work with us</a>
          <a href="#">Book a call</a>
        </div>
        <div class="foot-data">
          <a href="#">Return, Refund & Cancelation</a>
          <a href="#">Shipping & delivery policy</a>
          <a href="#">Pricing Policy</a>
        </div>
        <div class="foot-contact">
          <div class="foot-address">
            <img src="<?php echo base_url('assets/web/images/footer/map.png') ?>" alt="">
            <p>123, First street, third building, area name, state name, code, country</p>
          </div>
          <div class="foot-address">
            <img class="phone-foot-img" src="<?php echo base_url('assets/web/images/footer/phone.png') ?>" alt="">
            <p>1234567891, 1234567891</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="end-statement container">
    <div class="terms">
      <a href="#">Terms and Conditions</a>
      <a href="#">Privacy Policy</a>
    </div>
    <div class="copyright">
      <p>© 2023 Engineering Innovations & Research Lab Centre</p>
    </div>
  </div>
</div>
</section>
<div class="talk-to-us">
  <div class="ei-talkto-us offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="ei-talkto-us-head offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Talk to us</h5>
      <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img src="./assets/images/cross.png" alt=""></button>
    </div>
    <div class="ei-talkto-us-body offcanvas-body">
      <form action="/">
        <div class="talk-to-us-details">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter Full Name" required>
        </div>
        <div class="talk-to-us-details">
          <label for="phone">Phone Number</label>
          <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" required>
        </div>
        <!-- <div class="talk-to-us-details ">
                    <label for="date">Meeting Date and Time</label>
                    <input class="datetime" type="date" name="date" id="date" placeholder="Select Date" required>
                    <input class="datetime" type="time" name="date" id="date" placeholder="Select Date" required>
                </div> -->
        <div class="talk-to-us-details">
          <label for="format">Meeting Format</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Online / Offline</option>
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
          <select class="form-select" aria-label="Default select example">
            <option selected>Choose</option>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?php echo base_url('assets/web/js/aos.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/about-scroll.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/home-vid-animation.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/video.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/digits.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/preloader.js') ?>"></script>
<script src="<?php echo base_url('assets/web/js/gallery.js') ?>"></script>
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
</script>


</body>

</html>