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
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
            @include('layouts.menu')
            <!-- / Menu -->

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

                    @include('layouts.navbar')
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{-- <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">
                                                    Congratulations John! 🎉
                                                </h5>
                                                <p class="mb-4">
                                                    You have done
                                                    <span class="fw-bold">72%</span>
                                                    more sales today. Check your new badge in your
                                                    profile.
                                                </p>

                                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                                                    View Badges
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/paypal.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt4"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt4">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                View More
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="d-block mb-1">Payments</span>
                                                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                                <small class="text-danger fw-semibold">
                                                    <i class="bx bx-down-arrow-alt"></i>
                                                    -14.82%
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/cc-primary.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt1"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                View More
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">
                                                    Transactions
                                                </span>
                                                <h3 class="card-title mb-2">$14,857</h3>
                                                <small class="text-success fw-semibold">
                                                    <i class="bx bx-up-arrow-alt"></i>
                                                    +28.14%
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            {{-- @include('profile.partials.update-profile-information-form') --}}

                            <!-- Expense Overview -->
                            <div class="col-md-12 col-lg-12 order-1 mb-4">
                                <h6 class="text-muted">Laporan</h6>

                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-top-profile"
                                                aria-controls="navs-top-profile" aria-selected="false">
                                                Profile
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-top-messages" aria-controls="navs-top-messages"
                                                aria-selected="true">
                                                Pesan
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane fade active show" id="navs-top-profile" role="tabpanel">
                                            <!-- Account -->
                                            @if (session('status') === 'profile-updated')
                                            <p>
                                            <div class="alert alert-primary alert-dismissible" role="alert">
                                                Data kamu berhasil di simpan
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            </p>
                                            @endif

                                            <div class="card-body">
                                                <form method="post" action="{{ route('profile.update') }}">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="firstName" class="form-label">
                                                                Nama Lengkap
                                                            </label>
                                                            <input class="form-control" type="text" id="name"
                                                                name="name" value="{{ old('name', $user->name) }}"
                                                                autofocus />
                                                        </div>

                                                        <div class="mb-3 col-md-6">
                                                            <label for="email" class="form-label">E-mail</label>
                                                            <input class="form-control" type="text" id="email"
                                                                name="email"
                                                                value="{{ old('email', $user->email)  }}" />
                                                        </div>

                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="phonenumber">
                                                                Phone Number
                                                            </label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">ID (+62)</span>
                                                                <input type="text" id="phonenumber" name="phonenumber"
                                                                    class="form-control"
                                                                    value="{{ old('phonenumber', $user->phonenumber)  }}" />
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="submit" class="btn btn-primary me-2">
                                                            Simpan Perubahan
                                                        </button>
                                                        <button type="reset" class="btn btn-outline-secondary">
                                                            Batal
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /Account -->
                                        </div>
                                        <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                                            <div class="card">
                                                <div class="d-flex align-items-end row">
                                                    <div class="col-sm-7">
                                                        <div class="card-body">

                                                            @if ($aduans)

                                                            <h5 class="card-title text-primary">
                                                                Selamat {{ auth::user()->name }} 🎉
                                                            </h5>

                                                            @foreach ($aduans as $aduan)

                                                            <p class="mb-4">
                                                                Laporan kamu dengan aduan ID
                                                                <span class="fw-bold"> {{ $aduan->id }}</span>
                                                                @if ($aduan->status =='0' )
                                                                <span class="fw-bold alert-warning"> Aduan kamu sedang
                                                                    di proses !</span>

                                                                @elseif ($aduan->status =='1' )
                                                                <span class="fw-bold alert-success"> Aduan kamu berhasil
                                                                    di terima</span>

                                                                @else
                                                        
                                                                <span class="fw-bold alert-danger"> Laporan kamu masih
                                                                    belum sesuai</span>
                                                            @endif

                                                            </p>

                                                            @endforeach
                                                            @endif



                                                        </div>
                                                    </div>
                                                </div>
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
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>