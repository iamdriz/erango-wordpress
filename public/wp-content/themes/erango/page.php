<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>

<div class="sub-header">
  <div class="container">
    <h1 class="sub-header__title"><?php the_title(); ?></h1>
  </div>
</div>
<?php endif; ?>
<section class="section section--white section--full-height">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>