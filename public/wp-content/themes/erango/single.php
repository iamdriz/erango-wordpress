<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php //post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="article-header">
			<div class="container">
				<h1 class="article-header__title"><?php the_title(); ?></h1>
				<ul class="article-header__meta">
					<li><i class="far fa-clock"></i> <?php echo get_the_time(__('l, F jS, Y', 'kubrick')); ?></li>
					<li><i class="far fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><b><?php the_author_meta('user_login'); ?></b></a></li>
				</ul>
			</div>
		</header>

		<section class="section section--off-white">
			<div class="container">

			<div class="prose mmm">
				<div class="mmm__inner">
					<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'kubrick') . '</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>' . __('Tags:', 'kubrick') . ' ', ', ', '</p>'); ?>

					<p class="postmetadata alt">
						<small>
							<?php /* This is commented, because it requires a little adjusting sometimes.
								You'll need to download this plugin, and follow the instructions:
								http://binarybonsai.com/wordpress/time-since/ */
								/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); $time_since = sprintf(__('%s ago', 'kubrick'), time_since($entry_datetime)); */ ?>
							<?php printf(__('This entry was posted on %1$s at %2$s and is filed under %3$s.', 'kubrick'), get_the_time(__('l, F jS, Y', 'kubrick')), get_the_time(), get_the_category_list(', ')); ?>
							<?php printf(__("You can follow any responses to this entry through the <a href='%s'>RSS 2.0</a> feed.", "kubrick"), get_post_comments_feed_link()); ?> 

							<?php if ( comments_open() && pings_open() ) {
								// Both Comments and Pings are open ?>
								<?php printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), get_trackback_url()); ?>

							<?php } elseif ( !comments_open() && pings_open() ) {
								// Only Pings are Open ?>
								<?php printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), get_trackback_url()); ?>

							<?php } elseif ( comments_open() && !pings_open() ) {
								// Comments are open, Pings are not ?>
								<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'kubrick'); ?>

							<?php } elseif ( !comments_open() && !pings_open() ) {
								// Neither Comments, nor Pings are open ?>
								<?php _e('Both comments and pings are currently closed.', 'kubrick'); ?>

							<?php } edit_post_link(__('Edit this entry', 'kubrick'),'','.'); ?>

						</small>
					</p>

				</div>
			</div>
			<h3 class="has-text-align-center">Share this article</h3>
			<ul class="social">
				<li class="">
					<a href="https://twitter.com" target="_blank" aria-label="Twitter"><i
							class="fab fa-twitter"></i></a>
				</li>
				<li class="">
					<a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i
							class="fab fa-facebook"></i></a>
				</li>
				<li class="">
					<a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i
							class="fab fa-linkedin"></i></a>
				</li>
			</ul>
		</section>

		<?php //comments_template(); ?>

		<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>

	</article>

<?php endif; ?>

<section class="section section--off-white">
	<div class="container">
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
			<div class="alignright"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
