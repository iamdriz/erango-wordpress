<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="article" id="post-<?php the_ID(); ?>">

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

			<div class="article-panel">
				<div class="article-panel__inner">
					<?php the_content(); ?>
				</div>
			</div>
			<h3 class="has-text-align-center">Share this article</h3>
			<ul class="social">
				<li class="social-item">
					<a href="https://twitter.com/share/?url=<?php echo the_permalink(); ?>" target="_blank" aria-label="Twitter"><i
							class="fab fa-twitter"></i></a>
				</li>
				<li class="social-item">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" aria-label="Facebook"><i
							class="fab fa-facebook"></i></a>
				</li>
				<li class="social-item">
					<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo the_permalink(); ?>" target="_blank" aria-label="LinkedIn"><i
							class="fab fa-linkedin"></i></a>
				</li>
			</ul>
		</section>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	</article>

<?php endif; ?>

<?php /*<section class="section section--off-white">
	<div class="container">
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
			<div class="alignright"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
		</div>
	</div>
</section>*/ ?>
<?php get_footer(); ?>
