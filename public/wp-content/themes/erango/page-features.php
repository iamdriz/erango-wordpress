<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>

<div class="sub-header sub-header--white">
  <div class="container">
    <h1 class="font-size-48"><?php the_title(); ?></h1>
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
<section class="section section--off-white">
  <div class="container">
    <div class="image-list">
      <div class="image-item">
        <img src="https://picsum.photos/1920/1080?random=1" width="1920" height="1080">
      </div>
      <div class="image-item">
        <img src="https://picsum.photos/1920/1080?random=2" width="1920" height="1080">
      </div>
      <div class="image-item">
        <img src="https://picsum.photos/1920/1080?random=3" width="1920" height="1080">
      </div>
      <div class="image-item">
        <img src="https://picsum.photos/1920/1080?random=4" width="1920" height="1080">
      </div>
    </div>
  </div>
</section>
<section class="section section--white">
      <div class="container">
        <h2 class="text-center margin-b-48">Section title?</h2>
      <div class="columns is-align-center margin-b-48">
            <div class="col-5">
                  <h3>Header</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rerum, numquam asperiores commodi adipisci necessitatibus dolorum voluptatum nisi? Sequi, maiores unde aperiam nisi dolorem minus vero maxime consectetur non labore!</p>
            </div>
            <div class="col-6 offset-1">
                <figure class="">
                <img class="rounded" src="https://picsum.photos/1920/1080?random=5" width="1920" height="1080">
                </figure>
            </div>
        </div>
        <div class="columns is-align-center">
            <div class="col-6">
                <figure class="">
                <img class="rounded" src="https://picsum.photos/1920/1080?random=6" width="1920" height="1080">
                </figure>
            </div>
            <div class="col-5 offset-1">
                <h3>Header</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rerum, numquam asperiores commodi adipisci necessitatibus dolorum voluptatum nisi? Sequi, maiores unde aperiam nisi dolorem minus vero maxime consectetur non labore!</p>
                </div>
        </div>
      </div>
</section>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>