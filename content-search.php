<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clear Content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php clear_content_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

	<header class="entry-header">
			<h1 class="entry-title">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			</h1>


	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php clear_content_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
