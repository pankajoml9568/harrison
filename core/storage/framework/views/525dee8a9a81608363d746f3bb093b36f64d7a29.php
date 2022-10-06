<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Edit Sub Category')); ?></b> </h3>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.subcategory.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="<?php echo e(route('back.subcategory.update',$subcategory->id)); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
									<?php echo method_field('PUT'); ?>
									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="name"><?php echo e(__('Current Image')); ?> *</label>
										<br>
											<img class="admin-img"
												src="<?php echo e($subcategory->banner ? asset('assets/images/'.$subcategory->banner) : asset('assets/images/placeholder.png')); ?>"
												alt="No Image Found">
                                        <!-- <br>
										<span class="mt-1"><?php echo e(__('Image Size Should Be 60 x 60.')); ?></span> -->
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="banner" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="category_id"><?php echo e(__('Select Category')); ?> *</label>
										<select name="category_id" id="category_id" class="form-control" >
											<?php $__currentLoopData = DB::table('categories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($cat->id); ?>" <?php echo e($subcategory->category_id == $cat->id ? 'selected' :''); ?> ><?php echo e($cat->name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>

									<div class="form-group">
										<label for="name"><?php echo e(__('Name')); ?> *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($subcategory->name); ?>" >
									</div>

									

									<div class="form-group">
										<label
											for="description"><?php echo e(__('Description')); ?>

											</label>
										<textarea name="description" id="description"
											class="form-control" rows="5"
											placeholder="<?php echo e(__('Enter Description')); ?>"
										><?php echo e($subcategory->description); ?></textarea>
									</div>

									<div class="form-group">
										<label for="slug"><?php echo e(__('Slug')); ?> *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="<?php echo e(__('Enter Slug')); ?>" value="<?php echo e($subcategory->slug); ?>" >
									</div>

								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
									</div>

									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/back/subcategory/edit.blade.php ENDPATH**/ ?>