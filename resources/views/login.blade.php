<x-app>
    @section('title', 'Orotime - Login')'
    <main class="container">
        <section class="container d-flex justify-content-center align-items-center vh-75 my-5">
            <div class="row row-cols-1 row-cols-md-2">

                <div class="col-lg-6 col-12 order-md-2 mt-3 mt-md-0">
                    <h4 class="text-center text-primary fw-bold">Login</h4>
                    <form class="needs-validation mx-0 mx-lg-5" novalidate="">
                        <div class="position-relative mb-4">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                required="">
                            <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
                        </div>
                        <div class="mb-4">
                            <label for="">Password</label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg" placeholder="Password"
                                    required="">
                                <div class="invalid-tooltip bg-transparent py-0">Password is incorrect!</div>
                                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="nav">
                                <a class="nav-link animate-underline p-0" href="account-password-recovery.html">
                                    <span class="animate-target">Forgot password?</span>
                                </a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100">Sign In</button>
                    </form>
                </div>

                <div class="col-lg-6 col-12 order-md-1 text-lg-center">
                    <a href="{{ route('back') }}">
                        <img src="{{ asset('images/orotime-images/orologo.png') }}" alt="logo"
                            class="img-fluid rounded my-3 mb-lg-3">
                    </a>
                    <h3 class="text-primary fw-bold">New Customer</h3>
                    <br>
                    <span class="px-lg-5">
                        Explore Orotime Jewelry your destination for seamless online shopping. Discover great deals and
                        fast delivery on a wide range of products!
                    </span>
                    <br>
                    <a href="{{ route('register') }}" class="btn btn-primary col-10 col-lg-6 my-3">Register Account</a>
                </div>

            </div>
        </section>
    </main>
</x-app>
