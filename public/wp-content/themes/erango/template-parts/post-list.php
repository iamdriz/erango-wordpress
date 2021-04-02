<?php $wp_query = new WP_Query(array('posts_per_page' => get_option('posts_per_page'), 'paged' => $paged)); ?>      
      <div class="post-list">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
            
            <?php /*<p class="who-when">by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a> on <?php echo get_the_date() ?> </p>*/ ?>

            <?php //the_excerpt(); ?>
          
            <!--
            <p class="postmetadata"><?php the_tags(__('Tags:', 'kubrick'), ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>
            -->

            <?php if($count == 1) : ?>
              <?php the_excerpt(); ?>
              <div class="">
                <a class="button button--orange2" href="<?php the_permalink() ?>">Read more</a>
              </div>
            <?php endif; ?>

          </section>
        </article>
      <?php endwhile; ?>
      </div>