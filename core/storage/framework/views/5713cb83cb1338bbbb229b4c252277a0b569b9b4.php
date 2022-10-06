<?php $__env->startSection('title'); ?>
Milestones
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="">
<meta name="description" content="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- Page Title-->

<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Milestones'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="timeline-container">
    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
        <div class="list-progress">
            <div class="inner"></div>
        </div>
        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Masking Tape & Biometric Locks</p>
            </div>
            <div class="icon-holder">
                2022
            </div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Screws & Tantem</p>
            </div>
            <div class="icon-holder">2019</div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Kitchen Basket & Valv 'E' Drawer Tantem 'E' Boxes</p>
            </div>
            <div class="icon-holder">2016</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Locks & Door Hardware</p>
            </div>
            <div class="icon-holder">2010</div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Handle Plate Sets</p>
            </div>
            <div class="icon-holder">2003</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Locks & Hardware</p>
            </div>
            <div class="icon-holder">2000</div>
        </li>
        <li>

            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Locks & Furniture</p>
            </div>
            <div class="icon-holder">1990</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Lock of all kinds</p>
            </div>
            <div class="icon-holder">1971</div>
        </li>
        <li>

            <div class="bdr_bg">
                <img src="<?php echo e(asset('assets/harrison/images/logo.png')); ?>">
                <p>Launches<br>Brass & Iron Locks</p>
            </div>

            <div class="icon-holder">1951</div>
        </li>
    </ul>
</div>

<?php $__env->startSection('script'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/harrison/js/timeline.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/front/pages/milestones.blade.php ENDPATH**/ ?>