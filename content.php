<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="entry-info">
		<header class="entry-header">			
<?php if ( is_singular()) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
<?php endif; // is_singular() ?>
		</header><!-- .entry-header -->
	</div>
<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_expert(); ?>
	</div><!-- .entry-summary -->
<?php else : ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sonoichi' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
<?php endif; ?>
</article><!-- #post -->
