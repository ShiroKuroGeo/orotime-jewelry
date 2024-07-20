<x-app>
    @section('title', 'Orotime - Registration')
    <main class="container-fluid my-5">
        <div class="text-center d-lg-none">
            <a href="{{ route('back') }}">
                <img src="{{ asset('images/orotime-images/orologo.png') }}" alt="logo" class="img-fluid rounded col-lg-1">
            </a>
        </div>
        <section class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h4 class="text-center text-primary fw-bold my-4">Registration</h4>
                    <form class="needs-validation mx-0 mx-lg-5 text-oro-color" novalidate="">
                        <div class="row">
                            <div class="col-6 position-relative mb-3">
                                <label for="">First Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Firstname"
                                    required="">
                            </div>
                            <div class="col-6 position-relative mb-3">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Lastname"
                                    required="">
                            </div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email"
                                required="">
                        </div>
                        <div class="position-relative mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" class="form-control form-control-lg" placeholder="Enter Phone Number"
                                required="">
                        </div>
                        <div class="position-relative mb-3">
                            <label for="">Type</label>
                            <select name="" id="" class="form-select">
                                <option value="1">Customer Only</option>
                                <option value="2">Become a Referral</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg" placeholder="New Password"
                                    required="">
                                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Confirm Password</label>
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="Confirm Password" required="">
                                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>
                        <div class="my-3">
                            <input type="checkbox" name="privacy" id="privacy"> I have already accept and read <a
                                href="http://">Privacy Policy</a>
                        </div>
                        <button type="submit" id="submitButton" class="btn btn-lg btn-primary w-100">Register
                            Account</button>
                        <div class="my-3">
                            Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Click
                                Here!</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8 bg-orotime-follow d-sm-none d-md-block rounded">
                    <div class="position-relative z-2 w-100 text-center px-md-2 p-lg-5">
                        <h2 class="h4 pb-3 fw-bolder text-oro-color">
                            Orotime Italian Jewelry
                        </h2>
                        <div class="mx-auto" style="max-width: 790px">
                            <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 g-lg-3 g-xl-4">
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-bell-fill position-relative text-oro-color z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">Subscribe to your favorite products</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-kanban-fill text-oro-color position-relative z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1m-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">View and manage your orders and wishlist</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-award-fill text-oro-color position-relative z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
                                                    <path
                                                        d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">Earn rewards for future purchases</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-tags-fill text-oro-color position-relative z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                    <path
                                                        d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043z" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">Receive exclusive offers and discounts</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-bag-heart-fill text-oro-color position-relative z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">Create multiple wishlists</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 bg-orotime-follow border-0">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark"
                                            style="--c-oro-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="d-inline-flex position-relative text-info p-3">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-credit-card-fill text-oro-color position-relative z-2 fs-4 m-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1" />
                                                </svg>
                                            </div>
                                            <h3 class="h6 pt-2 my-2">Pay for purchases by installments</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app>
