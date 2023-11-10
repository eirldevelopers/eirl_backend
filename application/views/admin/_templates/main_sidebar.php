<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="<?php echo base_url('dashboard'); ?>" class="<?php echo $this->router->fetch_class() == 'dashboard' ? 'active' : ''; ?>">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('job_applied'); ?>" class="<?php echo $this->router->fetch_method() == 'job_applied' ? 'active' : ''; ?>">
                        <i class="fe-home"></i>
                        <span>Job Applied</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('queries'); ?>" class="<?php echo $this->router->fetch_method() == 'queries' ? 'active' : ''; ?>">
                        <i class="fe-home"></i>
                        <span>Queries</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('blogs'); ?>" class="<?php echo $this->router->fetch_class() == 'blogs' ? 'active' : ''; ?>">
                        <i class="fe-home"></i>
                        <span>Blogs</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->