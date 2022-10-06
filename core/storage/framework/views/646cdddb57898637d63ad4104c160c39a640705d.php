<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <?php $__currentLoopData = $row->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <td>
        <?php if(in_array($key, ['created_at', 'updated_at'])): ?> 
            <?php echo e(date('d M, Y', strtotime($value))); ?>

        <?php elseif(str_contains($value, "assets")): ?>
            <a href="<?php echo e(asset($value)); ?>" class="btn btn-sm btn-primary" target="_blank">View</a>
        <?php else: ?>
            <?php echo e((strlen($value) > 100)?substr($value, 0, 100). '...':$value); ?>

        <?php endif; ?>
    </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm"
                href="<?php echo e(route('lead.show', ['type' => $type, 'id' => $row->id])); ?>">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="<?php echo e(route('lead.destroy', ['type' => $type, 'id' => $row->id])); ?>">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/harrison/core/resources/views/back/leads/table.blade.php ENDPATH**/ ?>