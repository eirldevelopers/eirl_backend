<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    var baseUrl = '<?php echo base_url(); ?>';
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoV6qPEAsqAH2ff6MAUY_-xyZ-zfAVhs8&callback=initMap&libraries=places">
</script>
<!-- Vendor js -->
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>js/vendor.min.js"></script>
<!-- App js-->
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>js/app.min.js"></script>

<script src="<?php echo base_url('assets/frameworks/admin/'); ?>js/jquery.dataTables.dtFilter.min.js"></script>
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>js/dataTables.fixedHeader.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url($frameworks_dir . '/public'); ?>/js/jquery.validate.min.js"></script> -->


<script src="<?php echo base_url('assets/frameworks/admin/'); ?>cloudflare/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>cloudflare/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>libs/cropper/cropper.min.js"></script>
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>libs/ckeditor/ckeditor.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/frameworks/admin/'); ?>js/booking.js"></script>

</body>

</html>