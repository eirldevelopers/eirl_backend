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
                  <a class="btn btn-primary btn-sm" href="<?php echo base_url('project-list') ?>">Projects</a>
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

          <div class="container">
            <form action="<?php echo base_url('projects'); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="project_name">Project Name</label>
                  <input type="text" class="form-control" id="project_name" name="project_name">
                  <?php echo form_error('project_name') ?>
                </div>
                <div class="form-group col-lg-12">
                  <label for="para_1">Project Description First</label>
                  <textarea class="form-control" id="para_1" name="para_1" rows="5"></textarea>
                  <?php echo form_error('para_1') ?>
                </div>
                <div class="form-group col-lg-12">
                  <label for="para_2">Project Description Second</label>
                  <textarea class="form-control" id="para_2" name="para_2" rows="5"></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <label for="para_3">Project Description Third</label>
                  <textarea class="form-control" id="para_3" name="para_3" rows="5"></textarea>
                </div>
                <div class="form-group col-lg-4">
                  <label for="project_image">Project Cover Image</label>
                  <input type="file" class="form-control" id="project_image" name="project_image" required>
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_1">Other Image 1</label>
                  <input type="file" class="form-control" id="other_image_1" name="other_image_1">
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_2">Other Image 2</label>
                  <input type="file" class="form-control" id="other_image_2" name="other_image_2">
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_3">Other Image 3</label>
                  <input type="file" class="form-control" id="other_image_3" name="other_image_3">
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_4">Other Image 4</label>
                  <input type="file" class="form-control" id="other_image_4" name="other_image_4">
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_5">Other Image 5</label>
                  <input type="file" class="form-control" id="other_image_5" name="other_image_5">
                </div>
                <div class="form-group col-lg-4">
                  <label for="other_image_6">Other Image 6</label>
                  <input type="file" class="form-control" id="other_image_6" name="other_image_6">
                </div>
                <div class="form-group col-lg-12">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </div>
            </form>
          </div>
        </div> <!-- container -->
      </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->