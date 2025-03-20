@extends('app')

@section('content')
    <section class="banner w-full h-full object-cover block mb-[30px]">
        <div class="banner-main relative w-full h-[600px] overflow-hidden pb-[10px] max-575:hidden">
            <img loading="lazy" class="banner w-full h-full object-cover block mb-[30px]"
                src="{{ env('CDN_URL') }}/webps/banner.webp" alt="#" fetchpriority="high" />
            <div class="banner-content z-[4] text-center w-[70%] left-[50%] text-[#fff] absolute bottom-auto top-[50%]">
                <h1 class="banner-item text-[6rem] text-inherit">Lam Vien Project</h1>
            </div>
        </div>
    </section>

    <div class="section-1 pt-[0px]">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>
                            About our travel agency
                        </h2>
                        <span> fact that a reader will be
                            distracted by the readable content of a page when looking at
                            its
                            layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters,</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="section-1-box">
                            <p class="max-1199:m-0 !important">
                                <span class="max-1199:pr-[0px] inline-block pr-[360px]">There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look
                                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                    to be
                                    sure thereThere are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised words which
                                    don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to
                                    be sure there
                                </span>
                            </p>
                            <div class="palne-img-area absolute top-[-20px] left-[65%] w-[35%] h-[120%] max-1199:hidden">
                                <img loading="lazy" src="{{ env('CDN_URL') }}/webps/plane-img.webp" class="w-full h-full animated animateHidden"
                                    alt="images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="w-[200px] text-[17px] py-[20px] px-[0px] bg-[#ee580f] text-[#fff] leading-[20px] rounded-[30px] text-center mt-[70px] mr-auto ml-auto flex justify-center" href="/san-pham">Find More Products</a>
        </div>
    </div>

    <div class="section-2 bg-[#8EBC38] mt-[90px] pt-[54px] pb-[54px] rounded-br-[160px] rounded-tl-[160px] max-767:rounded-br-[0px] max-767:pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>The Best Tours</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable content of
                            a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row carousel-container overflow-hidden relative m-auto max-767:block max-767:mr-0 max-767:ml-0 max-767:p-0">
                <div class="carousel-wrapper flex m-auto">
                    <a href="/" class="h-[450px] p-[20px] mb-[20px] rounded-[10px] mx-[10px] overflow-hidden col-sm carousel-item item animate__animated animateHidden max-767:mx-0 max-767:min-w-[100%]">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/1.webp" alt="#"
                            fetchpriority="high" />
                        <h3>Holiday Tour</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="h-[450px] p-[20px] mb-[20px] rounded-[10px] mx-[10px] overflow-hidden col-sm carousel-item item animate__animated animateHidden max-767:mx-0 max-767:min-w-[100%]">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="h-[450px] p-[20px] mb-[20px] rounded-[10px] mx-[10px] overflow-hidden col-sm carousel-item item animate__animated animateHidden max-767:mx-0 max-767:min-w-[100%]">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/3.webp" alt="#"
                            fetchpriority="high" />
                        <h3>London</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="h-[450px] p-[20px] mb-[20px] rounded-[10px] mx-[10px] overflow-hidden col-sm carousel-item item animate__animated animateHidden max-767:mx-0 max-767:min-w-[100%]">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                </div>
            </div>
            <div class="dots-container text-center mt-[10px]">
            </div>
        </div>
    </div>

    <div class="section-3 bg-[#fff] pt-[90px]">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Blog</h2>
                        <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 max-767:mb-[20px]">
                    <div class="section-3-box animate__animated animateHidden">
                        <figure class="block m-[0px]">
                            <img loading="lazy"
                                src="{{ env('CDN_URL') }}/webps/blog-image0.webp"
                                alt="#" />
                            <span class="top-[0px] left-0 absolute ml-[15px] bg-[#022739] py-[10px] px-[30px] text-[#fff]">4 Feb 2019</span>
                        </figure>
                        <div class="travel py-[15px] px-0">
                            <span class="text-[#13aba6] inline-block">Post By : Travel Agency</span>
                            <p class="float-right pl-[15px] text-[16px] leading-[30px]"><strong class="hightlight-section-3 text-[#13b0be]"> 06 </strong> Comment</p>
                            <p class="float-right pl-[15px] text-[16px] leading-[30px]"><strong class="hightlight-section-3 text-[#13b0be]">05 </strong>Like</p>
                        </div>
                        <h3 class="text-[13px]">London Amazing Tour</h3>
                        <p class="text-[16px] leading-[30px]">It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-3-box animate__animated animateHidden">
                        <figure class="block m-[0px]">
                            <img loading="lazy"
                                src="{{ env('CDN_URL') }}/webps/blog-image.webp"
                                alt="#" />
                            <span class="top-[0px] left-0 absolute ml-[15px] bg-[#022739] py-[10px] px-[30px] text-[#fff]">10 Feb 2019</span>
                        </figure>
                        <div class="travel py-[15px] px-0">
                            <span class="text-[#13aba6] inline-block">Post By : Travel Agency</span>
                            <p class="float-right pl-[15px] text-[16px] leading-[30px]"><strong class="hightlight-section-3 text-[#13b0be]"> 06 </strong> Comment</p>
                            <p class="float-right pl-[15px] text-[16px] leading-[30px]"><strong class="hightlight-section-3 text-[#13b0be]">05 </strong>Like</p>
                        </div>
                        <h3 class="text-[13px]">London Amazing Tour</h3>
                        <p class="text-[16px] leading-[30px]">It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        function animateOnScroll() {

            // Get the current scroll position
            let windowTop = window.scrollY;
            let windowBottom = window.scrollY + window.innerHeight;

            // Handle .palne-img-area elements
            document.querySelectorAll('.palne-img-area .animateHidden, .palne-img-area .visible').forEach(function(
                element) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;

                if (elementBottom - 50 < windowBottom) {
                    let delay = 0;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('animateHidden');
                    element.classList.add('visible', 'animated', 'fadeInUp');
                }
            });

            // Handle #demos elements
            document.querySelectorAll('.section-2 .animateHidden, .section-2 .visible').forEach(function(element,
                index) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;
                let middle = (elementBottom - elementTop) / 2;

                if (elementBottom - middle < windowBottom) {
                    let delay = index * 50;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('animateHidden');
                    element.classList.add('visible', 'animated', 'fadeInRight');
                }
            });

            // Handle .section-3 elements
            document.querySelectorAll('.section-3 .animateHidden, .section-3 .visible').forEach(function(element,
                index) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;

                if (elementBottom < windowBottom + 10) {
                    let delay = index * 200;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('animateHidden');
                    element.classList.add('visible', 'animated', 'fadeInLeft');
                }
            });

            // Reset elements to hidden when at the top of the page
            if (windowTop === 0) {
                document.querySelectorAll('.palne-img-area .visible').forEach(function(element) {
                    element.classList.remove('visible', 'animated', 'fadeInUp');
                    element.classList.add('animateHidden');
                });

                document.querySelectorAll('.section-2 .hidden, .section-2 .visible').forEach(function(
                    element) {
                    element.classList.remove('visible', 'animated', 'fadeInRight');
                    element.classList.add('animateHidden');
                });

                document.querySelectorAll('.section-3 .hidden, .section-3 .visible').forEach(function(
                    element) {
                    element.classList.remove('visible', 'animated', 'fadeInLeft');
                    element.classList.add('animateHidden');
                });
            }

        }

        const wrapper = document.querySelector(".carousel-wrapper");
        const items = document.querySelectorAll(".item");
        const dotsContainer = document.querySelector(".dots-container");
        const totalItems = items.length;

        let itemsPerPage = getItemsPerPage();
        let currentIndex = 0;
        let dots = [];

        // ✅ Determines the number of items per page based on screen width
        function getItemsPerPage() {
            return window.innerWidth <= 768 ? 1 : 3; // 1 item on mobile, 3 on desktop
        }

        // ✅ Initializes dots and updates event listeners
        function initCarousel() {
            dotsContainer.innerHTML = ""; // Clear previous dots
            let totalDots = Math.ceil(totalItems / itemsPerPage);

            dots = Array.from({
                length: totalDots
            }, (_, i) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                if (i === 0) dot.classList.add("active");
                dot.dataset.index = i;
                dot.addEventListener("click", () => updateCarousel(i));
                dotsContainer.appendChild(dot);
                return dot;
            });

            updateCarousel(0); // Reset to first slide
        }

        // ✅ Moves carousel to the selected index
        function updateCarousel(index) {
            currentIndex = index;
            wrapper.style.transform = `translateX(${-currentIndex * (100 / itemsPerPage)}%)`;

            dots.forEach(dot => dot.classList.remove("active"));
            dots[currentIndex].classList.add("active");
        }

        // ✅ Initialize carousel on page load
        window.addEventListener("load", () => {

            itemsPerPage = getItemsPerPage();
            initCarousel();
        });

        window.addEventListener("resize", () => {
            let newItemsPerPage = getItemsPerPage();
            if (newItemsPerPage !== itemsPerPage) {
                itemsPerPage = newItemsPerPage;
                initCarousel();
            }
        });

        window.addEventListener('scroll', animateOnScroll);

    });
</script>
@endpush
