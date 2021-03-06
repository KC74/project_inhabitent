<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<div class="entry-readmore link-button">
			<a href="<?php echo get_site_url(); ?>/<?php echo the_title() ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
