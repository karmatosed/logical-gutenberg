<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package logicalgutenberg
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'logicalgutenberg' ); ?></a>

		<div id="feature">
			<h1>Hello</h1>
			<p>I am Tammie Lister, a user experience designer currently living in the UK. I have a wide background that includes art, design, front end development and psychology. I have a passion for communities and open source.</p>
		</div>
		<div id="content" class="site-content">
