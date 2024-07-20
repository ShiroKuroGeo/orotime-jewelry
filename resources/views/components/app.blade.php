<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Orotime Jewelry'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}" type="text/css">
</head>

<body >
    <div class="bg-orotime">
        <div class="container-fluid ps-lg-5 ps-4 py-1">
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </a>
            </span>
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                    </svg>
                </a>
            </span>
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                </a>
            </span>
        </div>
    </div>
    <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top px-0">
        <div class="container-fluid mx-lg-5 flex-nowrap">

            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNavMobile" aria-controls="navbarNavMobile" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-6 col-lg-2">
                <input type="text" name="seach-product" id="search-product" class="form-control"
                    placeholder="What are you looking for?">
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="navbarNavMobile" aria-labelledby="navbarNavMobileLabel">
                <div class="offcanvas-header py-3">
                    <h5 class="offcanvas-title" id="navbarNavMobileLabel">Orotime Jewelry</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-3 pb-4 py-lg-0 mx-lg-auto">
                    <ul class="navbar-nav position-relative">
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">All Products</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">New Arrival</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Best Seller</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Necklace</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Earrings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Rings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">All Golds</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">All Silvers</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="d-flex gap-3 gap-sm-4 me-5">
                <a href="{{ route('login') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#C5AE7C"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    {{ $slot }}
    <div class="container-fluid px-lg-5 px-4">
        <footer class="py-3">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-primary">Collections</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All
                                Collection</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All Gold</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All Silver</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Best Seller</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Best Reviews</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bracelets</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Earrings</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rings</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Necklace</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Customer Policies</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy
                                Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Refund Policy</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Return Policy</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms &
                                Conditions</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms &
                                Services</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & User</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Join Us</h5>
                        <p>Sing up for our newsletter and receive discounts and offers.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                    <div class="my-2">
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                </svg>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                    <path
                                        d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.64.64 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.64.64 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76m5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-end py-2 border-top">
                <p>&copy; 2024 Orotime Jewelry. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<script>
    hljs.initHighlightingOnLoad();

    $('.hero__scroll').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
</script>

</html>
