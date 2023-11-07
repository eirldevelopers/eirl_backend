<nav class="navbar navbar-expand-lg bg-body-tertiary container">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo.png') ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('welcome') ?>">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('labs') ?>">Labs</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('about_us') ?>">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contact_us') ?>">Contact us</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="search-input form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="search-btn btn btn-outline-success" type="submit"><img src="<?php echo base_url('assets/img/search.png') ?>" alt=""></button>
            </form> -->
            <div class="dropdown">
                <button class="btn user-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="user" src="<?php echo  base_url('assets/img/vector.png') ?>" alt="">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url('login') ?>">Login</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('register') ?>">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>