<?php $__env->startSection('content'); ?>

<!-- Start of Main Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('View Lead')); ?></b> </h3>
                <!-- <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="<?php echo e(route('lead.destroy', ['type' => $type, 'id' => $lead->id])); ?>">
                    <i class="fas fa-trash-alt"></i>
                </a> -->
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('leads.list', ['type' => $type])); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
            </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card ">
				<div class="card-body">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
                            <?php $__currentLoopData = $lead->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h4>
                                    <?php echo e(ucwords(str_replace('_'," ", $key))); ?> :
                                    <strong>
                                        <?php if(in_array($key, ['created_at', 'updated_at'])): ?> 
                                            <?php echo e(date('d M, Y', strtotime($value))); ?>

                                        <?php elseif(str_contains($value, "assets")): ?>
                                           <a href="<?php echo e(asset($value)); ?>" class="btn btn-sm btn-primary" target="_blank">View</a>
                                        <?php else: ?>
                                            <?php echo e($value); ?>

                                        <?php endif; ?>
                                    </strong>
                                </h4>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
<!-- End of Main Content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/back/leads/view.blade.php ENDPATH**/ ?>