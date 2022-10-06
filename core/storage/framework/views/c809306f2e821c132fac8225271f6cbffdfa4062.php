

<?php $__env->startSection('title'); ?>
Videos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="">
<meta name="description" content="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- Page Title-->
<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Videos'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- start section -->
<section class="big-section">
    <div class="container">       
        <div class="row">
            <div class="col-12 col-md-6 text-center fit-videos sm-margin-30px-bottom">
                <!-- start youtube video -->
                <iframe width="560" height="315" src="<?php echo e(asset('assets/harrison/videos/video_1.mp4')); ?>" autoplay="0" allowfullscreen></iframe>
                <!-- end youtube video -->
            </div>
            <div class="col-12 col-md-6 text-center fit-videos sm-margin-30px-bottom">
                <!-- start youtube video -->
                <iframe width="560" height="315" src="<?php echo e(asset('assets/harrison/videos/vid2.mp4')); ?>" autoplay="0"
                    allowfullscreen></iframe>
                <!-- end youtube video -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\projects\harrison\core\resources\views/front/pages/videos.blade.php ENDPATH**/ ?>