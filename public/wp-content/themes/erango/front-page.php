<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>

    <section class="section section--off-white">
        <div class="container">

            <!-- MediaContent -->
            <div class="intro columns columns--align-center">
                <div class="column-4">
                    <figure class="wp-block-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/icon.png" width="640" height="640">
                    </figure>
                </div>
                <div class="column-7 offset-1">
                    <h2>ERANGO</h2>
                    <p>A cloud-based software platform that allows you to organise and manage training, both online and classroom-based and record the skills of your people.</p>
                </div>
            </div>
            <!-- // MediaContent -->

        </div>
    </section>
        
    <section class="section section--white">
        <div class="container">

            <!-- MediaContent -->
            <div class="featured-media-content">
                <div class="featured-media-content__content order-1">
                    <h2>Responsive and fully accessible portals</h2>
                    <p>Tablets and mobile devices, with email and SMS push notifications.</p>
                    <div class="button-group">
                        <a class="button button--orange" href="<?php bloginfo('home'); ?>/features/">Learn more</a>
                    </div>
                </div>
                <div class="featured-media-content__media order-2">
                    <figure class="wp-block-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/graphic1.svg">
                    </figure>
                </div>
            </div>
            <!-- // MediaContent -->

            <div class="section section--off-white section--panel">
                <div class="container">

                    <!-- MediaContent -->
                    <div class="featured-media-content">
                        <div class="featured-media-content__content order-2">
                            <h2>Quick and reliable visibility at any time</h2>
                            <p>See who has been trained, with clear and immediate reporting at your fingertips.</p>
                            <div class="button-group">
                                <a class="button button--orange" href="<?php bloginfo('home'); ?>/features/">Learn more</a>
                            </div>
                        </div>
                        <div class="featured-media-content__media order-1">
                            <figure class="wp-block-image">
                                <img src="<?php bloginfo('template_directory'); ?>/graphic2.svg">
                            </figure>
                        </div>
                    </div>
                    <!-- // MediaContent -->

                </div>
            </div>
        </div>
    </section>

    <section class="section section--blue">
        <div class="container">

            <h2 class="has-text-align-center">Erango provides audit history to demonstrate when people gained those skills and highlights when staff skills are about to expire so they can be retrained.</h2>
            <div class="cards">
                <div class="card">
                    <i class="fad fa-monitor-heart-rate card__icon"></i>
                    <h3 class="card-title">Skills Management</h3>
                </div>
                <div class="card">
                    <i class="fad fa-chalkboard-teacher card__icon"></i>
                    <h3 class="card-title">Competencies</h3>
                </div>
                <div class="card">
                    <i class="fad fa-database card__icon"></i>
                    <h3 class="card-title">Rapid Audit</h3>
                </div>
                <div class="card">
                    <i class="fad fa-mobile-alt card__icon"></i>
                    <h3 class="card-title">Notifications</h3>
                </div>
                <div class="card">
                    <i class="fad fa-users-class card__icon"></i>
                    <h3 class="card-title">Auto Enrolment</h3>
                </div>
                <div class="card">
                    <i class="fad fa-box-check card__icon"></i>
                    <h3 class="card-title">Offline Courses</h3>
                </div>
                <div class="card">
                    <i class="fad fa-users card__icon"></i>
                    <h3 class="card-title">Programmes</h3>
                </div>
                <div class="card">
                    <i class="fad fa-headset card__icon"></i>
                    <h3 class="card-title">SCORM</h3>
                </div>
            </div>
            <div class="button-group button-group--justify-center">
                <a class="button button--orange2" href="<?php echo bloginfo('home'); ?>/features/">Learn more</a>
            </div>

        </div>
    </section>

    <section class="section section--off-white">
        <div class="container">

            <h2 class="has-text-align-center">Who we've worked with</h2>
            <div class="clients">
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
                <div class="client">
                    <img src="<?php bloginfo('template_directory'); ?>/client.png">
                </div>
            </div>
            
        </div>
    </section>

<?php get_footer(); ?>