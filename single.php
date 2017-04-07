<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package madewithlove
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<div class="row" style="margin-top: 30px">

<div class="col-md-6 push-md-3 text-center" style="padding: 2vh 0">
	<h4><?php the_title(); ?></h4>
</div>

</div>


		<div class="row">

		<?php
		while ( have_posts() ) : the_post();

			?>

<article id="post-<?php the_ID(); ?>" class="col-md">

<div class="card card-block" style="margin-top: 30px; min-width: 300px">

<p><strong><img alt="<?php the_title(); ?>" style="margin-top: -4px; margin-right: 8px" src="https://plus.google.com/_/favicon?domain=<?php echo get_post_custom_values("url")[0]; ?>">About <?php the_title(); ?></strong></p>
<p><?php echo get_the_content(); ?></p>

</div>

<div class="card card-block" style="margin-top: 30px">
	<p><strong>Visit <?php the_title(); ?></strong></p>


<?php if(strpos(get_post_custom_values("url")[0], "https://") !== false ) { ?>

<p><?php the_title(); ?> has a valid SSL certificate and uses the secure HTTPS protocol. It is safe to visit <?php the_title(); ?>.</p>

<?php } else { ?>

<p><?php the_title(); ?> does not have a valid SSL certificate and uses the insecure HTTP protocol.</p>

<?php } ?>

	<div style="margin-top: 5px">
		<a class="btn btn-primary" style="width: auto" href="<?php echo get_post_custom_values("url")[0]; ?>" target="_blank">Visit <?php the_title(); ?><i class="ion-chevron-right" style="margin-left: 10px"></i></a>
	</div>
</div>

<div class="card card-block" style="margin-top: 30px">

<p><strong><?php the_title(); ?> is Made with <span style="color: #e74c3c">&hearts;</span> in India</strong></p>

<p><?php the_title(); ?> fulfils our <a href="<?php echo site_url(); ?>/responsibilities">responsibilities</a>.</p>

</div>

</article><!-- #post-## -->

			<?php

		endwhile; // End of the loop.
		?>

			<div class="col-md">
				<div class="card" style="margin-top: 30px">
				<iframe src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCo-siyJO7BEqkw11LTcw5hNW7CTkL6Ngk&q=<?php echo urlencode(strip_tags(get_the_tag_list())); ?>" style="height: 300px; width: 100%; border: 0"></iframe><div class="card-block">

					<p><strong><?php the_title(); ?> is based in <?php echo strip_tags(get_the_tag_list()); ?></strong></p>
					<p>
<?php
	$url = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=" . urlencode(strip_tags(get_the_tag_list()));
	foreach (json_decode(file_get_contents($url))->query->pages as $page => $value) {
		$out = strlen(wp_strip_all_tags($value->extract)) > 300 ? substr(wp_strip_all_tags($value->extract),0,300)."&hellip;" : wp_strip_all_tags($value->extract);
	} echo $out;
?> <a href="https://en.wikipedia.org/w/index.php?search=<?php echo urlencode(strip_tags(get_the_tag_list())) ?>" target="_blank">Read more</a>
					<div>More organizations from <?php echo strip_tags(get_the_tag_list()); ?>: <?php echo get_the_tag_list(""); ?></div>
				</div>
			</div></div>

		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();