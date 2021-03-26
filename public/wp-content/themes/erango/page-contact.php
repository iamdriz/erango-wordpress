<?php get_header(); ?>

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
    <div style="position:relative;background:var(--orange);border-radius:32px;padding: 64px 0;margin:0 -64px 48px;">
      <div class="container">
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
            <button class="button button--large button--white">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section section--off-white">
      <div class="container">
      <div class="columns is-align-center">
        <div class="col-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.057819900236!2d-1.389826148249561!3d53.395905579891256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879828bbb0574dd%3A0x8274f2d4e6ffa06b!2sNicholas%20Associates%20(Sheffield)!5e0!3m2!1sen!2suk!4v1616260852008!5m2!1sen!2suk"
          width="800" height="600" style="border:0;max-width:100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-5 offset-1">
          <h3>Nicholas Associates (Sheffield)</h3>
          <p>Unit 8<br>Europa Green<br>Sheffield Business Park<br>Sheffield<br>S9 1XH</p>
        </div>
      </div>
      </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>