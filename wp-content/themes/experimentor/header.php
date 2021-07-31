<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package experimentor
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header">
            <div class="container">
                <div class="site_header_content">
                    <div class = "site_logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="">
					</div>
                    <nav class="experimentor_navbar">
                        <ul>
							<li><a href="">About</a></li>
							<li><a href="">Mentor</a></li>
							<li><a href="">Course</a></li>
							<li><a href="">R&D</a></li>
							<li><a href="">Internship</a></li>
							<li><a href="">Research</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
                    </nav>
                </div>
            </div>
        </header>
