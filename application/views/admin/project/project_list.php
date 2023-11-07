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
                  <a class="btn btn-primary btn-sm" href="<?php echo base_url('projects') ?>">Back</a>
                </div>
                <?php echo $pagetitle; ?>
              </div>
            </div>
          </div>
          <?php
          // print_r($project_list);
          ?>
          <?php if ($this->session->flashdata('message') !== NULL) { ?>
            <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php print_r($this->session->flashdata('message')['1']); ?>
            </div>
          <?php } ?>

          <div class="container">
            <table class="table table-bordered table-sm" id="project_list_table">
              <thead>
                <tr>
                  <th scope="col">S.no.</th>
                  <th scope="col">Project Name</th>
                  <th scope="col">Project Image</th>
                  <th scope="col">Project Description</th>
                  <th scope="col">Created On</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                if ($project_list) {
                  foreach ($project_list as $project) {
                ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $project->project_name ?></td>
                      <td><img src="<?php echo base_url('uploads/' . $project->project_image) ?>" style="height:60px;width:60px" /></td>
                      <td><?php echo $project->project_para_1 ?></td>
                      <td><?php echo $project->created_on ?></td>
                      <td><a class="btn btn-success btn-sm" href="<?php echo base_url('edit-project/' . $project->id) ?>">Edit</a></td>
                      <td><button class="btn btn-danger btn-sm delete_project" delete_id="<?php echo $project->id ?>">Delete</button></td>
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