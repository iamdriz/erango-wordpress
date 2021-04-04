<div class="post-list<?php if(!is_archive() && get_query_var('paged') == 0) echo ' post-list--special' ?>">
	<?php while (have_posts()) : the_post(); ?>
		<?php $count = $wp_query->current_post+1; ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">         
			<figure class="post-thumbnail">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				//echo '<a href="'.get_permalink().'">';
				//the_post_thumbnail(array(150,150));
				//echo '</a>';
				//echo '<a href="'.get_permalink().'"><img src="'. get_bloginfo('template_directory') .'/img/thumbnail-placeholder.png" alt="Blog thumbnail" /></a>';
			} else {
				//echo '<a href="'.get_permalink().'"><img src="'. get_bloginfo('template_directory') .'/img/thumbnail-placeholder.png" alt="Blog thumbnail" /></a>';
			}?>
				<a href="<?php echo get_permalink(); ?>"><img src="https://picsum.photos/1920/1080?random=<?php the_ID(); ?>" width="1920" height="1080"></a>
			</figure>
			<section class="post-content">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-datetime"><i class="far fa-clock"></i> <?php echo get_the_date() ?></p>
				<?php if($count == 1 && !is_archive() && get_query_var('paged') == 0) : ?>
					<?php the_excerpt(); ?>
					<div class="wp-block-buttons is-content-justification-center">
						<div class="wp-block-button">
							<a class="wp-block-button__link has-orange-background-color has-background" href="<?php the_permalink() ?>">Read more</a>
						</div>
					</div>
				<?php endif; ?>
			</section>
		</article>
	<?php endwhile; ?>
</div>