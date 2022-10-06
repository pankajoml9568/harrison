<?php if(Session::has('success')): ?>
<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <b><?php echo e(Session::get('success')); ?></b>
</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger validation">
	
	<ul class="text-left <?php echo e(count($errors) == 1 ? 'list-unstyled' : ''); ?>">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
            <b><?php echo e($error); ?></b>
        </li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>

<?php endif; ?>
<?php /**PATH /var/www/html/harrison/core/resources/views/includes/alert.blade.php ENDPATH**/ ?>