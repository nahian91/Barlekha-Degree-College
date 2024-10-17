<?php 
get_header();


$teacher_image = get_field('teacher_image');
$teacher_designation = get_field('teacher_designation');
$teacher_subject = get_field('teacher_subject');
$teacher_mobile = get_field('teacher_mobile');
$teacher_email = get_field('teacher_email');

?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_title();?></h2>
                <ul>
                    <li><a href="<?php site_url(); ?>">home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9">
                <table class="table table-bordered site-main">
                    <tr>
                        <th>Name</th>
                        <td><?php the_title();?></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><img src="<?php echo $teacher_image['url'];?>" alt="<?php the_title();?>"></td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td><?php echo $teacher_designation; ?></td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td><?php echo $teacher_subject; ?></td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td><?php echo $teacher_mobile; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $teacher_email; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>