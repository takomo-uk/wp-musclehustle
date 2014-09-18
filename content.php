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

		<div class="large-1 medium-2 columns">
			<div class="post-meta">
				<span class='post-day'><?php the_time('d');?></span>
  				<span class='post-month'><?php the_time('M'); ?></span>
			</div>
		</div>

		<div class="large-11 medium-10 columns space-bot">

				<header class="post-title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
