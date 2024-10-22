<?php
/*
Template Name: Members
*/
get_header();
?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>শিক্ষকগন</h2>
                <ul>
                    <li><a href="<?php site_url(); ?>">হোম</a></li>
                    <li>শিক্ষকগন</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="members-area pt-100 pb-100">
    <div class="container">
        <div class="row">
        <?php
            // Arguments for the query
            $args = array(
                'post_type' => 'teachers', // Replace with your custom post type
                'posts_per_page' => -1, // Number of posts to display
                'order' => 'ASC'
            );

            // The Query
            $custom_query = new WP_Query( $args );

            // The Loop
            if ( $custom_query->have_posts() ) {
                while ( $custom_query->have_posts() ) {
                    $custom_query->the_post();
                    $teacher_image = get_field('teacher_image');
                    $teacher_designation = get_field('teacher_designation');
                    $teacher_subject = get_field('teacher_subject');
                    ?>
                        <div class="col-md-3">
                            <div class="single-member">
                                <img src="<?php echo $teacher_image['url'];?>" alt="">
                                <h4><?php the_title();?></h4>
                                <p><?php echo $teacher_designation;?></p>
                                <p><?php echo $teacher_subject;?></p>
                            </div>
                        </div>
                    <?php
                }
            } else {
                // No posts found
                echo '<p>No posts found.</p>';
            }

            // Reset Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer();?>