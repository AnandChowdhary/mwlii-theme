<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package madewithlove
 */

get_header(); ?>
<div class="col-md-8 push-md-2 text-center" style="padding-top: 40px">
	<h4>Organizations</h4>
	<div style="margin: 40px 0 20px 0"><?php
		//var_dump(get_tags());
		foreach (get_tags() as $key => $value) {
			echo "<a style='margin-right: 20px; margin-bottom: 5px; display: inline-block' href='" . site_url() . "/tag/" . $value->slug . "'>" . $value->name . " (" . $value->count . ")</a> ";
		}
	?></div>
</div>

<div class="row">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
$i = 1;
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

/*if ($i % 3 == 0) { echo "</div><div class='row'>"; }*/
$i++;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php
get_sidebar();
get_footer();