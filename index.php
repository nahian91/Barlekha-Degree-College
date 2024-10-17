<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bdc
 */

get_header();
?>
<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Announcement</h2>
                <ul>
                    <li><a href="<?php echo site_url();?>">home</a></li>
                    <li>Announcement</li>
                </ul>
            </div>
        </div>
    </div>
</section>
	<section class="page-area">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-9">
				<div class="row">
				<?php
                        $args = array(  
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                    
                    <div class="col-xl-4">
            <div class="single-blog">
               <div class="blog-img" style="background-image:url('<?php the_post_thumbnail_url();?>')">
                  
               </div>
               <div class="blog-content">
                  <h4><?php the_title();?></h4>
                  <?php the_content();?>
                  <a href="<?php the_permalink();?>">read more <i class="fas fa-long-arrow-alt-right"></i></a>
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

<?php

get_footer();
