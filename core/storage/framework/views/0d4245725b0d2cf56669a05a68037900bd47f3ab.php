<?php if($sitem->item_type != 'affiliate'): ?>
    <?php if($sitem->is_stock()): ?>
    <a class="product-link-icon move-top-bottom add_to_single_cart"  data-target="<?php echo e($sitem->id); ?>" href="javascript:;"  data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Add to cart"><i class="eather icon-feather-shopping-cart"></i>
    </a>
    <?php else: ?>
    <a class="product-link-icon move-top-bottom" href="<?php echo e(route('front.product',$sitem->slug)); ?>" title="<?php echo e(__('Details')); ?>"><i class="fa fa-arrow-right"></i></a>
    <?php endif; ?>
<?php else: ?>
<a class="product-link-icon move-top-bottom" href="<?php echo e($sitem->affiliate_link); ?>" target="_blank" title="<?php echo e(__('Buy Now')); ?>"><i class="fa fa-arrow-right"></i></a>
<?php endif; ?><?php /**PATH /var/www/html/harrison/core/resources/views/includes/item_footer.blade.php ENDPATH**/ ?>