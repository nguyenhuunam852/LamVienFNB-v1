@php
  $defaultImage = env('CDN_URL') . '/webps/product.jpg';
  $defaultName = 'Trà Xanh Espresso Marble';
  $defaultPrice = '49.000 đ';
@endphp

<div class="
product-card
flex-0
basis-[calc(33.333%-30px)]
bg-transparent
mx-[15px]
mb-[40px]
min-h-[145px]
max-991:flex-[0_0_calc(50%-30px)]
"
data-product="{{$product->id}}"
>
    <div class="menu_item_image relative">
        <a class="rounded-[10px] overflow-hidden block w-full pt-[100%] relative shadow-[0px_0px_13px_0px_#00000040]" href="">
            <img class="top-0 left-0 absolute w-full" src="{{ $product?->pictureUrl ?? $defaultImage }}" alt="">
        </a>
    </div>
    <div class="pt-[12px]">
        <h3 class="mt-0 mb-[4px] font-[600] text-[#191919] text-[16px] overflow-hidden text-ellipsis">
            {{ $product?->name ?? $defaultName }}
        </h3>
        <div class="text-[14px] text-[#00000099] mb-[10px]">
            {{ $product?->price ?? $defaultPrice }}
        </div>
    </div>
</div>
