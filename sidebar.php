<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bdc
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<!-- Single Sidebar Start Here -->
<div class="sidebar">
    <h4>নোটিশ বোর্ড</h4>
    <ul>
        <?php
		$args = array(  
			'post_type' => 'notices',
			'posts_per_page' => 5,
			'post_status' => 'publish',
			'orderby' => 'title', 
			'order' => 'DESC', 
		);

		$loop = new WP_Query( $args ); 
			
		while ( $loop->have_posts() ) : $loop->the_post(); 

	?>
	<li><a href="<?php the_permalink();?>"><span><?php echo get_the_date();?></span> <?php the_title();?></a></li>
			<?php
		endwhile;

		wp_reset_postdata(); 
	?>
    </ul>
</div>
<!-- Single Sidebar End Here -->

<!-- Single Sidebar Start Here -->
<div class="sidebar">
    <h4>গুরুত্বপূর্ণ লিঙ্ক</h4>
		<ul>
			<li><a href=""><i class="fas fa-long-arrow-alt-right"></i> নোটিশ বোর্ড</a></li>
			<li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Hostel</a></li>
			<li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Teachers</a></li>
			<li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Career</a></li>
			<li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Contact</a></li>
		</ul>
	</div>
	<!-- Single Sidebar End Here -->
</aside><!-- #secondary -->
