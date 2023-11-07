<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="<?php echo base_url('admin/dashboard'); ?>" class="<?php echo $this->router->fetch_class() == 'dashboard' ? 'active' : ''; ?>">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('projects'); ?>" class="<?php echo $this->router->fetch_class() == 'project' ? 'active' : ''; ?>">
                        <i class="fe-home"></i>
                        <span> Manage Project</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('query'); ?>" class="<?php echo $this->router->fetch_class() == 'contact_us' ? 'active' : ''; ?>">
                        <i class="fe-home"></i>
                        <span> Contact US</span>
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