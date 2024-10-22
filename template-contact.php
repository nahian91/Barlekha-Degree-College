<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>যোগাযোগ করুন</h2>
                <ul>
                    <li><a href="<?php echo site_url();?>">হোম</a></li>
                    <li>যোগাযোগ করুন</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="contact-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>ঠিকানা</h4>
                    <p>Village: Gramtola, Word No: 02 <br>
                    Barlekha Pourosova, <br> Upozela: Barlekha, <br> Dist: Moulvibazar.</p>
                </div>
                <div class="single-contact">
                    <i class="fas fa-phone-alt"></i>
                    <h4>মোবাইল</h4>
                    <p>+8801720-229224</p>
                </div>
                <div class="single-contact">
                    <i class="far fa-envelope"></i>
                    <h4>ইমেইল</h4>
                    <p>barlekhagovtcollege@gmail.com</p>
                </div>
            </div>
            <div class="col-md-8">
            <div class="contact-form">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="col-md-12">
                                <input type="email" placeholder="Email">
                                <textarea placeholder="Message"></textarea>
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.3099755038297!2d92.19671174999999!3d24.7162363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751c893d6b4b1df%3A0x4cf0872b2e4f2b2f!2sBarlekha%20Government%20College!5e0!3m2!1sen!2sbd!4v1729586086868!5m2!1sen!2sbd" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer();?>