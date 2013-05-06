<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			
			<h5 class="authors-headline">authors</h5>
			<div class="authors"><?php contributors(); ?></div>

			<?php dynamic_sidebar( 'sidebar-4' ); ?>
			<div id="fb-root"></div>
			<div id="fb-root"></div>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-like-box" data-href="http://www.facebook.com/platform" data-width="240" data-show-faces="true" data-stream="false" data-header="true"></div>
		</div><!-- #secondary -->
	<?php endif; ?>
