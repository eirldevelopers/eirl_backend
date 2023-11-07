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
          <?php
          // print_r($get_queries);
          // die();
          ?>
          <?php if ($this->session->flashdata('message') !== NULL) { ?>
            <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php print_r($this->session->flashdata('message')['1']); ?>
            </div>
          <?php } ?>

          <div class="container">
            <table class="table table-bordered table-sm" id="contact_us_table">
              <thead>
                <tr>
                  <th scope="col">S.no.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Email</th>
                  <th scope="col">Query</th>
                  <th scope="col">Created On</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                if ($get_queries) {
                  foreach ($get_queries as $query) {
                ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $query->name ?></td>
                      <td><?php echo $query->mobile ?></td>
                      <td><?php echo $query->email ?></td>
                      <td><?php echo $query->message ?></td>
                      <td><?php echo $query->created_on ?></td>
                    </tr>
                <?php
                    $i++;
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div> <!-- container -->
      </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->