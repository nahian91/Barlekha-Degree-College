<?php
/*
Template Name: Gallery
*/
get_header();
?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>গ্যালারী</h2>
                <ul>
                    <li><a href="<?php site_url(); ?>">হোম</a></li>
                    <li>গ্যালারী</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">

        <?php

$args = array(
    'post_type' => 'gallerys'
  );
  
  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
       $query->the_post();
       $gallery_image = get_field('gallery_image');
  ?>
  
  <div class="col-md-3">
                <a href="<?php echo $gallery_image['url'];?>" class="single-gallery gallery-images" style="background-image:url('<?php echo $gallery_image['url'];?>')"> 
                    <span><i class="fas fa-search"></i></span>
                </a>
            </div>
  <?php
    }
  }
  wp_reset_postdata();
                    ?>
        </div>
    </div>
</section>

<?php get_footer();?>