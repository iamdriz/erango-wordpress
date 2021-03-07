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
            <a class="button button--large button--white">Get in touch</a>
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
                    <p>Copyright &copy; 2021 Erango. All rights reserved.</p>
                </div>
                <div class="footer-column footer-column__right">
                    <nav id="footer-menu" class="footer-nav">
                        <ul class="">
                            <li class="">
                                <a class="" href="#">Cookies</a>
                            </li>
                            <li class="">
                                <a class="" href="#">Privacy Policy</a>
                            </li>
                            <li class="">
                                <a class="" href="#">GDPR</a>
                            </li>
                            <li class="">
                                <a class="" href="#">Contact</a>
                            </li>
                        </ul>
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
    </script>

    <style>
        .slick-slider {
            display: flex !important;
            justify-content: center;
            align-items: center;
            gap: 32px;
        }

        .slick-slide {
            display: flex !important;
            justify-content: center;
            padding: 0 16px;
        }

        .slick-prev,
        .slick-next {
            display: flex !important;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            color: var(--orange);
            font-size: 24px;
            line-height: 32px;
            width: 48px;
            height: 48px;
            border-radius: 999em;
            transition: .2s ease-in-out;
        }

        .slick-prev:hover,
        .slick-next:hover {
            background-color: rgba(0, 0, 0, .125);
        }

        .slick-list {
            position: relative;
        }

        .slick-list:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 16px;
            z-index: 2;
            background: linear-gradient(to right, #eee, transparent);
        }

        .slick-list:after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            width: 16px;
            z-index: 2;
            background: linear-gradient(to left, #eee, transparent);
        }

        .slick-dotted {
            padding-bottom: calc(48px - 8px);
        }

        .slick-dots {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            gap: 8px;
        }

        .slick-dots li {
            text-indent: -999em;
            width: 8px;
            height: 8px;
            border: var(--blue) 2px solid;
            border-radius: 999em;
        }

        .slick-dots li.slick-active {
            background-color: var(--orange);
            border-color: var(--orange);
        }
    </style>

</body>

</html>