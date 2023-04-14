<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        Detail Lost Items
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
                            <span class="text-muted fw-light">LOST ITEMS /</span>
                            {{$collection->id}}
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        @if ($collection->status =='1' )
                                        <div class="alert alert-success mt-3">
                                            <h6 class="alert-heading fw-bold ">
                                                STATUS DITERIMA
                                            </h6>
                                        </div>
                                        @elseif ($collection->status =='2' )
                                        <div class="alert alert-danger">
                                            <h6 class="alert-heading fw-bold ">
                                                STATUS DITOLAK
                                            </h6>
                                        </div>
                                        @else
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold ">
                                                Menunggu Kofirmasi
                                            </h6>
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="namabarang" class="form-label">
                                                    Nama Barang
                                                </label>
                                                <input class="form-control" type="text" id="namabarang" readonly
                                                    name="namabarang" value="{{ $collection->namabarang }}" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="kategori" class="form-label">Katagori</label>
                                                <input class="form-control" type="text" id="namabarang" readonly
                                                    name="namabarang" value="{{ $collection->kategori->nama }}" />
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label class="form-label" for="phoneNumber">
                                                    Deskripsi Barang
                                                </label>
                                                <textarea readonly class="form-control" name="deskripsi"
                                                    id="exampleFormControlTextarea1"
                                                    rows="3">{{ $collection->deskripsi }}</textarea>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="tanggalkehilangan" class="form-label">
                                                    Tanggal Kehilangan
                                                </label>
                                                <input class="form-control" value="{{ $collection->created_at }}"
                                                    readonly name="tanggalkehilangan" type="date"
                                                    id="tanggalkehilangan">
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="deskripsitempatkehilangan" class="form-label">
                                                    Stasiun Kehilangan</label>
                                                <input class="form-control" type="text" id="stasiun_id" readonly
                                                    name="namabarang" value="{{ $collection->stasiun->nama }}" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="area_id" class="form-label">Deskipsi
                                                    Area
                                                    Kehilangan</label>
                                                <input class="form-control" type="text" id="area_id" readonly
                                                    name="namabarang" value="{{ $collection->area->nama }}" />
                                            </div>



                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalToggle">
                                                    <img src="{{ Storage::url('public/assets/img/aduan/').$collection->foto }}"
                                                        alt="" class="d-block rounded" height="100" width="100"
                                                        id="uploadedAvatar" />
                                                </a>
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

                                        </div>

                                        @if ($collection->status ==0 ) <div
                                            class="d-flex align-items-start align-items-sm-center gap-4 mt-5">
                                            <form method="POST" action="{{ route('konfirmasi-aduan') }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $collection->id }}">
                                                <button type="submit" class="btn btn-success deactivate-account">
                                                    Terima Aduan
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('tolak-aduan') }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $collection->id }}">
                                                <button type="submit" class="btn btn-danger deactivate-account">
                                                    Tolak Aduan
                                                </button>
                                            </form>
                                        </div>
                                        @endif




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