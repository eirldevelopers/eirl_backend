<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EIRL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url('assets/web/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/web/css/about.css') ?>">
</head>

<body>
  <div class="preloader">
    <span class="loader"></span>
  </div>
  <nav class="nav-other container-fulid navbar navbar-expand-md fixed-top">
    <div class="ei-nav-container container">
      <a class="ei-navbrand navbar-brand" href="./index.html"><img src="./assets/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="ei-nav-options navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('what_we_do') ?>">What we do</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('work_with_us') ?>">Work With Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">Talk to Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="mobile-logo fixed-top">
    <a href="./index.html"><img src="<?php echo base_url('assets/web/images/logo.png') ?>" alt=""></a>
  </div>
  <section class="ei-about-section">
    <div class="ei-about-div container">
      <div class="ei-work-row row">
        <div class="ei-about-head head-1">
          <h1 data-aos="fade-down">Work With Us</h1>
        </div>
        <div class="ei-about-col col-lg-7" data-aos="slide-right">
          <div class="ei-about-data data-1">
            <p>We are a team of dedicated and imaginative designers & developers who are continuously seeking new talent to join our ranks. We strongly believe that the most exceptional works are born out of collaboration, and we are eager to find talented individuals who share our enthusiasm.</p>
            <b>
              <p>Our Culture</p>
            </b>
            <p>In our workplace, we prioritize creating an environment that nurtures creativity and fosters innovation. We encourage our team members to bravely venture beyond their comfort zones and explore new horizons in their work. Collaboration lies at the heart of our philosophy, and we constantly seek individuals who possess exceptional talent and a genuine passion for creating solutions.</p>
            <b>
              <p>Our Values</p>
            </b>
            <p>Our values form the backbone of everything we do. We not only strive to craft visually stunning designs but also aim for functionality and purpose. We believe in addressing real-world problems and are user-centric in our approach. Moreover, our commitment to inclusivity drives us to create designs that are accessible to everyone. </p>
            <b>
              <p>Join Our Team</p>
            </b>
            <p>If you possess an unwavering passion for coding & design and yearn to collaborate with like-minded individuals, we would be thrilled to hear from you. We are always on the lookout for talented designers to become part of our team. Kindly send your resume and portfolio to info@uiuxdesignstudio.com Alternatively you can checkout our current job posting on <a href="#"><b>LinkedIn here.</b></a> </p>
          </div>
        </div>
        <div class="ei-about-col col-lg-5" data-aos="slide-left">
          <div class="ei-about-image work-with-us-img">
            <img src="<?php echo base_url('assets/web/images/work-with-us/work-with-us.png') ?>" alt="">
          </div>
          <div class="ei-work-with-us-socials">
            <h3>Our Socials</h3>
            <div class="social-icons-row row">
              <div class="social-icons col-lg-5">
                <img src="<?php echo base_url('assets/web/images/work-with-us/social/instagram.svg') ?>" alt="">
                <span>Add Link Here</span>
              </div>
              <div class="social-icons col-lg-5">
                <img src="<?php echo base_url('assets/web/images/work-with-us/social/facebook.svg') ?>" alt="">
                <span>Add Link Here</span>
              </div>
              <div class="social-icons col-lg-5">
                <img src="<?php echo base_url('assets/web/images/work-with-us/social/linkedin.svg') ?>" alt="">
                <span>Add Link Here</span>
              </div>
              <div class="social-icons col-lg-5">
                <img src="<?php echo base_url('assets/web/images/work-with-us/social/whatsapp.svg') ?>" alt="">
                <span>Add Link Here</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form>
        <div class="ei-work-form row">
          <div class="ei-about-head head-1" data-aos="fade-up">
            <h1>Apply now</h1>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Enter Full Name" required>
            </div>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label for="email">Email Address</label>
              <input type="email" name="email" id="email" placeholder="Enter Email address" required>
            </div>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label for="number">Contact Number</label>
              <input id="phone" type="number" class="only-10-digit" name="number" id="number" placeholder="Enter Contact Number" required>
            </div>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label for="profile">Select Job Profile</label>
              <select class="form-select" aria-label="Default select example" id="profile" name="profile" required>
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label for="experience">Select Experience</label>
              <input type="number" name="experience" id="experience" placeholder="Enter Experience" required>
            </div>
          </div>
          <div class="ei-work-form-data col-lg-6 col-md-6">
            <div class="ei-work-form-details">
              <label class="resume-class" for="cv">Upload Resume/CV
                <div class="resume-upload"><span>Choose File</span></div>
              </label>
              <input style="display: none;" type="file" name="cv" id="cv" placeholder="Choose File" required>
            </div>
          </div>
          <div class="ei-work-form-submit">
            <button class="btn ei-contact-foot-btn form-submit-btn">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="talk-to-us">
      <div class="ei-talkto-us offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="ei-talkto-us-head offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">Talk to us</h5>
          <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img src="<?php echo base_url('assets/web/images/cross.png') ?>" alt=""></button>
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
    <div class="mob-bottom-bar">
      <div class="ei-bottom-bar-options">
        <a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/home.svg') ?>" alt=""></a>
        <span>Home</span>
      </div>
      <div class="ei-bottom-bar-options">
        <a href="<?php echo base_url('about') ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/about.svg') ?>" alt=""></a>
        <span>About</span>
      </div>

      <div class="ei-bottom-bar-options">
        <a href="<?php echo base_url('what_we_do') ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/work.svg') ?>" alt=""></a>
        <span>Work</span>
      </div>
      <div class="ei-bottom-bar-options">
        <a href="<?php echo base_url('work_with_us') ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/career-active.svg') ?>" alt=""></a>
        <span class="bottom-bar-active">Careers</span>
      </div>
      <div class="ei-bottom-bar-options">
        <a href="<?php echo base_url('tak_to_us') ?>"><img src="<?php echo base_url('assets/web/images/bottom-bar/contact.svg') ?>" alt=""></a>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="<?php echo base_url('assets/web/js/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/web/js/digits.js') ?>"></script>
  <script src="<?php echo base_url('assets/web/js/preloader.js') ?>"></script>
</body>

</html>