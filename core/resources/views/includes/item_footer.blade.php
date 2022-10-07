@if ($sitem->item_type != 'affiliate')
    @if ($sitem->is_stock())
    <a class="product-link-icon move-top-bottom add_to_single_cart"  data-target="{{ $sitem->id }}" href="javascript:;"  data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Add to cart"><i class="eather icon-feather-shopping-cart"></i>
    </a>
    @else
    <a class="product-link-icon move-top-bottom" href="{{route('front.product',$sitem->slug)}}" title="{{__('Details')}}"><i class="fa fa-arrow-right"></i></a>
    @endif
@else
<a class="product-link-icon move-top-bottom" href="{{$sitem->affiliate_link}}" target="_blank" title="{{__('Buy Now')}}"><i class="fa fa-arrow-right"></i></a>
@endif