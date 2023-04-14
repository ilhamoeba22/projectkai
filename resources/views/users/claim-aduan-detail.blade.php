<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-{{ asset('assets')
    }}-path="{{ asset('assets') }}/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width,  nitial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

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
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">Aduan ID /</span>
                            {{ $collection->id }}
                        </h4>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                                    Data kamu berhasil di simpan.
                                    Informasi Pengambilan barang dapat di lihat pada form dibawah ini

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>

                        <div class="row flex-grow-1">

                            <div class="col-md-8 order-1">
                                <div class="card mb-4">

                                    <div class="card-body">
                                        <h3>Data Diri</h3>
                                        <form method="POST" action="{{ route('postclaim') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">
                                                    Nama Lengkap
                                                </label>
                                                <div class="col-sm-10">
                                                    <input readonly value="{{ $collection->nama }}" type="text"
                                                        class="form-control" name="nama" id="basic-default-name"
                                                        placeholder="masukan nama lengkap" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-company">
                                                    Alamat
                                                </label>
                                                <div class="col-sm-10">
                                                    <input readonly value="{{ $collection->alamat }}" type="text"
                                                        class="form-control" name="alamat" id="basic-default-company"
                                                        placeholder="Tempat tinggal sesuai KTP" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">
                                                    Pesan
                                                </label>
                                                <div class="col-sm-10">
                                                    <textarea readonly id="basic-default-message" name="catatan"
                                                        class="form-control" placeholder="....."
                                                        aria-describedby="basic-icon-default-message2">{{ $collection->catatan }}</textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-12 mb-0">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#modalToggle">
                                                        <img src="{{ Storage::url('public/assets/img/claim/').$collection->foto }}"
                                                            alt="bukti-foto-barang" class="d-block rounded"
                                                            id="uploadedAvatar" width="100" height="100">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel"
                                                tabindex="-1" style="display: none" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="{{ Storage::url('public/assets/img/claim/').$collection->foto }}"
                                                                alt="bukti-foto-barang" class="d-block rounded w-100"
                                                                id="uploadedAvatar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </form>
                                    </div>

                                    <!-- /Account -->
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="card">

                                    <div class="card-body">
                                        <div class=" text-center mb-3">
                                            <span> {!!
                                                QrCode::size(220)->generate(Request::url('http://localhost:8000/postclaimdetail/453703'));
                                                !!}</span>

                                        </div>
                                        <ul class="p-0 m-0">

                                            <li class="d-flex mb-2 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Kode Barang</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">{{ $collection->aduan_id
                                                            }}</small>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex mb-2 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Stasiun</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">{{ $collection->barang->stasiun->nama
                                                            }}</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-2 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Biaya Layanan</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold text-success">Rp. 15.000,00</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
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