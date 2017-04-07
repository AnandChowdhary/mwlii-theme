<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package madewithlove
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'madewithlove' ); ?></a>
<nav style="background: #fff; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); padding: 10px 0 6px" class="navbar navbar-toggleable-md navbar-light fixed-top"><div class="container">
	<div><button style="position: fixed; right: 30x; border: 0; top: 7px; right: 5px" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button></div>
	<div><a href="<?php echo site_url(); ?>" class="navbar-brand">Made with <span style="color: #e74c3c">&hearts;</span> in India</a></div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<div class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="<?php echo site_url(); ?>/about">About</a>
			<a class="nav-item nav-link" href="<?php echo site_url(); ?>/responsibilities">Responsibilities</a>
			<a class="nav-item nav-link" href="<?php echo site_url(); ?>/sponsors">Sponsors</a>
			<a class="nav-item nav-link" href="#" data-oswald>Accessibility</a>
		</div>
		<a style="transform: translateY(-2.5px);" class="nav-item nav-link btn btn-primary" href="<?php echo site_url(); ?>/join">
			<span style="transform: translateY(2px); display: inline-block;">Join the list</span>
		</a>
	</div></div>
</nav>

<?php
	if (is_home()) {
		?><header id="masthead" style="padding-top: 100px">
<div class="container">
<div class="col-md-6 push-md-3 text-center"><p><span style="color: #e74c3c">&hearts;</span></p><p class="lead">Founded in April 2013, the Made with Love in India initiative is a movement to celebrate, promote, and build a brand — India.</p><p>The initiative is based on the foundation that a small thing, a simple gesture, can brighten up someone's day and remind them that they should be proud of helping local entrepreneurs who contribute largely to the economy.</p><p>On this webpage, you'll find a list of brands and products that are created in India and bear the “Made with Love in India” badge. These individuals and organizations promise to deliver the best-quality products to India and contribute to her growth.</p><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FMadewithLoveinIndia&width=300&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=172692476126015" width="300" height="60" style="border:none; overflow:hidden; margin-top: 30px; margin-left: 30px" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
</div>
</header><?php
	}
?>


<div id="content" style="background: whitesmoke; padding-bottom: 30px; margin-top: 50px"><div class="container"><div class="row">