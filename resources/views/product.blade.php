@extends('app')

@push('styles')
    <style>
        div {
            border: 0;
            font-size: 100%;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.menu-sidebar-link').forEach(el => {
                el.addEventListener('click', function(e) {
                    e.preventDefault();
                    const category = this.dataset.category;

                    if(category == "*" || category == ""){
                        window.location.href = window.location.origin + window.location.pathname;
                    }
                    else if (category) {
                        window.location.href = '?category=' + encodeURIComponent(category);
                    }
                });
            });

            document.querySelectorAll('.product-card').forEach(el => {
                el.addEventListener('click', function(e) {
                    e.preventDefault();
                    const product = this.dataset.product;

                    if (product) {
                        window.location.href = '/chi-tiet-san-pham/' + encodeURIComponent(product);
                    }
                });
            });
        });
    </script>
@endpush

@section('content')
    <div class="collection_menu_wrap pt-[40px] pb-[50px] max-991:pt-[2px]">
        <div class="container
        before:content-[' '] before:table after:clear-both after:content-[' '] after:table">
            <div class="row
            before:content-[' '] before:table after:clear-both after:content-[' '] after:table">
                <div
                    class="stikySidebar
                w-[100%]
                float-left
                top-[70px]
                sticky
                left-0
                pr-[53px]
                min-768:w-[100%]
                min-768:float-left
                min-992:w-[19.5%]
                min-992:float-left
                min-1200:w-[25%]
                min-1200:float-left
                max-991:top-[60px]
                max-991:py-[12px] px-[15px]
                max-991:mb-[12px]
                max-991:bg-[#fff]
                max-991:z-[2]
                max-991:shadow-[0px_8px_36px_0px_#0000002B]
                ">
                    <aside class="sidebar_menu bg-[#fff] block max-991:mb-[0px]">
                        <ul class="p-0 m-0 max-991:hidden min-992:block">
                            <x-menu-sidebar-item id="*" message="Tất cả" :isActive="$selected == null">
                            </x-menu-sidebar-item>
                            @foreach ($categories as $category)
                                <x-menu-sidebar-item :id="$category->slug" :message="$category->name" :isActive="$category->slug == $selected">
                                </x-menu-sidebar-item>
                            @endforeach
                        </ul>
                        <select
                            class="leading-inherit normal-case bg-inherit max-991:block max-991:text-[16px] max-991:py-[8px] max-991:px-[12px] max-991:border max-991:border-[#00000026] max-991:rounded-[8px] max-991:w-full min-992:hidden">

                        </select>
                    </aside>
                </div>

                <div
                    class=
            "col-lg-9 col-md-9 col-sm-12 col-xs-12
            before:content-['']
            before:absolute
            before:left-0
            before:w-[2px]
            before:h-[100%]
            before:top-0
            before:bg-[#00000026]
            max-991:w-[100%]
            max-991:float-left
            min-992:w-[80.5%]
            min-992:pl-[72px]
            min-1200:w-[75%]
            min-1200:float-left
            ">
                    <div>
                        <h3 class= "block_menu_item_title text-[#000] m-0 text-[18px]">
                            <span class="float-none inline-block mb-[24px] relative mt-0 text-[35px] font-sans">
                                Cà Phê Highlight
                            </span>
                        </h3>
                        <div class= "menu_list_collection mx-[-15px] flex flex-wrap min-992:flex">
                            @foreach ($items as $item)
                                <x-cards :product="$item" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
