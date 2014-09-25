<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="row">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="large-12 columns">


				<header class="post-header">
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-meta">
						<?php FoundationPress_entry_meta(); ?>
					</div>
				</header>

				<div class="post-content">
					<?php the_content(__('Continue reading...', 'FoundationPress')); ?>
				</div>
				<footer class="post-footer">
					<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
				</footer>

		</div>

	</article>
</div>
