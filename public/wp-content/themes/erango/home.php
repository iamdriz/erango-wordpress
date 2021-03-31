<?php get_header(); ?>

<div class="sub-header sub-header--off-white">
  <div class="container">
    <h1 class="sub-header__title"><?php single_post_title(); ?></h1>
  </div>
</div>
<section class="section section--white" style="padding-top:0;">
  <div class="container">
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
  </div>
</section>

<section class="section section--off-white">
    <div class="container">
      <!--<div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('<i class="fas fa-chevron-left fa-fw"></i> Older') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer <i class="fas fa-chevron-right fa-fw"></i>') ?>
        </div>
      </div>-->
      <?php erango_numeric_posts_nav(); ?>
    </div>
</section>

<!--<section class="section section--white">
  <div class="container">
      <h3>Calender</h3>
      <?php get_calendar(); ?>

      <h3>Categories</h3>
      <?php wp_list_categories('title_li=0'); ?>
      
      <h3>Tags</h3>
      <?php wp_tag_cloud(); ?>
      
      <h3>Archives</h3>
      <?php wp_get_archives('type=monthly'); ?>

      <h3>Authors</h3>
      <?php wp_list_authors('exclude_admin=0&optioncount=1&show_fullname=1&hide_empty=1'); ?> 
    
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

        <?php get_search_form(); ?>

        <?php wp_list_bookmarks(); ?>

        <?php wp_meta(); ?>

        <h3>Feeds</h3>
        <ul class="feeds">
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
    <li><a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Syndicate this site using Atom'); ?>"><?php _e('Atom'); ?></a></li>
    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
</ul>

      </div>
  </div>
</section>-->

<?php get_footer(); ?>