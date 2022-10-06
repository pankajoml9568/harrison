

<?php $__env->startSection('title'); ?>
Awards
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="">
<meta name="description" content="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- Page Title-->
<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Awards'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="app" class="award_cardd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">
                    <cardd data-image="<?php echo e(asset('assets/harrison/images/awards/Icon-of-the-year-2015-for-Locks--Security-Solutions.png')); ?>">
                        <h1 slot="header">Icon of the year 2015</h1>
                        <p slot="content">for Locks & Security Solutions</p>
                    </cardd>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                    <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Global-Quality-Awards-2016-for-Best-Quality-Standards-in-Lock-&-Security-Solutions.png')); ?>">
                        <h1 slot="header">Global Quality Awards 2016</h1>
                        <p slot="content">for Best Quality Standards in Lock & Security Solutions</p>
                    </cardd>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Indian-of-the-year-2017-for-Emerging-Kitchen-Hardware-Brand-of-the-Year.png')); ?>">
                        <h1 slot="header">Indian of the year 2017</h1>
                        <p slot="content">for Emerging Kitchen Hardware Brand of the Year</p>
                    </cardd>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Times-Business-Award-2019-for-Most-Trusted-Brand-in-Locks-&-Hardware-Solution.png')); ?>">
                        <h1 slot="header">Times Business Award 2019</h1>
                        <p slot="content">for Most Trusted Brand in Locks & Hardware Solution</p>
                    </cardd>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Most-Promising-brand-award-2015-for-most-promising-brand-of-the-year-in-locks-&-hardware-solution.png')); ?>">
                        <h1 slot="header">Most Promising brand award 2015 </h1>
                        <p slot="content">for most promising brand of the year in locks & hardware solution</p>
                    </cardd>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Most-Trusted-Brand-in-Asia-2017-for-young-enterepreneur-of-the-year-in-locks-security-solution.png')); ?>">
                        <h1 slot="header">Most Trusted Brand in Asia 2017 </h1>
                        <p slot="content">for young enterepreneur of the year in locks & security solution (Indian)</p>
                    </cardd>
                </div>
            </div> 

            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/Bada-Business-2017-for-token-of-appreciation-in-locks-security-solution.png')); ?>">
                        <h1 slot="header">Bada Business 2017</h1>
                        <p slot="content">for token of appreciation in locks & security solution (India)</p>
                    </cardd>
                </div>
            </div>   
            
            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/being-a-part-of-wbr-corp-uk-limiteds-2021-for-on-being-a-part-of-wbr-corp-uk-limiteds-45-under-45-india-edition-felicitation-2021.png')); ?>">
                        <h1 slot="header">Being a part of wbr corp uk limiteds 2021</h1>
                        <p slot="content">for on being a part of wbr corp uk limiteds 45 under 45 india edition felicitation 2021</p>
                    </cardd>
                </div>
            </div> 
            
            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/25-of-dealers-most-entrepreneurs-2017-for-most-entrepreneurs-2017-locks-hardware-solution.png')); ?>">
                        <h1 slot="header">25 of dealers most entrepreneurs 2017</h1>
                        <p slot="content">for most entrepreneurs 2017 locks & hardware solution</p>
                    </cardd>
                </div>
            </div> 
            
            <div class="col-lg-4 col-md-4">
                <div id="app" class="img-eff">                     
                   <cardd
                        data-image="<?php echo e(asset('assets/harrison/images/awards/bricks-to-home-achievers-club-security.png')); ?>">
                        <h1 slot="header">bricks to home</h1>
                        <p slot="content">achievers club security</p>
                    </cardd>
                </div>
            </div>             

            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/harrison/js/parallax-effect.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\projects\harrison\core\resources\views/front/pages/awards.blade.php ENDPATH**/ ?>