<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Products')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Page Title-->
  <?php echo $__env->make('includes.title', ['banner' => ($category_info)?$category_info->banner:'', 'title'=>($category_info)?$category_info->name:'Shop'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Start default them -->

<!-- End default theme -->

<!-- Start harrison theme -->
<section class="shopping-left-side-bar ">
    <div class="container">
        <div class="row">
            <div
                class="col-12 col-lg-9 col-md-8 shopping-content padding-55px-left md-padding-15px-left sm-margin-30px-bottom" id="list_view_ajax">
                <?php echo $__env->make('front.catalog.catalog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- start sidebar -->
            <aside class="col-12 col-lg-3 col-md-4 shopping-sidebar">
              <?php if(isset($category_info) && !empty($category_info)): ?>
                <div class="border-bottom border-color-medium-gray margin-2-rem-bottom wow animate__fadeIn">
                    <span
                        class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom margin-20px-top">
                        <?php echo e($category_info->name); ?>

                      </span>
                    <p> <?php echo e($category_info->description); ?> </p>
                </div>
                <?php endif; ?>
                <div class="border-bottom border-color-medium-gray margin-3-rem-bottom wow animate__fadeIn">
                    <span
                        class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">
                        <?php echo e(__('Filter by Price')); ?>

                      </span>
                      <form class="price-range-slider" method="post" data-start-min="<?php echo e(request()->input('minPrice') ? request()->input('minPrice') : '0'); ?>" data-start-max="<?php echo e(request()->input('maxPrice') ? request()->input('maxPrice') : $setting->max_price); ?>" data-min="0" data-max="<?php echo e($setting->max_price); ?>" data-step="5">
                        <span class="price-filter d-block margin-10px-top"></span>
                        <div class="price-filter-details">
                            <button type="button" class="btn-filter btn" id="price_filter">Filter</button>
                            <span class="price-filter-amount">
                                <label class="mb-0" for="price-amount">Price:</label>
                                <input type="text" class="price-amount mb-0" id="price-amount" readonly>
                                <span class="min_price d-none"></span>
                                <span class="max_price d-none"></span>
                            </span>
                        </div>
                      </form>
                </div>
                <div class="wow animate__fadeIn">
                    <span
                        class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Product tags</span>
                    <div class="tag-cloud d-inline-block margin-10px-top">
                        <a href="#">Manor Handleset</a>
                        <a href="#" class="bg-smoky-black text-white">Legacy Series</a>
                        <a href="#">Handleset</a>
                        <a href="#">Premium Handleset</a>
                        <a href="#">Economy SS Handleset</a>
                        <a href="#">Alumunex Handleset</a>
                        <a href="#">MS Collection</a>
                        <a href="#">Handleset</a>
                        <a href="#">Projecto Handleset</a>
                        <a href="#">Collect'e’ De chrome</a>
                        <a href="#">Handleset</a>
                        <a href="#">Collection Handleset</a>
                        <a href="#">SS Handleset (C&L Type)</a>
                        <a href="#">Super Saver</a>
                        <a href="#">Handleset</a>
                        <a href="#">Brass Collection</a>
                        <a href="#">Handleset</a>
                    </div>
                </div>
            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- End harrison theme -->

      <form id="search_form" class="d-none" action="<?php echo e(route('front.catalog')); ?>" method="GET">

        <input type="text" name="maxPrice" id="maxPrice" value="<?php echo e(request()->input('maxPrice') ? request()->input('maxPrice') : ''); ?>">
        <input type="text" name="minPrice" id="minPrice" value="<?php echo e(request()->input('minPrice') ? request()->input('minPrice') : ''); ?>">
        <input type="text" name="brand" id="brand" value="<?php echo e(isset($brand) ? $brand->slug : ''); ?>">
        <input type="text" name="brand" id="brand" value="<?php echo e(isset($brand) ? $brand->slug : ''); ?>">
        <input type="text" name="category" id="category" value="<?php echo e(isset($category) ? $category->slug : ''); ?>">
        <input type="text" name="quick_filter" id="quick_filter" value="">
        <input type="text" name="childcategory" id="childcategory" value="<?php echo e(isset($childcategory) ? $childcategory->slug : ''); ?>">
        <input type="text" name="page" id="page" value="<?php echo e(isset($page) ? $page : ''); ?>">
        <input type="text" name="attribute" id="attribute" value="<?php echo e(isset($attribute) ? $attribute : ''); ?>">
        <input type="text" name="option" id="option" value="<?php echo e(isset($option) ? $option : ''); ?>">
        <input type="text" name="subcategory" id="subcategory" value="<?php echo e(isset($subcategory) ? $subcategory->slug : ''); ?>">
        <input type="text" name="sorting" id="sorting" value="<?php echo e(isset($sorting) ? $sorting : ''); ?>">
        <input type="text" name="view_check" id="view_check" value="<?php echo e(isset($view_check) ? $view_check : ''); ?>">


        <button type="submit" id="search_button" class="d-none"></button>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/front/catalog/index.blade.php ENDPATH**/ ?>