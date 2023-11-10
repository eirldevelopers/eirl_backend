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
                            <h3>Job Applied</h3>
                        </div>
                    </div>
                </div>

                <?php if ($this->session->flashdata('message') !== NULL) { ?>
                    <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php print_r($this->session->flashdata('message')['1']); ?>
                    </div>
                <?php } ?>
                <?php
                //   die();
                // print_r($get_job_applied);
                ?>
                <div class="container">
                    <div class="card p-4">
                        <table class="table table-bordered table-sm" id="contact_us_table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Resume</th>
                                    <th scope="col">Created On</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if ($get_job_applied) {
                                    foreach ($get_job_applied as $job) {
                                ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $job->name ? $job->name : 'N/A' ?></td>
                                            <td><?php echo $job->mobile ? $job->mobile : 'N/A' ?></td>
                                            <td><?php echo $job->email ? $job->email : 'N/A' ?></td>
                                            <td>
                                                <?php
                                                if ($job->profile == '1') {
                                                    echo "Developer";
                                                } elseif ($job->profile == '2') {
                                                    echo "Designer";
                                                } elseif ($job->profile == '3') {
                                                    echo "Cybersecurity";
                                                } else {
                                                    echo "N/A";
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $job->experience ? $job->experience : 'N/A' ?></td>
                                            <td><a href="<?php echo base_url('uploads/' . $job->cv) ?>" target="/blank"><?php echo $job->cv ? $job->cv : 'N/A' ?></a></td>
                                            <td><?php echo $job->created_on ?></td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->