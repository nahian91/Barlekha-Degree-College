<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bdc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Top Start Here -->
<section class="header-top d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="header-left">
                        <a href="mailto:womensmodelcollege@gmail.com"><i class="fa fa-envelope"></i> womensmodelcollege@gmail.com</a>
                        <a href="tel:+8801720229224"><i class="fa fa-phone-alt"></i> +8801720229224</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-end">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'header-menu',
							'menu_class' => 'header-menu'
						));
					?>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Top End Here -->

    <!-- Header Area Start Here -->
    <header class="header header-fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
							<span>Sylhet Women's Model College</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 text-end">
                    <nav class="menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu'
							));
						?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->