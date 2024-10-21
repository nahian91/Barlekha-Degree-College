<?php
/*
Template Name: Notice
*/
get_header();
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

<section class="notice-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9">
                <div class="notice">

                <?php
                        $args = array(  
                            'post_type' => 'notices',
                            'post_status' => 'publish',
                            'orderby' => 'title', 
                            'order' => 'DESC', 
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 

                        $teacher_image = get_field('teacher_image');
                    ?>
                    <div class="single-event single-notice">
                        <div class="event-box">
                            <div class="event-date">
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="event-content">
                                <h4><?php the_title();?></h4>
                            </div>
                            <div class="event-download">
                                <a href="<?php the_permalink();?>">View</a>
                            </div>
                        </div>
                    </div>
                            <?php
                        endwhile;

                        wp_reset_postdata(); 
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>