<?php
/**
 * @package fastr
 */
?>
<?php

if(get_field('header_image'))
{
?>
<style>
.image-header header {
	background: url(<?php echo get_field('header_image'); ?>) center bottom;
}
</style>
<?php } ?>

<header class="entry-header <?php echo get_field('font_color'); ?>">
	<div class="container">
		<div class="entry-meta">
			<?php fastr_posted_on(); ?>
			<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'fastr' ) );
			if ( $categories_list && fastr_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'on %1$s', 'fastr' ), $categories_list ); ?>
				</span>
			<?php endif; // End if categories ?>

			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'fastr' ) );
			if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( 'tagged %1$s', 'fastr' ), $tags_list ); ?>
				</span>
			<?php endif; // End if $tags_list ?>
		</div><!-- .container -->
	</div><!-- .entry-meta -->
	<div class="container">

	<h1 class="entry-title"><?php the_title(); ?></h1>
		<h3><?php echo get_field('subtitle'); ?></h3>
	</div><!-- .container -->

</header><!-- .entry-header -->
<div class="container">
	<div class="header-caption"><?php echo get_field('image_caption'); ?></div>
</div><!-- .container -->
<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'fastr' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div><!-- .container -->

