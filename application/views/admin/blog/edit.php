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
                                <!-- <a class="btn btn-primary btn-sm" href="<?php echo base_url('blogs') ?>">Blogs</a> -->
                            </div>
                            <h3>Edit Blog</h3>
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
                // print_r($blog);
                ?>
                <div class="container">
                    <form action="<?php echo base_url('edit_blog/'.$blog[0]->id); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="blog_name">Project Name( <span class="text-danger">required *</span>)</label>
                                <input type="text" class="form-control" id="blog_name" name="blog_name" value="<?php echo $blog[0]->blog_name ?>">
                                <?php echo form_error('blog_name') ?>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="blog_desc">Project Description( <span class="text-danger">required *</span>)</label>
                                <textarea class="form-control " id="blog_desc" name="blog_desc" rows="5"><?php echo $blog[0]->blog_description ?></textarea>
                                <?php echo form_error('blog_desc') ?>
                                <!-- word-limit -->
                                <!-- <p class="text-danger">Max Character Count : 600 Character </p> -->
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="blog_image">Project Cover Image ( <span class="text-danger">Chnage Image iF Required *</span>)</label>
                                <input type="file" class="form-control" id="blog_image" name="blog_image"  accept="image/*" >
                            </div>
                            <div class="form-group col-lg-12">
                                <img  style="width: 200px;height:200px" src="<?php echo base_url('uploads/'.$blog[0]->blog_image) ?>" />
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-primary">Edit</button>
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