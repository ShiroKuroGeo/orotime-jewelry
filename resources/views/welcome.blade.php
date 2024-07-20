<x-app>
    @section('title', 'Orotime Jewelry')
    <main class="container-fluid px-lg-5 px-4">
        <section class="position-relative">
            <div class="container-fluid pt-md-5 py-xl-0" data-aos="zoom-in">
                <div class="row align-items-center justify-content-center">
                    <video class="w-100 h-100 rounded" autoplay loop muted>
                        <source src="{{ asset('video/jewelryvideo.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </section>


        {{-- <section class="position-relative">
            <div class="bg-body-tertiary position-absolute top-50 start-0 w-100 translate-middle-y overflow-hidden d-none d-xl-block"
                style="height: 78%;">
                <div class="bg-white opacity-75 d-none-dark"
                    style="width: 699px; height: 728px; border-radius: 728px; filter: blur(151px)"></div>
                <div class="bg-body opacity-75 d-none d-block-dark"
                    style="width: 699px; height: 728px; border-radius: 728px; filter: blur(151px)"></div>
            </div>
            <div class="bg-body-tertiary position-absolute top-0 start-0 w-100 h-100 overflow-hidden d-xl-none">
                <div class="position-absolute ps-xl-4 ms-xxl-5 mt-n2">
                    <div class="bg-white opacity-75 d-none-dark"
                        style="width: 699px; height: 728px; border-radius: 728px; filter: blur(151px)"></div>
                    <div class="bg-body opacity-75 d-none d-block-dark"
                        style="width: 699px; height: 728px; border-radius: 728px; filter: blur(151px)"></div>
                </div>
            </div>
            <div class="container position-relative z-2 pb-5 pt-4 pt-md-5 py-xl-0">
                <div class="row align-items-center justify-content-center pb-2 pb-sm-3 pb-md-0">
                    <div class="col-9 col-sm-7 col-md-6 mb-3 mb-sm-4 mb-md-0">
                        <video class="w-100" autoplay loop muted>
                            <source src="{{ asset('video/jewelryvideo.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                    <div class="col-md-6 col-xl-5 offset-xl-1 text-center">
                        <div class="ps-4 ps-xl-0">
                            <h2 class="h1 fw-bold">Orotime Italian Trend Jewelry</h2>
                            <p class="fs-lg mb-4">Discover the allure of Italian trend jewelry, where timeless elegance
                                meets modern sophistication, crafted to captivate with every detail.</p>
                            <button class="btn btn-primary col-5">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <section class="container-fluid my-lg-5 my-5 py-lg-3 py-2">
            <div class="row row-cols-2 row-cols-md-4 g-3">

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1z" />
                            </svg>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">0% Layaways Interest</h3>
                            <p class="fs-sm mb-0">Enjoy 0% Interest Layaways: Shop now, pay later with no additional
                                charges!</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-headset" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
                            </svg>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">Good Customer Services</h3>
                            <p class="fs-sm mb-0">Experience Excellent Customer Service: We're here to assist you every
                                step of the way.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                            </svg>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">Secure Payment</h3>
                            <p class="fs-sm mb-0">Secure Payment Guaranteed: Shop with confidence knowing your
                                transactions are safe and protected.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-truck" viewBox="0 0 16 16">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                            </svg>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">Shipping World Wide</h3>
                            <p class="fs-sm mb-0">Worldwide Shipping Available: Get your favorite items delivered
                                anywhere across the globe.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="container-fluid my-lg-5 my-3 py-lg-3 py-2">
            <div class="text-center my-5">
                <h2 class="h2 w-100 fw-bold pb-2 mb-1 text-primary">
                    View Collections
                </h2>
                <span>
                    Explore our stunning jewelry collection. Click here to view more exquisite pieces.
                </span>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5">
                <div class="col" data-aos="fade-right">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="#">Necklaces</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4" href="#">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="{{ asset('images/orotime-images/necklace.jpg') }}"
                                    class="hover-effect-target rounded" alt="Necklaces">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-right">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="#">Earrings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4" href="#">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="{{ asset('images/orotime-images/earring.jpg') }}"
                                    class="hover-effect-target rounded" alt="Earrings">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="#">Rings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4" href="#">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="{{ asset('images/orotime-images/ring.jpg') }}"
                                    class="hover-effect-target rounded" alt="Rings">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="#">Bracelets</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4" href="#">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="{{ asset('images/orotime-images/bracelet.jpg') }}"
                                    class="hover-effect-target rounded" alt="Bracelets">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="container-fluid my-lg-5 my-3 py-lg-3 py-2 border-top">
            <div class="row my-5">
                <h2 class="h2 w-100 fw-bold pb-2 mb-1 text-primary">
                    Shop Now
                </h2>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '1']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '2']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '3']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '4']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '5']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '6']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden" href="#">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</x-app>
