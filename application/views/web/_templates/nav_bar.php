<nav class="ei-nav container-fulid navbar navbar-expand-md fixed-top">
  <div class="ei-nav-container">
    <a class="ei-navbrand navbar-brand" href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('/assets/web/images/logo.png') ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="ei-nav-options navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo $this->router->fetch_method() == 'index' ? 'bottom-bar-active' : '' ?>" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $this->router->fetch_method() == 'load_about' ? 'bottom-bar-active' : '' ?>" href="<?php echo base_url('about') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $this->router->fetch_method() == 'load_what_we_do' ? 'bottom-bar-active' : '' ?>" href="<?php echo base_url('what_we_do') ?>">What we do</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $this->router->fetch_method() == 'load_work_with_us' ? 'bottom-bar-active' : '' ?>" href="<?php echo base_url('work_with_us') ?>">Work With Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $this->router->fetch_method() == 'load_talk_to_us' ? 'bottom-bar-active' : '' ?>" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">Talk to Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>