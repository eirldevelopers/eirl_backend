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
                <h3>Queries</h3>
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
            <div class="card p-4">
              <table class="table table-bordered table-sm" id="contact_us_table">
                <thead>
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Format(Offline/Online)</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Question</th>
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
                        <td><?php echo $query->name ? $query->name : "N/A" ?></td>
                        <td><?php echo $query->mobile ? $query->mobile : "N/A" ?></td>
                        <td><?php echo $query->email ? $query->email : "N/A" ?></td>
                        <td>
                          <?php
                          if ($query->format == '1') {
                            echo "Online";
                          } elseif ($query->format == '2') {
                            echo "Offline";
                          } else {
                            echo "N/A";
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          if ($query->purpose == '1') {
                            echo "Startup Idea";
                          } elseif ($query->purpose == '2') {
                            echo "Website Services";
                          } elseif ($query->purpose == '3') {
                            echo "Cybersecurity";
                          } else {
                            echo "Others";
                          }
                          ?>
                        </td>
                        <td><?php echo $query->question ? $query->question : "N/A" ?></td>
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
          </div>
        </div> <!-- container -->
      </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->