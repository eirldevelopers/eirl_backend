    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                            </div>
                            <?php echo $pagetitle; ?>
                        </div>
                    </div>
                </div>
                <?php if ($this->session->flashdata('message') !== NULL) { ?>
                    <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php print_r($this->session->flashdata('message')['1']); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <?php
                                if ($total_projects) {
                                    echo  '<h3 class="text-center">' . count($total_projects) . '</h3>';
                                } else {
                                    echo  '<h3 class="">0</h3>';
                                }
                                ?>
                                <p>&nbsp;</p>
                            </div>
                            <div class="icon">
                                <img class="ion" src="http://localhost/uk-eats-admin/assets/frameworks/admin/images/current_order.svg" alt="">
                            </div>
                            <span href="#" class="small-box-footer">Total Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <?php
                                if ($total_query) {
                                    echo  '<h3 class="text-center">' . count($total_query) . '</h3>';
                                } else {
                                    echo  '<h3 class="">0</h3>';
                                }
                                ?>
                                <p>&nbsp;</p>
                            </div>
                            <div class="icon">
                                <img class="ion" src="http://localhost/uk-eats-admin/assets/frameworks/admin/images/current_order.svg" alt="">
                            </div>
                            <span href="#" class="small-box-footer">Total Query</span>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->