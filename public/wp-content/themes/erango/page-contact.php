<?php get_header(); ?>

<main role="main">
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>

<div class="sub-header">
  <div class="container">
    <h1 class=""><?php the_title(); ?></h1>
  </div>
</div>
<?php endif; ?>
<section class="section section--white">
  <div class="container">
    <?php the_content(); ?>
    <div class="">
        <form class="form">
          <div class="form__group">
            <label class="form__label">Name</label>
            <input type="text">
          </div>
          <div class="form__group">
            <label class="form__label">Email</label>
            <input type="text">
          </div>
          <div class="form__group">
            <label class="form__label">Phone</label>
            <input type="text">
          </div>
          <div class="form__group">
            <label class="form__label">Company</label>
            <input type="text">
          </div>
          <div class="form__group form__group--full-width">
            <label class="form__label">Message</label>
            <textarea></textarea>
          </div>
          <div class="form__actions text-center">
            <button class="button button--large button--orange">Send</button>
          </div>
        </form>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>
  <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>