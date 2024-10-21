<?php
/*
Template Name: Teachers
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

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9">
                <div class="row">

                    <?php

$args = array(
    'post_type' => 'teachers',
    'tax_query' => array(             
         array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'college'
        ),
     )
  );
  
  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
       $query->the_post();
       $teacher_image = get_field('teacher_image');
                        $teacher_designation = get_field('teacher_designation');
  ?>
  
  <div class="col-md-4">
                        <a href="<?php the_permalink();?>" class="single-teacher">
                            <img src="<?php echo $teacher_image['url'];?>" alt="<?php the_title();?>">
                            <h4><?php the_title();?> <span><?php echo $teacher_designation; ?></span></h4>
                        </a>
                    </div>
  <?php
    }
  }
  wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>