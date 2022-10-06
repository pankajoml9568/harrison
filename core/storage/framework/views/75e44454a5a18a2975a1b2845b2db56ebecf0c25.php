<?php $__env->startSection('title'); ?>
    <?php echo e(__('Page')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<!-- start page title -->

<section class="parallax inner-banner" data-parallax-background-ratio="0.5" style="background-image: url('<?php echo e(asset('assets/harrison/images/page-title-bg-03.jpg')); ?>');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 page-title-large text-center">
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom"><?php echo e($page->title); ?></h1>
                <span class="d-block text-white opacity-6 alt-font margin-5px-bottom xs-line-height-20px"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a> // <?php echo e($page->title); ?> </span>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($page->details)): ?>
    <div class="container">
        <?php echo $page->details; ?>

    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/front/page.blade.php ENDPATH**/ ?>