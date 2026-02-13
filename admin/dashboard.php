<?php include('includes/header.php');

?>

<div class="page-content">
    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold m-0">Dashboard</h4>
                    </div>
                    <div class="mt-3 mt-sm-0">
                        <form action="javascript:void(0);">
                            <div class="row g-2 mb-0 align-items-center">
                                <div class="col-auto">
                                    <a href="javascript: void(0);" class="btn btn-outline-primary">
                                        <i class="ti ti-sort-ascending me-1"></i> Sort By
                                    </a>
                                </div>
                                <!--end col-->
                                <div class="col-sm-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control" data-provider="flatpickr" data-deafult-date="01 May to 31 May" data-date-format="d M" data-range-date="true">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="ti ti-calendar fs-15"></i>
                                        </span>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div><!-- end card header -->
            </div>
            <!--end col-->
        </div> <!-- end row-->
        <div class="row">
            <div class="col">
                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Orders</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:case-round-minimalistic-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">687.3k</h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 9.19%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Returns</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">9.62k</h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Avg. Sales Earnings</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Number of Visits</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:eye-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">87.94M</h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <h4 class="header-title">Brands Listing</h4>
                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary">Add Brand <i class="ti ti-plus ms-1"></i></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="bg-success bg-opacity-10 py-1 text-center">
                                    <p class="m-0"><b>69</b> Active brands out of <span class="fw-medium">102</span></p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-1.svg" alt="" height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Clothing</span> <br />
                                                            <h5 class="fs-14 mt-1">Zaroan - Brazil</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2020</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">1.5k</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">8,950</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-info-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-4.svg" alt="" height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Clothing</span> <br />
                                                            <h5 class="fs-14 mt-1">Jocky-Johns - USA</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 1985</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">205</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">1,258</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-secondary-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-5.svg" alt="" height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Lifestyle</span> <br />
                                                            <h5 class="fs-14 mt-1">Ginne - India</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2001</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">89</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">338</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-danger-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-6.svg" alt="" height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Fashion</span> <br />
                                                            <h5 class="fs-14 mt-1">DDoen - Brazil</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 1995</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">650</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">6,842</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-8.svg" alt="" height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Manufacturing</span> <br />
                                                            <h5 class="fs-14 mt-1">Zoddiak - Canada</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 1963</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">109</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">952</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                            <div class="card-footer border-0">
                                <div class="align-items-center justify-content-between row text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">15</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- -->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                <h4 class="header-title me-auto">Top Selling Products</h4>
                                <div class="d-flex gap-2 justify-content-end text-end">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary">Import <i class="ti ti-download ms-1"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i class="ti ti-file-export ms-1"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-custom align-middle table-nowrap table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/products/p-1.png" alt="Product-1" class="img-fluid rounded-2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">ASOS High Waist Tshirt</a></h5>
                                                    <span class="text-muted fs-12">07 April 2024</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">$79.49</h5>
                                                    <span class="text-muted fs-12">Price</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">82</h5>
                                                    <span class="text-muted fs-12">Quantity</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <h5 class="fs-14 my-1">$6,518.18</h5>
                                                            <span class="text-muted fs-12">Amount</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/products/p-7.png" alt="Product-1" class="img-fluid rounded-2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Marco Single Sofa</a></h5>
                                                    <span class="text-muted fs-12">25 March 2024</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">$128.50</h5>
                                                    <span class="text-muted fs-12">Price</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">37</h5>
                                                    <span class="text-muted fs-12">Quantity</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <h5 class="fs-14 my-1">$4,754.50</h5>
                                                            <span class="text-muted fs-12">Amount</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/products/p-4.png" alt="Product-1" class="img-fluid rounded-2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Smart Headphone </a></h5>
                                                    <span class="text-muted fs-12">17 March 2024</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">$39.99</h5>
                                                    <span class="text-muted fs-12">Price</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">64</h5>
                                                    <span class="text-muted fs-12">Quantity</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <h5 class="fs-14 my-1">$2,559.36</h5>
                                                            <span class="text-muted fs-12">Amount</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/products/p-5.png" alt="Product-1" class="img-fluid rounded-2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Lightweight Jacket</a></h5>
                                                    <span class="text-muted fs-12">12 March 2024</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">$20.00</h5>
                                                    <span class="text-muted fs-12">Price</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">184</h5>
                                                    <span class="text-muted fs-12">Quantity</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <h5 class="fs-14 my-1">$3,680.00</h5>
                                                            <span class="text-muted fs-12">Amount</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/products/p-6.png" alt="Product-1" class="img-fluid rounded-2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="link-reset">Marco Shoes</a></h5>
                                                    <span class="text-muted fs-12">05 March 2024</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">$28.49</h5>
                                                    <span class="text-muted fs-12">Price</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1">69</h5>
                                                    <span class="text-muted fs-12">Quantity</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <h5 class="fs-14 my-1">$1,965.81</h5>
                                                            <span class="text-muted fs-12">Amount</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                            <div class="card-footer border-0">
                                <div class="align-items-center justify-content-between row text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">10</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- -->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div> <!-- end col-->
        </div> <!-- end row-->
    </div> <!-- container -->
    <!-- Footer Start -->
    <?php include('includes/footer.php'); ?>