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
                  <a class="btn btn-primary btn-sm" href="<?php echo base_url('add_blog') ?>">Add Blog</a>
                </div>
                <h3>Blogs</h3>
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

          <div class="container mt-1">
            <div class="card p-3">
              <table class="table table-bordered table-sm" id="blog_list_table">
                <thead>
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Blog Name</th>
                    <th scope="col">Blog Description</th>
                    <th scope="col">Blog Image</th>
                    <th scope="col">Created On</th>
                    <th scope="col" class="text-center">Edit</th>
                    <th scope="col" class="text-center">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  if ($blog_list) {
                    foreach ($blog_list as $blog) {
                  ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $blog->blog_name ?></td>
                        <td><img src="<?php echo base_url('uploads/' . $blog->blog_image) ?>" style="height:60px;width:60px" /></td>
                        <td>
                          <?php
                          $para = $blog->blog_description;
                          if (strlen($para) > 150) {
                            echo substr($para, 0, 150) . "....";
                          } else {
                            echo $para;
                          }
                          ?>
                        </td>
                        <td><?php echo date('F j, Y, g:i a', strtotime($blog->created_on)) ?></td>
                        <td><a class="btn btn-success btn-sm text-center" href="<?php echo base_url('edit_blog/' . $blog->id) ?>">Edit</a></td>
                        <td><button class="btn btn-danger btn-sm delete_blog text-center" delete_id="<?php echo $blog->id ?>">Delete</button></td>
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