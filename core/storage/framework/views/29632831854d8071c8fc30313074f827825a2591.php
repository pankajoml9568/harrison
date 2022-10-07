<?php $__env->startSection('content'); ?>

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 "><b><?php echo e(__('Customers List')); ?></b></h3>
                </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped table-responsive" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
                            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th><?php echo e(ucwords(str_replace('_'," ", $column))); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
              			<?php echo $__env->make('back.leads.table',compact('data', 'type'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>

</div>
<!-- End of Main Content -->




<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Confirm Delete?')); ?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			<?php echo e(__('You are going to delete this Admin. All contents related with this admin will be lost.')); ?> <?php echo e(__('Do you want to delete it?')); ?>

		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
			<form action="" class="d-inline btn-ok" method="POST">

                <?php echo csrf_field(); ?>

                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>

			</form>
		</div>

      </div>
    </div>
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/back/leads/index.blade.php ENDPATH**/ ?>