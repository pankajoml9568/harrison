<?php $__env->startSection('title'); ?>
 <?php echo e($item->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($item->meta_keywords); ?>">
<meta name="description" content="<?php echo e($item->meta_description); ?>">
<?php $__env->stopSection(); ?>



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

<?php $__env->startSection('content'); ?>


<?php echo $__env->make('includes.title', ['banner' => ($category_info)?$category_info->banner:'', 'title'=>($item)?$item->name:'Product'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Harrison theme start -->

  <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 shopping-content d-flex flex-column flex-lg-row">
                    <div class="w-60 md-w-100">
                        <div class="product-images-box lightbox-portfolio row">
                            <div class="col-12 col-lg-9 px-lg-0 order-lg-2 product-image md-margin-10px-bottom">
                                <div class="swiper-container product-image-slider" data-slider-options='{ "spaceBetween": 10, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                    <div class="swiper-wrapper">
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <a class="gallery-link" href="<?php echo e(asset('assets/images/'.$item->photo)); ?>">
                                                <img class="w-100" src="<?php echo e(asset('assets/images/'.$item->photo)); ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="<?php echo e(asset('assets/images/'.$gallery->photo)); ?>">
                                                    <img class="w-100" src="<?php echo e(asset('assets/images/'.$gallery->photo)); ?>" alt="">
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- end slider item -->
                                    </div>
                                </div>
                                <div class="slider-product-next swiper-button-next text-extra-dark-gray"><i class="fa fa-chevron-right"></i></div>
                                <div class="slider-product-prev swiper-button-prev text-extra-dark-gray"><i class="fa fa-chevron-left"></i></div>
                            </div>
                            <div class="col-12 col-lg-3 order-lg-1 single-product-thumb md-margin-50px-bottom sm-margin-40px-bottom">
                                <div class="swiper-container product-image-thumb slider-vertical padding-15px-lr padding-45px-bottom md-no-padding left-0px">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="w-100" src="<?php echo e(asset('assets/images/'.$item->photo)); ?>" alt="">
                                        </div>
                                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <img class="w-100" src="<?php echo e(asset('assets/images/'.$gallery->photo)); ?>" alt="">
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="swiper-thumb-next-prev text-center">
                                    <div class="swiper-button-prev swiper-thumb-prev"><i class="fa fa-chevron-up"></i></div>
                                    <div class="swiper-button-next swiper-thumb-next"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-40 md-w-100 product-summary padding-5-rem-left lg-padding-5-rem-left md-no-padding-left">
                        <div class="d-flex align-items-center margin-3-half-rem-tb md-margin-1-half-rem-tb">
                            <div class="flex-grow-1">

                            <input type="hidden" id="item_id" value="<?php echo e($item->id); ?>">
                            <input type="hidden" id="demo_price" value="<?php echo e(PriceHelper::setConvertPrice($item->discount_price)); ?>">
                            <input type="hidden" value="<?php echo e(PriceHelper::setCurrencySign()); ?>" id="set_currency">
                            <input type="hidden" value="<?php echo e(PriceHelper::setCurrencyValue()); ?>" id="set_currency_val">
                            <input type="hidden" value="<?php echo e($setting->currency_direction); ?>" id="currency_direction">

                                <div class="text-extra-dark-gray font-weight-500 text-extra-large alt-font margin-5px-bottom">
                                    <?php echo e($item->name); ?>

                                </div>
                                <span class="product-price text-extra-medium">Design Code: 1097</span>
                                <br>
                                <?php if($item->previous_price != 0): ?>
                                    <small class="d-inline-block"><del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del></small>
                                <?php endif; ?>

                                <span id="main_price" class="product-price main-price"><?php echo e(PriceHelper::grandCurrencyPrice($item)); ?></span>

                                <div class="mb-3">
                                    <div class="rating-stars d-inline-block gmr-3">
                                    <?php echo renderStarRating($item->reviews->avg('rating')); ?>

                                    </div>
                                    <?php if($item->is_stock()): ?>
                                        <span class="text-success  d-inline-block"><?php echo e(__('In Stock')); ?></span>
                                    <?php else: ?>
                                        <span class="text-danger  d-inline-block"><?php echo e(__('Out of stock')); ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <div class="last-paragraph-no-margin margin-20px-bottom">
                            <p> <strong>Body Material:</strong> White Metal </p>
                            <p> <strong>Available Finish:</strong> Brush Matt, RG PVD</p>
                            <p> <strong>Application Suitable For:</strong> Main Door, Entrance, Bedroom</p>

                            <h4>Feature: </h4>
                            <ul>
                                <li>Material - Zinc Die Casting.</li>
                                <li>Grade - Zamak 5.</li>
                                <li>Smooth Movement.</li>
                                <li>Long Lasting Finish.</li>
                                <li>Scratch Proof.</li>
                                <li>Rust Resistant.</li>
                                <li>Product as per International Standard.</li>
                            </ul>
                            <p class="text-muted"><?php echo e($item->sort_details); ?> <a href="#details" class="scroll-to"><?php echo e(__('Read more')); ?></a></p>
                        </div>

                        <div class="row margin-top-1x">
                            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($attribute->options->count() != 0): ?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="<?php echo e($attribute->name); ?>"><?php echo e($attribute->name); ?></label>
                                    <select class="form-control attribute_option" id="<?php echo e($attribute->name); ?>">
                                        <?php $__currentLoopData = $attribute->options->where('stock','!=','0'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($option->name); ?>" data-type="<?php echo e($attribute->id); ?>" data-href="<?php echo e($option->id); ?>" data-target="<?php echo e(PriceHelper::setConvertPrice($option->price)); ?>"><?php echo e($option->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="margin-4-rem-topmargin-4-rem-top">
                            <!-- <div class="quantity margin-15px-right">
                                <label class="screen-reader-text">Quantity</label>
                                <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="quantity">
                                <input class="input-text qty-text" type="number" name="quantity" value="1" min="1">
                                <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="quantity">
                            </div> -->
                            <!-- <a href="#" class="btn btn-dark-gray btn-medium">Add to cart</a> -->

                            <div class="row align-items-end pb-4">
                                <div class="col-sm-12 d-flex">
                                    <?php if($item->item_type == 'normal'): ?>
                                    <div class="quantity margin-15px-right">
                                        <label class="screen-reader-text">Quantity</label>
                                        <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="quantity">
                                        <input class="input-text qty-text qtyValue" type="number" name="quantity" value="1" min="1">
                                        <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="quantity">
                                    </div>
                                    <?php endif; ?>
                                    <div class="p-action-button">
                                    <?php if($item->item_type != 'affiliate'): ?>
                                        <?php if($item->is_stock()): ?>
                                        <button class="btn btn-dark-gray btn-medium m-0 a-t-c-mr" id="add_to_cart"><i class="icon-bag"></i><span><?php echo e(__('Add to Cart')); ?></span></button>
                                        <button class="btn btn-dark-gray btn-medium m-0" id="but_to_cart"><i class="icon-bag"></i><span><?php echo e(__('Buy Now')); ?></span></button>
                                        <?php else: ?>
                                            <button class="btn btn-dark-gray btn-medium m-0"><i class="icon-bag"></i><span><?php echo e(__('Out of stock')); ?></span></button>
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <a href="<?php echo e($item->affiliate_link); ?>" target="_blank" class="btn btn-dark-gray btn-medium m-0"><span><i class="icon-bag"></i><?php echo e(__('Buy Now')); ?></span></a>
                                    <?php endif; ?>

                                    </div>

                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <img src="<?php echo e(asset('assets/harrison/images/1097-details.jpg')); ?>" alt="">
                </div>
            </div>
    </div>
  <!-- Harrison theme End -->



  <!-- Reviews-->
  <div class="container  review-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2 class="h3"><?php echo e(__('Latest Reviews')); ?></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
              <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <div class="single-review">
                  <div class="comment">
                    <div class="comment-author-ava"><img class="lazy" data-src="<?php echo e(asset('assets/images/'.$review->user->photo)); ?>" alt="Comment author"></div>
                    <div class="comment-body">
                      <div class="comment-header d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="comment-title mb-1"><?php echo e($review->subject); ?></h4>
                            <span><?php echo e($review->user->first_name); ?></span>
                            <span class="ml-3"><?php echo e($review->created_at->format('M d, Y')); ?></span>
                        </div>
                        <div class="mb-2">
                          <div class="rating-stars">
                            <?php
                                for($i=0; $i<$review->rating;$i++){
                                 echo "<i class = 'far fa-star filled'></i>";
                                }
                            ?>
                          </div>
                        </div>
                      </div>
                      <p class="comment-text  mt-2"><?php echo e($review->review); ?></p>

                    </div>
                  </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <div class="card p-5">
                <?php echo e(__('No Review')); ?>

              </div>
              <?php endif; ?>
              <div class="row mt-15">
                <div class="col-lg-12 text-center">
                    <?php echo e($reviews->links()); ?>

                </div>
            </div>

          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <div class="d-inline align-baseline display-3 mr-1"><?php echo e(round($item->reviews->avg('rating'),2)); ?></div>
                  <div class="d-inline align-baseline text-sm text-warning mr-1">
                    <div class="rating-stars"><?php echo renderStarRating($item->reviews->avg('rating')); ?></div>
                  </div>
                </div>
                <div class="pt-3">
                  <label class="text-medium text-sm">5 <?php echo e(__('stars')); ?> <span class="text-muted">- <?php echo e($item->reviews->where('status',1)->where('rating',5)->count()); ?></span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($item->reviews->where('status',1)->where('rating',5)->sum('rating') * 20); ?>%; height: 2px;" aria-valuenow="100" aria-valuemin="<?php echo e($item->reviews->where('rating',5)->sum('rating') * 20); ?>" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">4 <?php echo e(__('stars')); ?> <span class="text-muted">- <?php echo e($item->reviews->where('status',1)->where('rating',4)->count()); ?></span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($item->reviews->where('status',1)->where('rating',4)->sum('rating') * 20); ?>%; height: 2px;" aria-valuenow="<?php echo e($item->reviews->where('rating',4)->sum('rating') * 20); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">3 <?php echo e(__('stars')); ?> <span class="text-muted">- <?php echo e($item->reviews->where('status',1)->where('rating',3)->count()); ?></span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($item->reviews->where('rating',3)->sum('rating') * 20); ?>%; height: 2px;" aria-valuenow="<?php echo e($item->reviews->where('rating',3)->sum('rating') * 20); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">2 <?php echo e(__('stars')); ?> <span class="text-muted">- <?php echo e($item->reviews->where('status',1)->where('rating',2)->count()); ?></span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($item->reviews->where('status',1)->where('rating',2)->sum('rating') * 20); ?>%; height: 2px;" aria-valuenow="<?php echo e($item->reviews->where('rating',2)->sum('rating') * 20); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">1 <?php echo e(__('star')); ?> <span class="text-muted">- <?php echo e($item->reviews->where('status',1)->where('rating',1)->count()); ?></span></label>
                  <div class="progress mb-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($item->reviews->where('status',1)->where('rating',1)->sum('rating') * 20); ?>; height: 2px;" aria-valuenow="0" aria-valuemin="<?php echo e($item->reviews->where('rating',1)->sum('rating') * 20); ?>" aria-valuemax="100"></div>
                  </div>
                </div>
                <?php if(Auth::user()): ?>
                    <div class="pb-2"><a class="btn btn-primary btn-block" href="#" data-bs-toggle="modal" data-bs-target="#leaveReview"><span><?php echo e(__('Leave a Review')); ?></span></a></div>
                    <?php else: ?>
                    <div class="pb-2"><a class="btn btn-primary btn-block" href="<?php echo e(route('user.login')); ?>" ><span><?php echo e(__('Login')); ?></span></a></div>
                <?php endif; ?>
              </div>
            </div>
          </div>


    </div>
  </div>


  

  <!-- start section -->
<?php if(count($related_items)>0): ?>
<section class=" gray-bg wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 text-center margin-4-rem-bottom sm-margin-2-rem-bottom">
                <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related products</h5>
                <span class="alt-font font-weight-500 text-uppercase d-inline-block margin-5px-bottom">You may also like</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start shop item -->
                    <?php $__currentLoopData = $related_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="grid-item">
                        <div class="product-box">
                            <!-- start product image -->
                            <div class="product-image border-radius-6px">
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

                                <a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                    <img class="default-image" src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt=""/>
                                    <img class="hover-image" src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt=""/>
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
                                    <?php echo e(strlen(strip_tags($item->name)) > 38 ? substr(strip_tags($item->name), 0, 38) : strip_tags($item->name)); ?>

                                </a>
                                <div class="product-price text-medium">
                                    <?php if($item->previous_price !=0): ?>
                                    <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                                    <?php endif; ?>
                                    <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                                </div>
                            </div>
                            <!-- end product footer -->
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- end shop item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end section -->




<?php if(auth()->guard()->check()): ?>
<form class="modal fade ratingForm" action="<?php echo e(route('front.review.submit')); ?>" method="post" id="leaveReview" tabindex="-1">
  <?php echo csrf_field(); ?>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo e(__('Leave a Review')); ?></h4>
        <button class="close modal_close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php
            $user = Auth::user();
        ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="review-name"><?php echo e(__('Your Name')); ?></label>
              <input class="form-control" type="text" id="review-name" value="<?php echo e($user->first_name); ?>" required>
            </div>
          </div>
          <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="review-email"><?php echo e(__('Your Email')); ?></label>
              <input class="form-control" type="email" id="review-email" value="<?php echo e($user->email); ?>" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="review-subject"><?php echo e(__('Subject')); ?></label>
              <input class="form-control" type="text" name="subject" id="review-subject" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="review-rating"><?php echo e(__('Rating')); ?></label>
              <select name="rating" class="form-control" id="review-rating">
                <option value="5">5 <?php echo e(__('Stars')); ?></option>
                <option value="4">4 <?php echo e(__('Stars')); ?></option>
                <option value="3">3 <?php echo e(__('Stars')); ?></option>
                <option value="2">2 <?php echo e(__('Stars')); ?></option>
                <option value="1">1 <?php echo e(__('Star')); ?></option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="review-message"><?php echo e(__('Review')); ?></label>
          <textarea class="form-control" name="review" id="review-message" rows="8" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit"><span><?php echo e(__('Submit Review')); ?></span></button>
      </div>
    </div>
  </div>
</form>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/front/catalog/product.blade.php ENDPATH**/ ?>