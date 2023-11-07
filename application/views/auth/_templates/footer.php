<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<footer class="foot container-fluid">
    <div class="foot-div container">
        <div class="foot-d1">
            <img src="<?php echo base_url('assets/img/footer/footer-img.png') ?>" alt="">
            <p>Our mission is to improve the health and well-being of our patients by delivering compassionate and personalized care.</p>
            <div class="foot-icon">
                <img src="<?php echo base_url('assets/img/footer/social/facebook logo.png') ?>" alt="">
                <img src="<?php echo base_url('assets/img/footer/social/Twitter logo.png') ?>" alt="">
                <img src="<?php echo base_url('assets/img/footer/social/linkedin logo.png') ?>" alt="">
                <img src="<?php echo base_url('assets/img/footer/social/instagram logo.png') ?>" alt="">
            </div>
        </div>
        <div class="foot-section-2">
            <div class="foot-mini-section">
                <div class="foot-mini-section">
                    <div class="foot-d2">
                        <h5>Company</h5>
                        <div class="foot-d2-div">
                            <a class="policies_link" href="<?php echo base_url('about_us') ?>">
                                About
                            </a>
                            <a class="policies_link" href="<?php echo base_url('contact_us') ?>">
                                Contact us
                            </a>
                        </div>
                    </div>
                    <div class="foot-d2">
                        <h5>Support</h5>
                        <div class="foot-d2-div">
                            <a class="policies_link" href="<?php echo base_url('privacy_policy') ?>">
                                Privacy Policy
                            </a>
                            <a class="policies_link" href="<?php echo base_url('refund_policy') ?>">
                                Refund Policy
                            </a>
                            <a class="policies_link" href="<?php echo base_url('term_and_conditions') ?>">
                                Term And Conditions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-d3">
                <h5>Contact us</h5>
                <div class="foot-d3-div">
                    <div class="contact-div">
                        <img class="email" src="<?php echo base_url('assets/img/footer/mail.png') ?>" alt="">
                        <p>support@clickcare.in</p>
                    </div>
                    <div class="contact-div">
                        <img src="<?php echo base_url('assets/img/footer/phone.png') ?>" alt="">
                        <p>+918422889946</p>
                    </div>
                    <div class="contact-div">
                        <a href="https://wa.me/918422889947"><img src="<?php echo base_url('assets/Img/footer/whatsapp.jpg') ?>"></a>
                        <p>+918422889947</p>
                    </div>
                    <div class="contact-div">
                        <img src="<?php echo base_url('assets/img/footer/map.png') ?>" alt="">
                        <p>Vasant Vihar Thane West 400607</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    var baseUrl = '<?php echo base_url(); ?>';
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url('assets\frameworks\website\js\otp_verification.js'); ?>"></script>
<script src="<?php echo base_url('assets\frameworks\website\js\signup.js'); ?>"></script>
<script src="<?php echo base_url('assets\frameworks\website\js\welcome.js'); ?>"></script>
<script src="<?php echo base_url('assets\frameworks\website\js\index.js'); ?>"></script>
</body>

</html>