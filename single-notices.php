<?php
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
				<div class="single-notice-event">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
