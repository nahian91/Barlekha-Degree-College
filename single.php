<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bdc
 */

get_header();
?>

<section class="breadcumb-area" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_title();?></h2>
                <ul>
                    <li><a href="<?php echo site_url();?>">home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="page-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-3">
					<?php get_sidebar();?>
				</div>
				<div class="col-xl-9">
				<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
				</div>
			</div>
		</div>

</section>
	

<?php
get_footer();
