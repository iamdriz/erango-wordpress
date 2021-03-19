<?php get_header(); ?>

<main role="main">
<section class="section section--off-white">
  <div class="container">
    <h1 class="font-size-64">Blog</h1>
  </div>
</section>
<section class="section section--white">
  <div class="container">
  <?php $wp_query = new WP_Query(array('posts_per_page' => get_option('posts_per_page'), 'paged' => $paged)); ?>      
      <div class="post-list">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">         
          <figure class="post-thumbnail">
          <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            echo '<a href="'.get_permalink().'">';
            the_post_thumbnail(array(150,150));
            echo '</a>';
            //echo '<a href="'.get_permalink().'"><img src="'. get_bloginfo('template_directory') .'/img/thumbnail-placeholder.png" alt="Blog thumbnail" /></a>';
          } else {
            //echo '<a href="'.get_permalink().'"><img src="'. get_bloginfo('template_directory') .'/img/thumbnail-placeholder.png" alt="Blog thumbnail" /></a>';
          }?>
          </figure>
          <section class="post-content">
          
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo get_the_date() ?></p>
            
            <?php /*<p class="who-when">by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a> on <?php echo get_the_date() ?> </p>*/ ?>

            <?php //the_excerpt(); ?>
          
            <p class="postmetadata"><?php the_tags(__('Tags:', 'kubrick'), ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>

          </section>
        </article>
      <?php endwhile; ?>
      </div>
  </div>
</section>

<section class="section section--off-white">
    <div class="container">
      <div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('<i class="fas fa-chevron-left fa-fw"></i> Older') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer <i class="fas fa-chevron-right fa-fw"></i>') ?>
        </div>
      </div>
    </div>
</section>

<section class="section section--white">
  <div class="container">
    <?php get_calendar(); ?>
      <h2 class="border-bottom">Categories</h2>
      <?php wp_list_categories('title_li=0'); ?>
      
      <h2 class="border-bottom">Tags</h2>
      <?php wp_tag_cloud(); ?>
      
      <h2 class="border-bottom">Archives</h2>
      <?php wp_get_archives('type=monthly'); ?>
    
      <div class="sub-menu">
        <?php
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
        if ($children) { ?>
        <ul>
          <?php echo $children; ?>
        </ul>
        <?php } ?>

      </div>
  </div>
</section>
</main><!-- #main -->

<?php get_footer(); ?>