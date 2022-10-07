
<?php $__env->startSection('meta'); ?>
    <meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
    <meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php
        function renderStarRating($rating, $maxRating = 5)
        {
            $fullStar = "<i class = 'far fa-star filled'></i>";
            $halfStar = "<i class = 'far fa-star-half filled'></i>";
            $emptyStar = "<i class = 'far fa-star'></i>";
            $rating = $rating <= $maxRating ? $rating : $maxRating;

            $fullStarCount = (int) $rating;
            $halfStarCount = ceil($rating) - $fullStarCount;
            $emptyStarCount = $maxRating - $fullStarCount - $halfStarCount;

            $html = str_repeat($fullStar, $fullStarCount);
            $html .= str_repeat($halfStar, $halfStarCount);
            $html .= str_repeat($emptyStar, $emptyStarCount);
            $html = $html;
            return $html;
        }
    ?>


        <!-- start slider section -->
        <section class="p-0 hide-mobile">
            <div class="container-fluid position-relative">                
                <div class="row">
                    <div class="swiper-container full-screen md-h-700px sm-h-450px white-move swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false },  "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">

                        <!--<div class="swiper-slide cover-background" style="background-image:url('<?php echo e(asset("assets/harrison/images/banner1.jpg")); ?>');">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-12 col-xl-8 col-sm-6 d-flex flex-column justify-content-center h-100">
                                            <h1 class="alt-font font-weight-700 title-large dark-blue-color text-uppercase letter-spacing-minus-4px margin-55px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-extra-large md-no-text-shadow xs-w-85 mx-auto mx-sm-0">elegant & secure homes</h1>
                                            <a href="javascript:void(0)"><img src="images/btn.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                             <!-- start slider item -->
                             <div class="swiper-slide cover-background" style="background-image:url('<?php echo e(asset('assets/harrison/images/slider-2.jpg')); ?>');">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-12 col-xl-8 col-sm-6 d-flex flex-column justify-content-center h-100">
                                            <!-- <h1 class="alt-font font-weight-700 title-large ong-color text-uppercase letter-spacing-minus-4px margin-55px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom  md-no-text-shadow xs-w-85 mx-auto mx-sm-0">New Age Hardware Furnishing</h1>
                                            <a href="javascript:void(0)"><img src="images/btn.jpg" alt=""></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide cover-background" style="background-image:url('<?php echo e(asset('assets/harrison/images/slider-1.jpg')); ?>');">
                                
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-12 col-xl-8 col-sm-6 d-flex flex-column justify-content-center h-100">
                                
                                            <!-- <h1 class="alt-font font-weight-700 title-large dark-blue-color text-uppercase letter-spacing-minus-4px margin-55px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom  md-no-text-shadow xs-w-85 mx-auto mx-sm-0">Comfort & ease of modern kitchen</h1>
                                            <a href="javascript:void(0)"><img src="images/btn.jpg" alt=""></a>    -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->

                        </div>
                        <!-- start slider pagination -->
                        <!--<div class="swiper-pagination swiper-light-pagination"></div>-->
                        <!-- end slider pagination -->
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05"><i class="line-icon-Arrow-OutLeft font-size-50"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05"><i class="line-icon-Arrow-OutRight font-size-50"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->

        <!-- start mobile slider section -->
        <section class="p-0 hide-desktop">
            <div class="container-fluid position-relative">                
                <div class="row">
                    <div class="swiper-container white-move swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false },  "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('assets/images/mobile-slider-1.png')); ?>">
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('assets/images/mobile-slider-2.png')); ?>">
                            </div>
                            <!-- end slider item -->
                        </div>
                        <!-- start slider pagination -->
                        <!--<div class="swiper-pagination swiper-light-pagination"></div>-->
                        <!-- end slider pagination -->
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05"><i class="line-icon-Arrow-OutLeft font-size-50"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05"><i class="line-icon-Arrow-OutRight font-size-50"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end mobile slider section -->


        <section class="news-wp">
            <div class="fluid-container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="label ripple">Flash news</div>
                        <div class="Marquee">
                            <div class="Marquee-content">
                                <div class="Marquee-tag">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</div>
                                <div class="Marquee-tag">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- start section -->
        <section class="overflow-visible cover-background wow animate__fadeIn home_ab bg1-a">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6 col-md-10 margin-twenty-five-top lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="position-absolute right-15px bottom-0px w-65 lg-bottom-minus-50px xs-bottom-minus-25px" data-parallax-layout-ratio="1.1">
                            <img src="<?php echo e(asset('assets/harrison/images/about.jpg')); ?>" alt="" />
                        </div>
                        <div class="w-50 overflow-hidden position-relative md-w-70">
                            <img src="<?php echo e(asset('assets/harrison/images/about1.jpg')); ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn home_ab_right_cont" data-wow-delay="0.4s">
                        <div class="alt-font font-weight-500 margin-30px-bottom media"><span class="w-30px h-1px bg-white opacity-7 align-self-center margin-20px-right"></span><div class="media-body"><span class="text-white text-uppercase">Welcome to harrison locks</span></div></div>
                        <h5 class="alt-font text-uppercase text-extra-dark-gray font-weight-700 w-85 margin-30px-bottom xl-w-100">Pioneers in the Lock & Hardware Industry in India</h5>
                        <p class="w-75 xl-w-100"><span class="se">Quality at its core</span> Our R & D department is always at work to improve quality, looks and style.</p>
                        <p class="w-75 xl-w-100"><span class="se">Brand leader in the segment over 6 decades</span> Thanks to the trust shown by our customers over these years. We look forward to a longer journey ahead with you!</p>
                        <a href="<?php echo e(url('corporate-overview')); ?>" class="btn btn-fancy btn-large btn-dark-gray margin-20px-top">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->


        <section class="bg2-b">
            <div class="container-fuild">
                <div class="row justify-content-center">
                    <div
                        class="col-12 col-md-12 text-center margin-7-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-uppercase d-block margin-10px-bottom">Explore our range of
                            products</span>
                        <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">Products catering to your varing needs</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 filter-content">
                        <ul
                            class="portfolio-boxed portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item grid-item-double wow animate__fadeIn">
                                 
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/door-handle.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">Brass Cupboard Lock</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography wow animate__fadeIn">                               
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/cabinet-pull-handles.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div
                                                            class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                            Cabinet Handle</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos web photography wow animate__fadeIn">                               
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/mortise-lock.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div
                                                            class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                            Godown Lock</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>                               
                               </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item grid-item-double branding photography web wow animate__fadeIn">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/cylinders.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div
                                                            class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                            Main Door Lock</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos photography wow animate__fadeIn">                                 
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/main-door-lock.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div
                                                            class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                            Hydraulic Hinges</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos branding wow animate__fadeIn">
                                
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo e(asset('assets/harrison/images/godwn-shutter.jpg')); ?>" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div
                                                    class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">

                                                        <div
                                                            class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                            kitchen</div>
                                                    </div>
                                                    <!-- <div class="ml-auto"><i
                                                            class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- end section -->        

        <!-- start section -->
        <section class="bg3-c">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-4 col-sm-8 text-center text-lg-left md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">Planning your new home or renovating the old one?</h5>
                        <p>Let us help you execute it in a better way. The idea is to connect you with one of our experts to get your dream home become a reality! Choose from one of our empanelled architect/Interior designer today!</p>
                        <a href="<?php echo e(url('architect-and-designer-connect')); ?>" class="btn btn-fancy btn-large btn-dark-gray margin-20px-top">connect with an architect</a>
                    </div>
                    <div class="col-12 col-xl-7 offset-xl-1 col-lg-8 wow animate__fadeInRight" data-wow-delay="0.4s">
                        <div class="swiper-simple-arrow-style-1">
                            <div class="swiper-container black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start testimonials item -->
                                    <div class="swiper-slide text-center">
                                        <div class="feature-box feature-box-left-icon-middle">
                                            <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                                <img class="rounded-circle w-180px h-180px sm-w-150px sm-h-150px xs-w-80px xs-h-80px" src="<?php echo e(asset('assets/harrison/images/home-interior-design-testimonial-img03.jpg')); ?>" alt=""/>
                                            </div>
                                            <div class="feature-box-content">
                                                <p class="w-85 lg-w-100">Over 15-year-extensive professional experience in designing and managing varied array of different types of USA and International projects.</p>
                                                <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">Mixed Folios</div>
                                                <span class="alt-font text-small text-uppercase">Architect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end testimonials item -->
                                    <!-- start testimonials item -->
                                    <div class="swiper-slide text-center">
                                        <div class="feature-box feature-box-left-icon-middle">
                                            <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                                <img class="rounded-circle w-180px h-180px sm-w-150px sm-h-150px xs-w-80px xs-h-80px" src="<?php echo e(asset('assets/harrison/images/home-interior-design-testimonial-img02.jpg')); ?>" alt=""/>
                                            </div>
                                            <div class="feature-box-content">
                                                <p class="w-85 lg-w-100"> Proficient in AutoCAD, REVIT, Photoshop, InDesign, Illustrator, Microsoft Word and PowerPoint.</p>
                                                <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">Bricks form Studio</div>
                                                <span class="alt-font text-small text-uppercase">Interior Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end testimonials item -->
                                    <!-- start testimonials item -->
                                    <div class="swiper-slide text-center">
                                        <div class="feature-box feature-box-left-icon-middle">
                                            <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                                <img class="rounded-circle w-180px h-180px sm-w-150px sm-h-150px xs-w-80px xs-h-80px" src="<?php echo e(asset('assets/harrison/images/home-interior-design-testimonial-img03.jpg')); ?>" alt=""/>
                                            </div>
                                            <div class="feature-box-content">
                                                <p class="w-85 lg-w-100">Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work. Professional support.</p>
                                                <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">RSMS Architect</div>
                                                <span class="alt-font text-small text-uppercase">Sales manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end testimonials item -->
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="bg-penguin-white position-relative lg-padding-nine-top bg4-d" style="padding:80px 0;">
            <div class="container">
                <div class="row justify-content-lg-center">

                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-no-padding-top md-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.2s">
                        <span class="alt-font margin-20px-bottom d-block text-uppercase font-weight-500">Our Premium Products</span>
                        <h6
                            class="alt-font text-uppercase text-extra-dark-gray font-weight-700 margin-40px-bottom md-margin-20px-bottom">
                            We turn smart concepts into durable, safe home solutions</h6>
                        <div class="swiper-button-next-nav-2 swiper-button-next slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutRight"></i></div>
                        <div class="swiper-button-previous-nav-2 swiper-button-prev slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutLeft"></i></div>
                    </div>

                    <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                        <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                            <div class="swiper-container black-move"
                                data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/ball-bearing.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">2-Ball Bearing Butt Hinges</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/caninet-handle.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Caninet Handle</div>
                                        </div>
                                    </div>

                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/door-closer.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Door Closer</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/door-handle.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Door Handle</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/furniture-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Furniture Lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/handle-set.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Handle Set</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/hydraulic-hinges.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Hydraulic Hinges</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- end fancy text box slider item -->

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/maindoor-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Maindoor lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- end fancy text box slider item -->

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/padlock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Padlock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- end fancy text box slider item -->

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/premium-products/tower-bolt.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Tower Bolt</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->    


       <section class="bg1-a">

        <section class="pb-md-0 wow animate__fadeIn pt0">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center overlap-gap-section overlap-height">
                        <img src="<?php echo e(asset('assets/harrison/images/who-we-are-image-2.jpg')); ?>" alt="" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 overlap-section overflow-visible wow animate__fadeIn" style="margin-top: -246.75px; visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row justify-content-center sm-no-margin-lr">
                    <div class="col-12 col-lg-11 box-shadow-medium bg-white align-items-center justify-content-center padding-6-rem-all md-padding-3-rem-all">
                        <div class="row align-items-center justify-content-center mx-lg-0">
                            <div class="col-12 col-xl-12 col-md-6 col-sm-11 text-center sm-margin-20px-tb">
                                <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom  sm-margin-20px-bottom"><span class="font-weight-600 uppercase">Visualizer</h5>
                                <p class="margin-40px-bottom sm-margin-30px-bottom">
                                This feature will help you choose the layout of doors/windows/kitchen etc and the ability to place different designs of locks, knobs and other fixtures to see how they look.</p>
                                <a href="javascript:void(0)" class="btn btn-small btn-dark-gray uppercase">DISCOVER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

        <!-- start section -->
        <section class="bg-penguin-white position-relative lg-padding-nine-top bg2-b" style="padding:80px 0;">
            <div class="container">
                <div class="row justify-content-lg-center">

                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-no-padding-top md-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.2s">
                        <span class="alt-font margin-20px-bottom d-block text-uppercase font-weight-500">Our Featured Products</span>
                        <h6
                            class="alt-font text-uppercase text-extra-dark-gray font-weight-700 margin-40px-bottom md-margin-20px-bottom">
                            We turn smart concepts into durable, safe home solutions</h6>
                        <div class="swiper-button-next-nav-2 swiper-button-next slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutRight"></i></div>
                        <div class="swiper-button-previous-nav-2 swiper-button-prev slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutLeft"></i></div>
                    </div>
                    <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                        <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                            <div class="swiper-container black-move"
                                data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/4-ball-bearing-butt-hinges.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">4-Ball Bearing Butt Hinges</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/auto-close-concealed-hinges.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Auto Close Concealed Hinges</div>
                                        </div>
                                    </div>

                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/center-shutter-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Center Shutter Lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/door-closer.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Door Closer</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/door-handle.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Door Handle</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/door-handle-set.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Door Handle Set</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/door-stopper.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Door Stopper</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/main-door-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">main door lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->


                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/pad-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Pad lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/pro-soft-slide.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">Pro Soft Slide</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/screws.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Screws</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/side-shutter-loc.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                           <div class="move-btn">side shutter lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->

                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover img-radius">
                                            <img src="<?php echo e(asset('assets/harrison/images/feature-product/soft-touch-lock.jpg')); ?>">
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <div class="move-btn">Soft Touch Lock</div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start section -->
        <section class="blog_sec bg5-e">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 text-center wow animate__fadeIn">
                        <span class="text-uppercase letter-spacing-1px d-block">Harrison Locks</span>
                        <h5 class="alt-font font-weight-700 text-slate-blue letter-spacing-minus-1px text-uppercase">In the News</h5>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="https://timesofindia.indiatimes.com/harrison-locks-expanding-in-modular-kitchen-builder-hardware-biz-eyes-rs-150-cr-turnover-by-2025/articleshow/91470049.cms" target="_blank" title=""><img src="<?php echo e(asset('assets/harrison/images/home-blog-1.jpg')); ?>" alt=""></a>
                                        <!-- <a href="blog-masonry.html" class="blog-category alt-font">Blog 1</a> -->
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="blog-masonry.html" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom"> <i class="line-icon icon-simple-line-calendar"> </i> 18 February 2020</a>
                                        <!-- <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">sdfsdd</a> -->
                                        <p>Harrison Locks expanding in modular kitchen, builder hardware</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="avtar-image" src="images/avtar28.jpg" alt=""/>
                                            <span class="alt-font text-small mr-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Admin</a></span>
                                            <a href="blog-post-layout-01.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>28</span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="https://www.forbesindia.com/article/brand-connect/three-generations-of-market-leadership-by-harrison/61587/1" target="_blank"  title=""><img src="<?php echo e(asset('assets/harrison/images/home-blog-2.jpg')); ?>" target="_blank" alt=""></a>
                                        <!-- <a href="javascript:void(0)" class="blog-category alt-font">Blog 2</a> -->
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="javascript:void(0)" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom"> <i class="line-icon icon-simple-line-calendar"> </i> 09 January 2020</a>
                                        <!-- <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">Simplicity is the ultimate sophistication</a> -->
                                        <p>Three generations of market leadership by Harrison</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="avtar-image" src="images/avtar27.jpg" alt=""/>
                                            <span class="alt-font text-small mr-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Admin</a></span>
                                            <a href="blog-post-layout-02.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>30</span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="https://timesofindia.indiatimes.com/city/delhi/harrison-locks-forays-in-new-areas-eyes-rs500cr-revenue-by20/articleshow/53582898.cms" target="_blank" title=""><img src="<?php echo e(asset('assets/harrison/images/home-blog-3.jpg')); ?>" alt=""></a>
                                        <!-- <a href="blog-masonry.html" class="blog-category alt-font">Blog 3</a> -->
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom"> <i class="line-icon icon-simple-line-calendar"> </i> 12 December 2020</a>
                                        <!-- <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">People ignore designs that ignore people</a> -->
                                        <p>Harrison Locks forays in new areas; eyes Rs500cr revenue by 2020</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="avtar-image" src="images/avtar29.jpg" alt=""/>
                                            <span class="alt-font text-small mr-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Admin</a></span>
                                            <a href="blog-post-layout-03.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>23</span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
                  
            </div>
        </section>
        <!-- end section -->
        
        <!-- start section -->
        <section class="big-section add-section bg6-f">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h2>Our Offices</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <figure class="address_cont">
                            <h4>REGISTERED OFFICE</h4>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    XIII/5612, GANDHI MARKET,SADAR BAZAR, DELHI-110006(INDIA)</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:011-43503866">TEL:-011-43503866</a>
                                </li>
                                <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></li> -->
                            </ul>
                        </figure>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <figure class="address_cont">
                            <h4>CORRPORATE OFFICE</h4>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    13&14, CENTRAL MARKET, PUNJABI BAGH (WEST) </br> NEW DELHI –(INDIA) </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a
                                        href="tel:+011-45761101">011-45761101</a>(10 LINES)</li>
                                <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></li> -->
                            </ul>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <figure class="address_cont">
                            <h4>ALIGARH BRANCH</h4>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> MADAR GATE,AGRA ROAD ALIGARH-202001(UP)
                                    INDIA</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:18005725795">TOLL FREE: 18005725795</a>
                                </li>
                                <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></li> -->
                            </ul>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <figure class="address_cont"
                            style="background-image: url(<?php echo e(asset('assets/harrison/images/lock-blur-bg.jpg')); ?>); background-position: center center; background-size: cover; background-repeat: no-repeat; text-align: center;">
                            <div class="view_all">
                                <a href="javascript:void(0)">View All Listing</a>
                            </div>
                        </figure>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end section --> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\harrison\core\resources\views/front/themes/theme1.blade.php ENDPATH**/ ?>