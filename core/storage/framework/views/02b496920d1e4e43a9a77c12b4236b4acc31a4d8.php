
    <!-- Shop Toolbar-->
        <?php
        function renderStarRating($rating,$maxRating=5) {
            $fullStar = "<i class = 'far fa-star filled'></i>";
            $halfStar = "<i class = 'far fa-star-half filled'></i>";
            $emptyStar = "<i class = 'far fa-star'></i>";
            $rating = $rating <= $maxRating?$rating:$maxRating;

            $fullStarCount = (int)$rating;
            $halfStarCount = ceil($rating)-$fullStarCount;
            $emptyStarCount = $maxRating -$fullStarCount-$halfStarCount;

            $html = str_repeat($fullStar,$fullStarCount);
            $html .= str_repeat($halfStar,$halfStarCount);
            $html .= str_repeat($emptyStar,$emptyStarCount);
            $html = $html;
            return $html;
        }
        ?>

<!-- strat default theme -->
        
<!-- End default theme -->

<!-- Start harrison theme -->

        <ul
            class="product-listing shop-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-2col gutter-large text-center" id="main_div">
            <li class="grid-sizer"></li>
            <!-- start shop item -->
            <?php if($items->count() > 0): ?>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="grid-item wow animate__fadeIn">
                            <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                <?php if($item->is_stock()): ?>
                                    <div class="product-badge
                                        <?php if($item->is_type == 'feature'): ?>
                                        bg-warning
                                        <?php elseif($item->is_type == 'new'): ?>
                                        bg-danger
                                        <?php elseif($item->is_type == 'top'): ?>
                                        bg-info
                                        <?php elseif($item->is_type == 'best'): ?>
                                        bg-dark
                                        <?php elseif($item->is_type == 'flash_deal'): ?>
                                        bg-success
                                        <?php endif; ?>
                                        "> <?php echo e($item->is_type != 'undefine' ?  ucfirst(str_replace('_',' ',$item->is_type)) : ''); ?>

                                    </div>
                                <?php else: ?>
                                <div class="product-badge bg-secondary border-default text-body
                                "><?php echo e(__('out of stock')); ?></div>
                                <?php endif; ?>

                                <?php if($item->previous_price && $item->previous_price !=0): ?>
                                    <div class="product-badge product-badge2 bg-success"> -<?php echo e(PriceHelper::DiscountPercentage($item)); ?></div>
                                <?php endif; ?>
                                
                                <!-- start product image -->
                                <a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                    <div class="product-image border-radius-6px">
                                        <img src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product" />
                                    </div>
                                </a>
                                
                                <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                <div class="product-hover-bottom text-center padding-30px-tb">
                                    <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <a href="javascript:;" class="product-link-icon move-top-bottom" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Quick shop"><i
                                            class="feather icon-feather-zoom-in"></i></a>
                                    <a href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" class="product-link-icon move-top-bottom wishlist_store" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="<?php echo e(__('Add to Wishlist')); ?>"><i
                                            class="feather icon-feather-heart"></i></a>
                                </div>
                            </div>
                            <!-- end product image -->
                            <!-- start product footer -->
                            <div class="product-category">
                                <a href="<?php echo e(route('front.catalog').'?category='.$item->category->slug); ?>"><?php echo e($item->category->name); ?></a>
                            </div>
                            <div class="product-footer text-center gray-bg padding-10px-bottom">
                                <a href="<?php echo e(route('front.product',$item->slug)); ?>"
                                    class="text-extra-dark-gray font-weight-500 d-inline-block">
                                    <?php echo e(strlen(strip_tags($item->name)) > $name_string_count ? substr(strip_tags($item->name), 0, 38) : strip_tags($item->name)); ?>

                                </a>
                                <div class="product-price text-medium">
                                    <?php if($item->previous_price !=0): ?>
                                    <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                                    <?php endif; ?>
                                    <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                                </div>
                            </div>
                            <!-- end product footer -->
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="h4 mb-0"><?php echo e(__('No Product Found')); ?></h4>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- end shop item -->

        </ul>

<!-- End harrison theme -->
<br>
        <!-- Pagination-->
        <div class="row mt-15" id="item_pagination">
            <div class="col-lg-12 text-center">
                <?php echo e($items->links()); ?>

            </div>
        </div>

        <!-- <script type="text/javascript" src="<?php echo e(asset('assets/front/js/catalog.js')); ?>"></script> -->



<?php /**PATH /var/www/html/harrison/core/resources/views/front/catalog/catalog.blade.php ENDPATH**/ ?>