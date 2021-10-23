<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
	<section class="home-banner">
		<div class="logo-title">
			<div class="logo">
				Super Theme
				<img src="<?php echo get_template_directory_uri() ?>/img /logo.svg" alt="Logo Super Theme">
			</div>
			<div class="social-media">
				<a href="#">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="#">
					<i class="fa fa-linkedin"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
		</div>
		<h2>
			This website is for educational purposes and for testing.
			You could open it using Xampp
		</h2>
		<h3>
			No story untold.
		</h3>
	</section>

<?php
get_footer();
