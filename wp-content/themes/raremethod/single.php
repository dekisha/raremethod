<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content span9">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="writter">

					<?php echo get_avatar( get_the_author_meta('ID'), 150 ); ?>
					
					<div class="info-about-writter">
						<div class="category"><?php echo get_the_category_list('/'); ?></div>
						<div class="date"><?php echo get_the_date('M d, Y'); ?></div>
						<div class="author"><?php the_author_link(); ?> </div>
						<div class="social-icons-white">
							 <a class="twitter" href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter">Follow <?php the_author_meta( 'display_name' ); ?> on Twitter</a>
							 <a class="linkedin" href="http://twitter.com/<?php the_author_meta( 'linkedin' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Linkedin">Follow <?php the_author_meta( 'display_name' ); ?> on Linkedin</a>
						</div>
					</div>

				</div>

				<div class="random-posts"
					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php comments_template( '', true ); ?>
				</div>	

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>