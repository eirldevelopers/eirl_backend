<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="<?php echo base_url('assets/frameworks/admin/images/default.png'); ?>" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <!-- <a href="<?php echo base_url('auth/change_password'); ?>" class="dropdown-item notify-item">
                    <i class="ti-key m-r-10 text-custom"></i>
                    <span>Change Password</span>
                </a> -->

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="#" class="logo text-center">
            <span class="logo-lg">
                <img src="<?php echo base_url('assets/web/images/logo.png'); ?>" alt="" height="40px" style="border: 1px solid #FFF;">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
        <li>
            <!-- notification bell -->
            <!-- <div class="dropdown" style="margin-top: 22px;margin-left: 20px;">
                <a class="me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div> -->

            <div class="dropdown" style=" margin-top: 15px;">
                <button style="background: transparent ; border: none;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="get_notification()">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger" id="notification_count"></span>

                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="notification_dropdown">

                    <!-- <a class="dropdown-item" href="#"></a> -->
                </div>
            </div>

            <!-- end of notification bell -->
        </li>
    </ul>
</div>
<!-- end Topbar -->
<!--  -->
<!--  -->
<script>
    function get_notification() {
        $.ajax({
            type: "post",
            url: base_url + 'admin/dashboard/get_notification',
            data: {},
            dataType: "json",
            success: function(response) {
                let markup = ""
                let data = response['data']['notification']
                if (response['status']) {
                    data.forEach(element => {
                        if (element.type == 1) {
                            markup += '<a class="dropdown-item notification_read" href="' + base_url + 'admin/videocall/index" notifiction_id="' + element.id + '">New Booking By ' + element.name + '</a>'
                        } else {
                            markup += '<a class="dropdown-item notification_read" href="' + base_url + 'admin/voicecall/index" notifiction_id="' + element.id + '">New Booking By ' + element.name + '</a>'
                        }

                    });
                }
                $("#notification_dropdown").html(markup)
                $("#notification_count").html(data.length)
            }
        });
    }

    $(document).ready(function() {
        get_notification()
    });

    // function notification_read() {
    //     let id = $("#user_activation").val();
    //     $.ajax({
    //         type: "post",
    //         url: base_url + "admin/services/user_activation",
    //         data: {
    //             user_id: user_id,
    //             activation_id: id,
    //         },
    //         dataType: "json",
    //         success: function(response) {
    //             if (response["status"]) {
    //                 alert(response["message"]);
    //                 window.location.reload()
    //             } else {
    //                 alert(response["message"]);
    //                 window.location.reload()
    //             }
    //         },
    //     });
    // }

    $(document).on('click', '.notification_read', function() {
        let notification_id = $(this).attr("notifiction_id");
        $.ajax({
            type: "post",
            url: base_url + "admin/services/read_notification",
            data: {
                notification_id: notification_id,
            },
            dataType: "json",
            success: function(response) {},
        });
    })
</script>