<x-admin>
    @section('title', 'Admin Dashboard');
    <main class="main">
        @include('components.navtopstart')
        <div class="content">
            <div class="pb-5">
                <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                        <div class="mb-8">
                            <h2 class="mb-2 text-primary-darker">Orotime Dashboard</h2>
                            <h5 class="text-body-tertiary fw-semibold">Explore our stunning jewelry collection.</h5>
                        </div>
                        <div class="row align-items-center g-4">
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-star text-success "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0 text-primary-light">57 New Orders</h4>
                                        <p class="text-body-secondary fs-9 mb-0">For this day</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-pause text-warning "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0 text-primary-light">5 Orders</h4>
                                        <p class="text-body-secondary fs-9 mb-0">On hold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-xmark text-danger "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0 text-primary-light">15 Products</h4>
                                        <p class="text-body-secondary fs-9 mb-0">Below Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-body-secondary mb-6 mt-4" />
                        <div class="echart-total-sales-chart col-12 col-lg-5" style="min-height:380px;width:100%"
                            id="chartMain">
                        </div>
                    </div>
                    <div class="col-12 col-xxl-6">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="card border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">Total Orders<span
                                                        class="badge badge-oro badge-oro-warning rounded-pill fs-9 ms-2"><span
                                                            class="badge-label">-6.8%</span></span></h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                            <h4>P16,247</h4>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div id="echart-total-orders" style="height: 20vh; width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">Customers<span
                                                        class="badge badge-oro badge-oro-warning rounded-pill fs-9 ms-2">
                                                        <span class="badge-label">+26.5%</span></span></h5>
                                                <h6 class="text-body-tertiary">Last 30 Days</h6>
                                            </div>
                                            <h4>356</h4>
                                        </div>
                                        <div class="pb-0 pt-4">
                                            <div class="echarts-new-customers" id="echarts-customers"
                                                style="height: 20vh; width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-2">Categories</h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                        </div>
                                        <div class="pb-4 pt-3">
                                            <div class="echart-category" id="echart-category"
                                                style="height: 20vh; width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card border-0 h-100">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-2">Total Refunds</h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                            <h4>P1000</h4>
                                        </div>
                                        <div class="d-flex justify-content-center pt-3 flex-1">
                                            <div class="echarts-paying-customer-chart" id="echart-refunds"
                                                style="height: 20vh; width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 border-y">
                <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
                    <div class="row align-items-end justify-content-between pb-5 g-3">
                        <div class="col-auto">
                            <h3>Latest reviews</h3>
                            <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="row g-2 gy-3">
                                <div class="col-auto flex-1">
                                    <div class="search-box">
                                        <form class="position-relative"><input
                                                class="form-control search-input search form-control-sm"
                                                type="search" placeholder="Search" aria-label="Search" />
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search search-box-icon"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mx-n1 px-1 scrollbar">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 ps-0 align-middle">
                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                id="checkbox-bulk-reviews-select" type="checkbox"
                                                data-bulk-select='{"body":"table-latest-review-body"}' /></div>
                                    </th>
                                    <th class="sort white-space-nowrap align-middle" scope="col"></th>
                                    <th class="sort white-space-nowrap align-middle" scope="col"
                                        style="min-width:360px;" data-sort="product">Product</th>
                                    <th class="sort align-middle" scope="col" data-sort="customer"
                                        style="min-width:200px;">CUSTOMER</th>
                                    <th class="sort align-middle" scope="col" data-sort="rating"
                                        style="min-width:110px;">RATING</th>
                                    <th class="sort align-middle" scope="col" style="max-width:350px;"
                                        data-sort="review">REVIEW</th>
                                    <th class="sort text-end pe-0 align-middle" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-latest-review-body">
                                @for ($j = 1; $j <= 7; $j++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle ps-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                    type="checkbox"
                                                    data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0"><a
                                                class="d-block rounded-2 border border-translucent"
                                                href="#"><img src="assets/img//products/60x60/1.png"
                                                    alt="" width="53" /></a></td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                                                href="#">Long Gold Necklace Heart 15k Grams</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center text-body" href="#">
                                                <div class="avatar avatar-l">
                                                    <div class="avatar-name rounded-circle"><span>SG</span></div>
                                                </div>
                                                <h6 class="mb-0 ms-3 text-body">Shiro Geo</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs-10">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill text-warning"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            @endfor
                                            {{-- <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span> --}}
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs-9 fw-semibold text-body-highlight mb-0">This Fitbit is
                                                fantastic!
                                                I was trying to be in better shape and needed some motivation, so I
                                                decided
                                                to treat myself to a new Fitbit.</p>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center py-3">
                        <div class="pagination d-none"></div>
                        <div class="col d-flex fs-9">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                data-list-info="data-list-info"></p>
                            <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                                    class="fas fa-angle-right ms-1"data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Done --}}
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <br class="d-sm-none" />2024 &copy;<a class="mx-1" href="#!">Orotime</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                    </div>
                </div>
            </footer>
        </div>
    </main>
</x-admin>
