<?php get_header(); ?>

<main role="main">
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>

<section class="section section--off-white">
  <div class="container">
    <h1 class="font-size-48"><?php the_title(); ?></h1>
  </div>
</section>
<?php endif; ?>
<section class="section section--white section--full-height">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>
  <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>