<?php get_header(); ?>

<main role="main">
<div class="sub-header">
  <div class="container">
    <h1>Search</h1>
  </div>
</div>

<section class="section section--white">
  <div class="container">
    <p>Search results for: <b><?php echo get_search_query(); ?></b></p>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <?php endwhile; ?>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>