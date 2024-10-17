<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bdc
 */

?>

<footer class="footer-area" style="background-image:url('assets/img/footer-back.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-footer text-center">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                    <p>It is a Non-government College. This institute's EIIN number is 129580. This institute is located in Gramtola, Maulvibazar, Sylhet Division. It's geographical area is Plain Land. It offers classes up to Degree (pass) level. Please refer to the table below for information on the EIIN, location, contact number, MPO status, and additional details.</p>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-footer">
                    <h4>quick links</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Admission</a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Notice Board</a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> News/Blog</a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Hostel</a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="single-footer">
                    <h4>useful links</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Privacy Policy</a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i> Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-footer contact">
                    <h4>get in touch</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Gramtola, Maulvibazar, Sylhet </li>
                        <li><i class="far fa-envelope"></i> womensmodelcollege@gmail.com</li>
                        <li><i class="fas fa-mobile-alt"></i> +8801720229224</li>
                        <li><i class="fas fa-globe-europe"></i> www.bdcsyl.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <p>&copy; <?php echo date("Y"); ?> | Design & Developed by <a href="https://www.infinityflamesoft.com/" target="_blank">Infinity Flame Soft.</a></p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
