<div class="section section--orange text-center">
        <div class="container">
            <h2 class="text-center margin-b-48">Contact us</h2>
            <ul class="contact-links">
                <li class="">
                    <a href="#"><i class="far fa-envelope"></i> hello@erango.co.uk</a>
                </li>
                <li class="">
                    <a href="#"><i class="far fa-phone"></i> 0800 000 000</a>
                </li>
                <li class="">
                    <a href="#"><i class="fab fa-twitter"></i> @erango</a>
                </li>
            </ul>
            <a class="button button--large button--white" href="/contact">Get in touch</a>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column footer-column__left">
                    <p class="margin-b-16">Erango is part of the Nicholas Associates Group of Companies.</p>
                    <p>Registered in England - Company number: 03606174 - VAT Registration no: GB727824120</p>
                </div>
                <div class="footer-column footer-column__center">
                    <ul class="social">
                        <li class="">
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="">
                            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i
                                    class="fab fa-facebook"></i></a>
                        </li>
                        <li class="">
                            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li class="">
                            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i
                                    class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo bloginfo('sitetitle') ?>. All rights reserved.</p>
                </div>
                <div class="footer-column footer-column__right">
                    <nav id="footer-menu" class="footer-nav">
                        <ul class="">
                            <li class="">
                                <a class="" href="<?php bloginfo('home'); ?>">Cookies</a>
                            </li>
                            <li class="">
                                <a class="" href="<?php bloginfo('home'); ?>">Privacy Policy</a>
                            </li>
                            <li class="">
                                <a class="" href="<?php bloginfo('home'); ?>">GDPR</a>
                            </li>
                            <li class="">
                                <a class="" href="<?php bloginfo('home'); ?>">Contact</a>
                            </li>
                        </ul>
                        <?php wp_nav_menu( array( 
                        'theme_location' => 'footer-menu', 
                        'container' => 'nav',
                        'container_class' => '',
                        'fallback_cb' => false ) ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            AOS.init({
                once: true
            });
            $('.clients').slick({
                autoplay: true,
                slidesToShow: 4,
                prevArrow: '<button class="slick-prev" aria-label="Previous">\
                    <i class="fas fa-caret-left"></i>\
                    </button>',
                nextArrow: '<button class="slick-next" aria-lable="Next">\
                    <i class="fas fa-caret-right"></i>\
                    </button>',
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });

        var lastScrollTop = 0;

        $(window).scroll(function(event){
            fixedHeader();
        });

        $(document).ready(function(){
            fixedHeader();
        });

        function fixedHeader() {
            var scrollTop = $(this).scrollTop();
            var headerHeight = 128; // we cant get this dynamically due to the changing height
            var threshold = ($(window).height() / 2);
            var delta = 16;

            if(Math.abs(lastScrollTop - scrollTop) <= delta) return;

            // Make header fixed to the viewport once scrolled past
            if(scrollTop > headerHeight) {
                $('.header').addClass('header--fixed'); 
            } else {
                $('.header').removeClass('header--fixed');
            }

            // Make header transitionable once scrolled past the threshold minus the header
            // This is to prevent the header from animating when the header becomes fixed
            // Remove to disable animations on the header entirely
            if(scrollTop > (threshold - headerHeight)) {
                $('.header').addClass('header--transitionable');
            } else {
                $('.header').removeClass('header--transitionable');
            }

            // Make header visible if scrolling up and past the threshold
            if(scrollTop > threshold) {
                if (scrollTop > lastScrollTop) {
                    $('.header').removeClass('header--fixed--visible');
                } else {
                    $('.header').addClass('header--fixed--visible');
                }
            } else {
                $('.header').removeClass('header--fixed--visible');
            }
            
            lastScrollTop = scrollTop;
        }
    </script>
    <?php wp_footer(); ?>
</body>

</html>