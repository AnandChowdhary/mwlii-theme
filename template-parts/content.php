<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package madewithlove
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-md"><div class="card card-block" style="margin-top: 30px; min-width: 300px">
		<p><a href="<?php the_permalink(); ?>"><strong><img alt="<?php the_title(); ?>" style="margin-top: -4px; margin-right: 8px" src="https://plus.google.com/_/favicon?domain=<?php echo get_post_custom_values("url")[0]; ?>"><?php the_title(); ?></strong></a></p>
<?php
$out = strlen(wp_strip_all_tags(get_the_content())) > 200 ? substr(wp_strip_all_tags(get_the_content()),0,200)."&hellip;" : wp_strip_all_tags(get_the_content());
?>
<p><?php echo $out; ?></p>
<p style="line-height: 2"><i style="width: 20px; margin-right: 10px; text-align: center; display: inline-block" class="ion-ios-location"></i><a href="./tag/<?php echo get_the_tags()[0]->slug; ?>"><?php echo get_the_tags()[0]->name; ?></a><br><?php if(strpos(get_post_custom_values("url")[0], "https://") !== false ) { echo '<i style="width: 20px; margin-right: 10px; text-align: center; display: inline-block" class="ion-earth"></i>'; } else { echo '<i style="width: 20px; margin-right: 10px; text-align: center; display: inline-block" class="ion-alert-circled"></i>'; } ?><a href="<?php echo get_post_custom_values("url")[0]; ?>" target="_blank">Visit <?php the_title(); ?></a></p>
</div></article><!-- #post-## -->