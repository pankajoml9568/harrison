
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title><?php echo $__env->yieldContent('hometitle'); ?></title>
<?php else: ?>
<title><?php echo e($setting->title); ?> -<?php echo $__env->yieldContent('title'); ?></title>
<?php endif; ?>

<!-- SEO Meta Tags-->
<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">

<?php echo $__env->yieldContent('styleplugins'); ?>

<!-- Theme css-->
<!-- <link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>"> -->
<!-- End theme css -->

<!-- Harrison css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/harrison/css/font-icons.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/harrison/css/theme-vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/harrison/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/harrison/css/responsive.css')); ?>">
<!-- Harrison -->


<!-- Color css -->
<!-- <link href="<?php echo e(asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet"> -->

<!-- Modernizr-->
<!-- <script src="<?php echo e(asset('assets/front/js/modernizr.min.js')); ?>"></script> -->

<?php if(DB::table('languages')->where('is_default',1)->first()->rtl == 1): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl.css')); ?>">
<?php endif; ?>
<style>
    <?php echo e($setting->custom_css); ?>

</style>

<?php if($setting->is_google_adsense == '1'): ?>
    <?php echo $setting->google_adsense; ?>

<?php endif; ?>



<?php if($setting->is_google_analytics == '1'): ?>
    <?php echo $setting->google_analytics; ?>

<?php endif; ?>



<?php if($setting->is_facebook_pixel == '1'): ?>
    <?php echo $setting->facebook_pixel; ?>

<?php endif; ?>


</head>
<!-- Body-->
<body data-mobile-nav-style="classic">

<!-- Preloader Start -->
<?php if($setting->is_loader == 1): ?>
<div id="preloader">
    <img src="<?php echo e(asset('assets/images/'.$setting->loader)); ?>" alt="<?php echo e(__('Loading...')); ?>">
</div>
<?php endif; ?>

<!-- Preloader endif -->


<!-- Page Content-->

<!-- Harrison Header -->
<header class="">
    <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-transparent header-dark fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-5 col-md-2 pl-lg-0 mr-auto mr-lg-0">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" data-at2x="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" alt="" class="default-logo">
                        <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" data-at2x="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" alt="" class="alt-logo">
                        <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" data-at2x="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" class="mobile-logo" alt="">
                    </a>
                </div>
                <div class="col-auto col-md-8 text-right">
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">About Us <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="<?php echo e(route('corporateOverview')); ?>">Corporate Overview</a></li>
                                    <li class="dropdown"><a href="<?php echo e(route('missionVision')); ?>">Mission & Vision</a></li>
                                    <!-- <li class="dropdown"><a href="#">Message From CEO </a></li> -->
                                    <li class="dropdown"><a href="<?php echo e(route('ourClient')); ?>">Our Clients</a></li>
                                    <li class="dropdown"><a href="<?php echo e(route('milestones')); ?>">Milestones</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Achievements <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="<?php echo e(route('awards')); ?>">Award</a></li>
                                    <li class="dropdown"><a href="#">News & Media</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Dealer Centre <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#">Dealer Locator</a></li>
                                    <li class="dropdown"><a href="<?php echo e(route('form.become-a-dealer')); ?>">Become a Partner</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Architects & Designers <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="<?php echo e(route('form.architect-and-designer-connect')); ?>">Connect with Architects</a></li>
                                    <li class="dropdown"><a href="<?php echo e(route('form.become-a-associate')); ?>">Become an Associate</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Gallery <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="<?php echo e(route('gallery')); ?>">Images</a></li>
                                    <li class="dropdown"><a href="<?php echo e(route('videos')); ?>">Videos</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown megamenu">
                                <a href="#" class="nav-link">Shop <i class="fas fa-angle-down dropdown-toggle"></i></a>

                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                    <div class="d-lg-flex justify-content-center">
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Door Handle</a></li>
                                            <li><a href="#">Cabinet & Pull Handles</a></li>
                                            <li><a href="#">Mortise Lock</a></li>
                                            <li><a href="#">Cylinders & Pincylindrical Lock</a></li>
                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Main Door lock</a></li>
                                            <li><a href="#">Godwn & Shutter lock</a></li>
                                            <li><a href="#">Furniture Locks</a></li>
                                            <li><a href="#">Ball Bearing Slides</a></li>

                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Furniture Hardware</a></li>
                                            <li><a href="#">Furniture & Door Hardware</a></li>
                                            <li><a href="#">Door Bolt & Accessories</a></li>
                                            <li><a href="#">Padlocks</a></li>

                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Screws & Fasteners</a></li>
                                            <li><a href="#">Modular Kitchen</a></li>
                                            <li><a href="#">Modular Storage</a></li>
                                            <li><a href="#">Bike & Cycle Lock</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-md-2 text-right hidden-xs px-lg-0 hide-social-icon">
                    <div class="header-social-icon d-inline-block">
                        <a href="https://www.facebook.com/HarrisonLocks-1494725410855716" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-twitter"></i></a>
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i
                                    class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left"
                                    action="#">
                                    <div class="search-form-box">
                                        <span
                                            class="search-label alt-font text-small text-uppercase text-medium-gray">What
                                            are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995"
                                            placeholder="Enter your keywords..." name="s" value="" type="text"
                                            autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                    </div>


                </div>
            </div>
        </nav>

    


    <!-- end navigation -->
</header>
<!-- end HARRISON header -->

<?php echo $__env->yieldContent('content'); ?>

<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
    <?php if($setting->announcement_type == 'newletter'): ?>
        <div class="announcement-with-content">
            <div class="left-area">
                <img src="<?php echo e(asset('assets/images/'.$setting->announcement)); ?>" alt="">
            </div>
            <div class="right-area">
                <h3 class=""><?php echo e($setting->announcement_title); ?></h3>
                <p><?php echo e($setting->announcement_details); ?></p>
                <form class="subscriber-form" action="<?php echo e(route('front.subscriber.submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input class="form-control" type="email" name="email" placeholder="<?php echo e(__('Your e-mail')); ?>">
                        <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                    <div aria-hidden="true">
                        <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                    </div>

                    <button class="btn btn-primary btn-block mt-2" type="submit">
                        <span><?php echo e(__('Subscribe')); ?></span>
                    </button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <a href="<?php echo e($setting->announcement_link); ?>">
            <img src="<?php echo e(asset('assets/images/'.$setting->announcement)); ?>" alt="">
        </a>
    <?php endif; ?>


</div>
<!--    announcement banner section end   -->

<!-- theme Site Footer-->



<!-- Harrison footer-->

<footer class="footer-dark bg-slate-blue bg7-g">
    <div class="footer-top padding-40px-tb border-bottom border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 text-center sm-margin-20px-bottom">
                    <span
                        class="alt-font font-weight-500 d-inline-block align-middle margin-5px-right text-uppercase">FOR
                        SALES AND BUSINESS QUERY</span>
                    <a href="tel:1800-572-5795"
                        class="alt-font font-weight-500 text-large d-inline-block text-white text-uppercase text-decoration-line-bottom-gradient">1800-572-5795<span
                            class="bg-white"></span></a>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <div class="row ">
                <!-- start footer column -->
                <div class="col-12 col-xl-4 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>" alt="Footer Logo"></a>
                    <!-- <p style="padding-top:15px;">Over 6 decades, Harrison which has been brand leader in locks &
                        hardware solution. Be fealess & desire for more from HARRISON with a bold thinking and
                        rigorous craftsmanship combine to bring innovative, sturdy products.</p> -->
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div class="col-12 col-xl-2 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom">
                    <h4>Quick Link</h4>
                    <ul>
                        <!-- <li><a href="#">Products</a></li> -->
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <li><a href="<?php echo e(route('front.contact')); ?>">Contact us</a></li>
                        <li><a href="<?php echo e(route('form.career')); ?>">Career</a></li>
                        <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo e(url('disclaimer')); ?>">Disclaimer</a></li>
                        <li><a href="<?php echo e(url('terms-and-conditions')); ?>">Terms & Conditions</a></li>
                    </ul>
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div
                    class="col-12 col-xl-3 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom contact-info">
                    <h4>Contact Info</h4>
                    <ul class="address-infor">
                        <li>
                            <div class="desc">13 & 14, Central Market, Punjabi Bagh (West), New Delhi-110026
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <a href="tel:1145761101">+91 114 576 1101 -10 ( 10 lines)</a>
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div
                    class="col-12 col-xl-3 col-lg-4 col-sm-8 text-sm-center text-lg-left last-paragraph-no-margin">
                    <h4>Subscribe to newsletter</h4>
                    <form class="row subscriber-form" action="<?php echo e(route('front.subscriber.submit')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="newsletter-style-03 position-relative margin-30px-tb">
                            <input class="small-input border-transperent rounded m-0 required" name="email"
                                placeholder="Enter your email address" type="email">
                            <button class="btn btn-gradient-fast-blue-purple rounded-right" type="submit">
                                <i class="feather icon-feather-mail icon-extra-small m-0"></i></button>
                            <div class="form-results rounded position-absolute d-none"></div>
                        </div>
                    </form>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; Copyright <?php echo e(date('Y')); ?> <b>harrisonlocks.com</b>. All Rights Reserved.</p>
    </div>
</footer>

<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>

<!-- Harrison footer end -->

<!-- Cookie alert dialog  -->
<?php if($setting->is_cookie == 1): ?>
<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!-- Cookie alert dialog  -->


<?php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
?>

<script>
    var mainbs = <?php echo $mainbs; ?>;
    var decimal_separator = '<?php echo $setting->decimal_separator; ?>';
    var thousand_separator = '<?php echo $setting->thousand_separator; ?>';
</script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<!-- <script type="text/javascript" src="<?php echo e(asset('assets/front/js/plugins.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/scripts.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.plugin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/myscript.js')); ?>"></script> -->

<!-- Harrison script -->
<script type="text/javascript" src="<?php echo e(asset('assets/front/harrison/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/harrison/js/theme-vendors.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/harrison/js/main.js')); ?>"></script>
<!-- End harrison script -->

<script type="text/javascript" src="<?php echo e(asset('assets/front/js/plugins.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.plugin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/scripts.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/myscript.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

<?php if($setting->is_facebook_messenger	== '1'): ?>
 <?php echo $setting->facebook_messenger; ?>

<?php endif; ?>

<script type="text/javascript">
    let mainurl = '<?php echo e(route('front.index')); ?>';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
    </script>

    <?php if(Session::has('error')): ?>
    <script>
      $(document).ready(function(){
        DangerNotification('<?php echo e(Session::get('error')); ?>')
      })

    </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
    <script>
      $(document).ready(function(){
        SuccessNotification('<?php echo e(Session::get('success')); ?>');
      })

    </script>
    <?php endif; ?>

</body>
</html>
<?php /**PATH /var/www/html/harrison/core/resources/views/master/front.blade.php ENDPATH**/ ?>