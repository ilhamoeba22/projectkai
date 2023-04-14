<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        Dashboard
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- menu --}}

            @include('layouts.menu-admin')
            {{-- end menu --}}

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    @include ('layouts.navbar')
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="row">
                                    <div class="col-4 mb-4">
                                        <div class="card">
                                            <div class="card-body">

                                                <span class="d-block mb-1">TOTAL ADUAN</span>
                                                <h3 class="card-title text-danger text-nowrap mb-2">{{$lostitem}}</h3>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="card">
                                            <div class="card-body">

                                                <span class="d-block mb-1">TOTAL BARANG DITEMUKAN</span>
                                                <h3 class="card-title text-success  text-nowrap mb-2">
                                                    {{$founditem->count()}}</h3>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="card">
                                            <div class="card-body">

                                                <span class="d-block mb-1">TOTAL BARANG</span>
                                                <h3 class="card-title text-warning  text-nowrap mb-2">{{$totalitem}}
                                                </h3>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- @include('profile.partials.update-profile-information-form') --}}

                            <!-- Expense Overview -->
                            <div class="col-md-12 col-lg-12 order-1 mb-4">
                                <h6 class="text-muted">Laporan</h6>

                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active " role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-top-items"
                                                aria-controls="navs-top-items" aria-selected="true">
                                                Aduan
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-top-lost" aria-controls="navs-top-lost"
                                                aria-selected="true">
                                                Barang Ditemukan
                                            </button>
                                        </li>

                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane fade active show" id="navs-top-items" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID Barang</th>
                                                            <th>Nama Barang</th>
                                                            <th>Tanggal Ditemukan</th>
                                                            <th>Kategori</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        @foreach($aduan as $items)
                                                        <tr>
                                                            <td>
                                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                                <strong> {{$items->id}} </strong>
                                                            </td>
                                                            <td>{{$items->namabarang}}</td>
                                                            <td>{{$items->created_at}}</td>
                                                            <td>
                                                                <span class="badge bg-label-success me-1">
                                                                    {{$items->kategori->nama}}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('detaillostitems',['id'=>'512656517']) }}">
                                                                    <i class="bx bx-envelope-open me-1"></i>
                                                                    Lihat Detial
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade  " id="navs-top-lost" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Barang</th>
                                                            <th>Tanggal</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        @foreach($founditem as $items)
                                                        <tr>
                                                            <td>{{$items->namabarang}}</td>
                                                            <td>{{$items->created_at}}</td>
                                                            <td>
                                                                <span class="badge bg-label-success me-1">
                                                                    {{$items->kategori->nama}}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('detaillostitems',['id'=>'512656517']) }}">
                                                                    <i class="bx bx-envelope-open me-1"></i>
                                                                    Lihat Detial
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--/ Expense Overview -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js {{ asset('assets') }}/vendor/js/core.js -->
    <script src="{{ asset('assets') }}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('assets') }}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('assets') }}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets') }}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets') }}/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>