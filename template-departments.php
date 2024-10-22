<?php
/*
Template Name: Departments
*/
get_header();
?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>ডিপার্টমেন্টস</h2>
                <ul>
                    <li><a href="<?php site_url(); ?>">হোম</a></li>
                    <li>ডিপার্টমেন্টস</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="career-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="career">
                            <h4 class="page-title">ডিগ্রি পাস:</h4>
                            <div class="career-list">
                                <ul>
                                    <li><span><i class="far fa-bookmark"></i> বি এ</span></li>
                                    <li><span><i class="far fa-bookmark"></i> বি এস এস</span></li>
                                    <li><span><i class="far fa-bookmark"></i> বিবিএস</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="career">
                            <h4 class="page-title">এইচ এস সি:</h4>
                            <div class="career-list">
                                <ul>
                                    <li><span><i class="far fa-bookmark"></i> বিজ্ঞান</span></li>
                                    <li><span><i class="far fa-bookmark"></i> ব্যবসায় শিক্ষা</span></li>
                                    <li><span><i class="far fa-bookmark"></i> মানবিক</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>