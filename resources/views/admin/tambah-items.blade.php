<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-free">

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
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">Data barang /</span>
                            Tambah barang
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <!-- Account -->
                                    {{-- <div class="card-body">

                                    </div>
                                    <hr class="my-0" /> --}}
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form action="{{ route('tambahitems') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h3>Data Barang</h3>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="namabarang" class="form-label">
                                                        Nama Barang
                                                    </label>
                                                    <input class="form-control" type="text" id="namabarang"
                                                        name="namabarang" placeholder="masukan nama barang" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="kategori_id" class="form-label">Katagori</label>
                                                    <select class="form-select" name="kategori_id" id="kategori_id"
                                                        aria-label="kategori_id">
                                                        <option selected="">Pilih Kategori Barang</option>
                                                        @foreach ($kategoris as $kategori )
                                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label" for="deskripsi">
                                                        Deskripsi Barang
                                                    </label>
                                                    <textarea class="form-control" name="deskripsi" id="deskripsi"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label for="tglditemukan" class="form-label">
                                                        Tanggal ditemukan
                                                    </label>
                                                    <input class="form-control" name="tglditemukan" type="date"
                                                        id="tglditemukan">
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label for="stasiun_id" class="form-label">
                                                        Stasiun
                                                    </label>
                                                    <select class="form-select" name="stasiun_id" id="stasiun_id"
                                                        aria-label="stasiun_id">
                                                        <option selected="">Pilih Kategori Barang</option>
                                                        @foreach ($stasiuns as $stasiun )
                                                        <option value="{{ $stasiun->id }}">{{ $stasiun->nama }}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label for="area_id" class="form-label">
                                                        Area ditemukan
                                                    </label>
                                                    <select class="form-select" name="area_id" id="area_id"
                                                        aria-label="area_id">
                                                        <option selected="">Pilih Kategori Barang</option>
                                                        @foreach ($areas as $area )
                                                        <option value="{{ $area->id }}">{{ $area->nama }}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>




                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <img src="" alt="foto-barang" class="d-block rounded" height="100"
                                                        width="100" id="uploadedAvatar" />
                                                    <div class="button-wrapper">
                                                        <label for="upload" class="btn btn-primary me-2 mb-4"
                                                            tabindex="0">
                                                            <span class="d-none d-sm-block">
                                                                tambahkan Foto
                                                            </span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" name="foto" id="upload"
                                                                class="account-file-input" hidden
                                                                accept="image/png, image/jpeg" />
                                                        </label>
                                                        <button type="button"
                                                            class="btn btn-outline-secondary account-image-reset mb-4">
                                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Reset</span>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 col-12 mb-0">
                                                <div class="alert alert-warning">
                                                    <h6 class="alert-heading fw-bold mb-1">
                                                        Are you sure you want to delete your account?
                                                    </h6>
                                                    <p class="mb-0">
                                                        Once you delete your account, there is no going
                                                        back. Please be certain.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-check mb-3">
                                                {{-- <input class="form-check-input" type="checkbox"
                                                    name="accountActivation" id="accountActivation" />
                                                <label class="form-check-label" for="accountActivation">
                                                    Setuju
                                                </label> --}}
                                            </div>

                                            <button type="submit" class="btn btn-danger deactivate-account">
                                                Tambahkan data barang
                                            </button>

                                        </form>
                                    </div>
                                    <!-- /Account -->
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

</body>

</html>
