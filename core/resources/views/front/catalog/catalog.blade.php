
    <!-- Shop Toolbar-->
        @php
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
        @endphp

<!-- strat default theme -->
        {{--
        <div class="row g-3" id="main_div">
            @if($items->count() > 0)
                @if ($checkType != 'list')
                    @foreach ($items as $item)
                    <div class="col-xxl-3 col-md-4 col-6">
                        <div class="product-card ">
                            @if ($item->is_stock())
                                <div class="product-badge
                                    @if($item->is_type == 'feature')
                                    bg-warning
                                    @elseif($item->is_type == 'new')
                                    bg-danger
                                    @elseif($item->is_type == 'top')
                                    bg-info
                                    @elseif($item->is_type == 'best')
                                    bg-dark
                                    @elseif($item->is_type == 'flash_deal')
                                    bg-success
                                    @endif
                                    "> {{  $item->is_type != 'undefine' ?  ucfirst(str_replace('_',' ',$item->is_type)) : ''   }}
                                </div>
                            @else
                            <div class="product-badge bg-secondary border-default text-body
                            ">{{__('out of stock')}}</div>
                            @endif

                        @if($item->previous_price && $item->previous_price !=0)
                        <div class="product-badge product-badge2 bg-info"> -{{PriceHelper::DiscountPercentage($item)}}</div>
                        @endif
                        <div class="product-thumb">
                            <img class="lazy" data-src="{{asset('assets/images/'.$item->thumbnail)}}" alt="Product">
                            <div class="product-button-group">
                                <a class="product-button wishlist_store" href="{{route('user.wishlist.store',$item->id)}}" title="{{__('Wishlist')}}"><i class="icon-heart"></i></a>
                                <a class="product-button product_compare" href="javascript:;" data-target="{{route('fornt.compare.product',$item->id)}}" title="{{__('Compare')}}"><i class="icon-repeat"></i></a>
                                @include('includes.item_footer',['sitem' => $item])
                            </div>
                        </div>
                        <div class="product-card-body">
                            <div class="product-category">
                                <a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a>
                            </div>
                            <h3 class="product-title"><a href="{{route('front.product',$item->slug)}}">
                                {{ strlen(strip_tags($item->name)) > $name_string_count ? substr(strip_tags($item->name), 0, 38) : strip_tags($item->name) }}
                            </a></h3>
                            <div class="rating-stars">
                                {!!renderStarRating($item->reviews->avg('rating'))!!}
                            </div>
                            <h4 class="product-price">
                                @if ($item->previous_price !=0)
                                <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                @endif
                                {{PriceHelper::grandCurrencyPrice($item)}}
                            </h4>
                        </div>

                        </div>
                    </div>
                    @endforeach
                @else
                    @foreach ($items as $item)
                        <div class="col-lg-12">
                            <div class="product-card product-list">
                                <div class="product-thumb" >
                                @if ($item->is_stock())

                                    <div class="product-badge
                                        @if($item->is_type == 'feature')
                                        bg-warning
                                        @elseif($item->is_type == 'new')
                                        bg-danger
                                        @elseif($item->is_type == 'top')
                                        bg-info
                                        @elseif($item->is_type == 'best')
                                        bg-dark
                                        @elseif($item->is_type == 'flash_deal')
                                        bg-success
                                        @endif
                                        ">{{  $item->is_type != 'undefine' ?  ucfirst(str_replace('_',' ',$item->is_type)) : ''   }}
                                    </div>
                                    @else
                                    <div class="product-badge bg-secondary border-default text-body
                                    ">{{__('out of stock')}}</div>
                                    @endif
                                    @if($item->previous_price && $item->previous_price !=0)
                                    <div class="product-badge product-badge2 bg-info"> -{{PriceHelper::DiscountPercentage($item)}}</div>
                                    @endif

                                    <img class="lazy" data-src="{{asset('assets/images/'.$item->thumbnail)}}" alt="Product">
                                    <div class="product-button-group">
                                        <a class="product-button wishlist_store" href="{{route('user.wishlist.store',$item->id)}}" title="{{__('Wishlist')}}"><i class="icon-heart"></i></a>
                                        <a data-target="{{route('fornt.compare.product',$item->id)}}" class="product-button product_compare" href="javascript:;" title="{{__('Compare')}}"><i class="icon-repeat"></i></a>
                                        @include('includes.item_footer',['sitem' => $item])
                                    </div>
                                </div>
                                    <div class="product-card-inner">
                                        <div class="product-card-body">
                                            <div class="product-category"><a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a></div>
                                            <h3 class="product-title"><a href="{{route('front.product',$item->slug)}}">
                                                {{ strlen(strip_tags($item->name)) > $name_string_count ? substr(strip_tags($item->name), 0, 52) .'...': strip_tags($item->name) }}
                                            </a></h3>
                                            <div class="rating-stars">
                                                {!! renderStarRating($item->reviews->avg('rating')) !!}
                                            </div>
                                            <h4 class="product-price">
                                                @if ($item->previous_price !=0)
                                                <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                                @endif
                                                {{PriceHelper::grandCurrencyPrice($item)}}
                                            </h4>
                                            <p class="text-sm sort_details_show  text-muted hidden-xs-down my-1">
                                            {{ strlen(strip_tags($item->sort_details)) > 100 ? substr(strip_tags($item->sort_details), 0, 100) : strip_tags($item->sort_details) }}
                                            </p>
                                        </div>


                                    </div>
                                </div>
                        </div>
                    @endforeach
                @endif
            @else
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="h4 mb-0">{{ __('No Product Found') }}</h4>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        --}}
<!-- End default theme -->

<!-- Start harrison theme -->

        <ul
            class="product-listing shop-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-2col gutter-large text-center" id="main_div">
            <li class="grid-sizer"></li>
            <!-- start shop item -->
            @if($items->count() > 0)
                    @foreach ($items as $item)

                        <li class="grid-item wow animate__fadeIn">
                            <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                @if ($item->is_stock())
                                    <div class="product-badge
                                        @if($item->is_type == 'feature')
                                        bg-warning
                                        @elseif($item->is_type == 'new')
                                        bg-danger
                                        @elseif($item->is_type == 'top')
                                        bg-info
                                        @elseif($item->is_type == 'best')
                                        bg-dark
                                        @elseif($item->is_type == 'flash_deal')
                                        bg-success
                                        @endif
                                        "> {{  $item->is_type != 'undefine' ?  ucfirst(str_replace('_',' ',$item->is_type)) : ''   }}
                                    </div>
                                @else
                                <div class="product-badge bg-secondary border-default text-body
                                ">{{__('out of stock')}}</div>
                                @endif

                                @if($item->previous_price && $item->previous_price !=0)
                                    <div class="product-badge product-badge2 bg-success"> -{{PriceHelper::DiscountPercentage($item)}}</div>
                                @endif
                                
                                <!-- start product image -->
                                <a href="{{route('front.product',$item->slug)}}">
                                    <div class="product-image border-radius-6px">
                                        <img src="{{asset('assets/images/'.$item->thumbnail)}}" alt="Product" />
                                    </div>
                                </a>
                                
                                <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                <div class="product-hover-bottom text-center padding-30px-tb">
                                    @include('includes.item_footer',['sitem' => $item])

                                    <a href="javascript:;" class="product-link-icon move-top-bottom" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Quick shop"><i
                                            class="feather icon-feather-zoom-in"></i></a>
                                    <a href="{{route('user.wishlist.store',$item->id)}}" class="product-link-icon move-top-bottom wishlist_store" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="{{__('Add to Wishlist')}}"><i
                                            class="feather icon-feather-heart"></i></a>
                                </div>
                            </div>
                            <!-- end product image -->
                            <!-- start product footer -->
                            <div class="product-category">
                                <a href="{{route('front.catalog').'?category='.$item->category->slug}}">{{$item->category->name}}</a>
                            </div>
                            <div class="product-footer text-center gray-bg padding-10px-bottom">
                                <a href="{{route('front.product',$item->slug)}}"
                                    class="text-extra-dark-gray font-weight-500 d-inline-block">
                                    {{ strlen(strip_tags($item->name)) > $name_string_count ? substr(strip_tags($item->name), 0, 38) : strip_tags($item->name) }}
                                </a>
                                <div class="product-price text-medium">
                                    @if ($item->previous_price !=0)
                                    <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                    @endif
                                    {{PriceHelper::grandCurrencyPrice($item)}}
                                </div>
                            </div>
                            <!-- end product footer -->
                        </li>

                    @endforeach
            @else
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="h4 mb-0">{{ __('No Product Found') }}</h4>
                        </div>
                    </div>
                </div>
            @endif
            <!-- end shop item -->

        </ul>

<!-- End harrison theme -->
<br>
        <!-- Pagination-->
        <div class="row mt-15" id="item_pagination">
            <div class="col-lg-12 text-center">
                {{$items->links()}}
            </div>
        </div>

        <!-- <script type="text/javascript" src="{{asset('assets/front/js/catalog.js')}}"></script> -->



