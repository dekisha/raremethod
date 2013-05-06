<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content span9">
		<div id="content" role="main">
				<h4>featured posts</h4>
				<?php include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php'); ?>
				<ul class="posts">
					<?php $posts = get_posts('orderby=rand&numberposts=3'); 
					foreach($posts as $post) : setup_postdata($post);?>
					<li class="post block span4">
						<div class="img-wrapper">
						<?php the_post_thumbnail( $size, $attr ); ?> 
						<div class="count"><?php echo do_shortcode('[post_view]'); ?></div>
						</div>
						<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<div class="sub-text date"><?php echo get_the_date(); ?></div> 
						<?php the_excerpt(); ?>
						<a class="post-continue " href="<?php the_permalink() ?>">continue</a>
					</li>
					<?php endforeach; ?>
				</ul>
			    <div class="latest-posts">
			    	<h4>latest posts</h4>
				    <?php $the_query = new WP_Query( 'showposts=3' ); ?>
				    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				    	<div class="block-wide">
				    		<?php the_post_thumbnail( $size, $attr ); ?> 
				    		<div class="block-wide-content">
						    	<div class="title-header">
						    		<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						    		<p class="post-by">Post by: <a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></p>
						    	</div>
						    	<div class="sub-text date"><?php echo get_the_date(); ?></div> 
						    	<?php the_excerpt(); ?> 			
						    	<a class="post-continue" href="<?php the_permalink() ?>">continue</a>
						    </div>
					    </div>
				    <?php endwhile;?>
				</div>
				

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

