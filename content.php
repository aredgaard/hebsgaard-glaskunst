<?php
/**
 * @package Hebsgaard glaskunst
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php hebsgaard_glaskunst_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hebsgaard-glaskunst' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hebsgaard-glaskunst' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'hebsgaard-glaskunst' ) );
				if ( $categories_list && hebsgaard_glaskunst_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'hebsgaard-glaskunst' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'hebsgaard-glaskunst' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'hebsgaard-glaskunst' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hebsgaard-glaskunst' ), __( '1 Comment', 'hebsgaard-glaskunst' ), __( '% Comments', 'hebsgaard-glaskunst' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'hebsgaard-glaskunst' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->