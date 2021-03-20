<?php get_header(); ?>
<main role="main">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>