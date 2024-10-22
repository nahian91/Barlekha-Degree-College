<?php
   /*
   Template Name: Events
   */
   get_header();
   ?>
<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>ইভেন্টস</h2>
                <ul>
                    <li><a href="<?php site_url(); ?>">হোম</a></li>
                    <li>ইভেন্টস</li>
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
                            'post_type' => 'events',
                            'post_status' => 'publish',
                            'orderby' => 'date', 
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                    
               <div class="col-md-4">
                  <div class="single-event">
                     <div class="event-img" style="background-image:url('<?php the_post_thumbnail_url();?>"></div>
                     <div class="event-box">
                        <div class="event-date">
                           <p><?php echo get_the_date();?></p>
                        </div>
                        <div class="event-content">
                           <h4><?php the_title();?></h4>
                           <a href="<?php the_permalink();?>">view details</a>
                        </div>
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
<?php get_footer(); ?>