<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>

<div class="sub-header sub-header--white">
  <div class="container">
    <h1 class="sub-header__title"><?php the_title(); ?></h1>
  </div>
</div>
<?php endif; ?>
<section class="section section--off-white">
  <div class="container">
    <div class="columns">
      <div class="col-12">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, cupiditate debitis laboriosam reiciendis rem quas error perspiciatis eos obcaecati fuga distinctio blanditiis eius doloribus? Rerum in praesentium sint nesciunt? Voluptatibus.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi accusantium incidunt ex alias optio porro tempore harum in quo similique, qui odio ipsam quia fugit iusto, molestias quis, adipisci praesentium.</p>
      </div>
    </div>
  </div>
</section>
<section class="section section--white section--full-height">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>