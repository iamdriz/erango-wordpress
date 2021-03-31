    <?php if(is_front_page()) : ?>
    <div class="section section--orange">
            <div class="container">
                <h2 class="has-text-align-center">Contact us</h2>
                <ul class="contact-links">
                    <li class="">
                        <a href="mailto:hello@erango.co.uk"><i class="far fa-envelope"></i> hello@erango.co.uk</a>
                    </li>
                    <li class="">
                        <a href="tel:0114123456"><i class="far fa-phone"></i> 0800 000 000</a>
                    </li>
                    <li class="">
                        <a href="https://twitter.com/erangouk"><i class="fab fa-twitter"></i> @erangouk</a>
                    </li>
                </ul>
                <div class="button-group button-group--justify-center">
                    <a class="button button--white" href="<?php bloginfo('home'); ?>/contact/">Get in touch</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<div class="footer">
    <div class="container">
        <div class="footer-columns">
            <div class="footer-column footer-column__left">
                <p>Erango is part of the Nicholas Associates Group of Companies.</p>
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
                <nav class="footer-nav">
                    <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'container' => '',
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
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
            $('.image-list').slick({
                autoplay: true,
                slidesToShow: 1,
                prevArrow: '<button class="slick-prev" aria-label="Previous">\
                    <i class="fas fa-caret-left"></i>\
                    </button>',
                nextArrow: '<button class="slick-next" aria-lable="Next">\
                    <i class="fas fa-caret-right"></i>\
                    </button>',
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '16.6%'
            });
        });

        var lastScrollTop = 0;

        $(window).scroll(function(event){
            fixedHeader();
        });

        function fixedHeader() {
            var scrollTop = $(this).scrollTop();
            var header = $('.header');
            var threshold = 128;

            if (scrollTop > lastScrollTop) { // scroll down
                if(scrollTop > threshold) { // scrolled past the threshold
                    header.addClass('header--hidden');
                    header.removeClass('header--visible');
                    setTimeout(function() { // wait until the header has hidden
                        header.addClass('header--fixed');
                    }, 200);
                } else {
                    header.removeClass('header--hidden header--visible');
                }
            } else { // scroll up
                header.removeClass('header--hidden');
                header.addClass('header--visible');
                if(scrollTop === 0) header.removeClass('header--fixed'); // remove fixed when top
            }
            
            lastScrollTop = scrollTop;
        }

        $(document).on('click', '.burger__link', (e) => {
            e.preventDefault();
            let burger = $('.burger__link');
            burger.toggleClass('burger__link--active');
            $('body').toggleClass('show-menu');
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>