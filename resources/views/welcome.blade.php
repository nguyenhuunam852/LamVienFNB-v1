@extends('app')

@push('styles')
    <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/app.css">
@endpush

@section('content')
    <section class="banner">
        <div class="banner-main">
            <img loading="lazy" class="banner" src="{{ env('CDN_URL') }}/webps/banner.webp"
                alt="#" fetchpriority="high" />
            <div class="banner-content">
                <h1 class="banner-item">Lam Vien Project</h1>
            </div>
        </div>
    </section>

    <div class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About our travel agency</h2>
                        <span> fact that a reader will be distracted by the readable content of a page when looking at
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
                            <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority
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
                                    be sure there</span></p>
                            <div class="palne-img-area">
                                <img loading="lazy"
                                    src="{{ env('CDN_URL') }}/webps/plane-img.webp"
                                    class="animated hidden" alt="images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/san-pham">Find More Products</a>
        </div>
    </div>
    <div class="section-2">
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
            <div class="row carousel-container">
                <div class="carousel-wrapper">
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/1.webp" alt="#"
                            fetchpriority="high" />
                        <h3>Holiday Tour</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/3.webp" alt="#"
                            fetchpriority="high" />
                        <h3>London</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                    <a href="/" class="col-sm carousel-item item animate__animated hidden">
                        <img loading="lazy" class="img-responsive"
                            src="{{ env('CDN_URL') }}/webps/2.webp" alt="#"
                            fetchpriority="high" />
                        <h3>New York</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                    </a>
                </div>
            </div>
            <div class="dots-container"></div>
        </div>
    </div>
    <div class="section-3">
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
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-3-box animate__animated hidden">
                        <figure><img loading="lazy"
                                src="{{ env('CDN_URL') }}/webps/blog-image0.webp"
                                alt="#" />
                            <span>4 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="hightlight-section-3"> 06 </strong> Comment</p>
                            <p><strong class="hightlight-section-3">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-3-box animate__animated hidden">
                        <figure><img loading="lazy"
                                src="{{ env('CDN_URL') }}/webps/blog-image.webp"
                                alt="#" />
                            <span>10 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="hightlight-section-3"> 06 </strong> Comment</p>
                            <p><strong class="hightlight-section-3">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
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
            document.querySelectorAll('.palne-img-area .hidden, .palne-img-area .visible').forEach(function(
                element) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;

                if (elementBottom - 50 < windowBottom) {
                    let delay = 0;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('hidden');
                    element.classList.add('visible', 'animated', 'fadeInUp');
                }
            });

            // Handle #demos elements
            document.querySelectorAll('.section-2 .hidden, .section-2 .visible').forEach(function(element,
                index) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;
                let middle = (elementBottom - elementTop) / 2;

                if (elementBottom - middle < windowBottom) {
                    let delay = index * 50;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('hidden');
                    element.classList.add('visible', 'animated', 'fadeInRight');
                }
            });

            // Handle .section-3 elements
            document.querySelectorAll('.section-3 .hidden, .section-3 .visible').forEach(function(element,
                index) {
                let elementTop = element.getBoundingClientRect().top + window.scrollY;
                let elementBottom = elementTop + element.offsetHeight;

                if (elementBottom < windowBottom + 10) {
                    let delay = index * 200;
                    element.style.animationDelay = delay + 'ms';
                    element.classList.remove('hidden');
                    element.classList.add('visible', 'animated', 'fadeInLeft');
                }
            });

            // Reset elements to hidden when at the top of the page
            if (windowTop === 0) {
                document.querySelectorAll('.palne-img-area .visible').forEach(function(element) {
                    element.classList.remove('visible', 'animated', 'fadeInUp');
                    element.classList.add('hidden');
                });

                document.querySelectorAll('.section-2 .hidden, .section-2 .visible').forEach(function(
                    element) {
                    element.classList.remove('visible', 'animated', 'fadeInRight');
                    element.classList.add('hidden');
                });

                document.querySelectorAll('.section-3 .hidden, .section-3 .visible').forEach(function(
                    element) {
                    element.classList.remove('visible', 'animated', 'fadeInLeft');
                    element.classList.add('hidden');
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

            loadBannerImages();

            let newItemsPerPage = getItemsPerPage();
            if (newItemsPerPage !== itemsPerPage) {
                itemsPerPage = newItemsPerPage;
                initCarousel();
            }
        });

        window.addEventListener('scroll', animateOnScroll);

        document.querySelector(".meanmenu-reveal").addEventListener("click", function() {

            let menuArea = document.querySelector(".menu-area-main");
            let isHidden = window.getComputedStyle(menuArea).display === "none";

            if (isHidden) {
                this.querySelectorAll("*").forEach(child => {
                    child.style.display = "none";
                });

                this.innerHTML = "X";

                this.style.textAlign = "center";
                this.style.textIndent = "0px";
                this.style.fontSize = "25px";

                document.querySelector(".menu-area-main").style.display = "";
            }

            if (!isHidden) {
                this.innerHTML = `
                    <span></span>
                    <span></span>
                    <span></span>
                `;

                this.style.removeProperty("text-align");
                this.style.removeProperty("text-indent");
                this.style.removeProperty("font-size");

                menuArea.style.display = "none";
            }
        });
    });
</script>
@endpush
