<?php
/*
Template Name: Event Gallery Page
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

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">

        <?php

$args = array(
    'post_type' => 'gallerys',
    'tax_query' => array(             
         array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'event'
        ),
     )
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