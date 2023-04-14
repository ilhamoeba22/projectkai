<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lost & Found System </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public') }}/assets/img/L&F.png" rel="icon">
    <link href="{{ asset('public') }}/assets/img/L&F.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('public') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="{{ asset('public') }}/assets/img/lostnfound.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#syaratketentuan">Syarat dan Ketentuan</a></li>

                    @if (Auth::user() && Auth::user()->role =='user')
                    <li><a class="getstarted scrollto" href="{{ route('bikinaduan') }}">Buat Laporan</a></li>
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('bikinaduan') }}">Buat Laporan</a></li>
                    @endif
                    @if (Auth::user())
                    <li><a class="getstarted scrollto"
                            href="{{ Auth::user()->role == 'admin' ?'/admin/dashboard' :'/dashboard' }}">Dashboard</a>
                    </li>
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>LOST AND FOUND <br>DAOP 6 PT KAI</h1>
                    <h2>Anda ketinggalan barang di Stasiun? <br> Dapat ditemukan dengan mudah bersama kami.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Buat Laporan Ketinggalan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('public') }}/assets/img/stasiuncartoon.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <strong>Website ini dibuat dalam rangka menangani kasus barang yang tertinggal di
                            fasilitas PT KAI DAOP 6 Yogyakarta karena : </strong>
                        <br><br><br>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Banyaknya frekuensi kasus barang penumpang kereta
                                yang tertinggal dan hilang di kereta</li>
                            <li><i class="ri-check-double-line"></i> Saat ini pengaduan tentang barang yang tertinggal
                                di kereta masih belum sistematis</li>
                            <li><i class="ri-check-double-line"></i> Tindak lanjut kasus barang tertinggal hanya melalui
                                security stasiun yang kemudian diteruskan ke unit PAM</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <strong>Rumusan masalah yang ditemukan : </strong>
                        <br><br><br><br>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Belum ada sistem yang menangani masalah
                                ketertinggalan barang yang efektif dengan basis digitalisasi</li>
                            <li><i class="ri-check-double-line"></i> Belum ada kejelasan tentang mekanisme pelaporan dan
                                ketinggalan barang yang efektif dengan basis digitalisasi</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Alur Layanan</h2>
                    <p>Berikut ini adalah alur layanan pelaporan barang tertinggal di PT KAI DAOP 6 Yogyakarta</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4 style="text-align: center;"><a>Alur 1</a></h4>
                            <strong>Membuat Laporan</strong>
                            <br><br>
                            <ul>
                                <li> Silahkan login akun dan jika belum memiliki harap untuk mendaftar akun</li>
                                <li> Isi data diri dengan benar sesuai dengan ketentuan yang ada</li>
                                <li> Isi form laporan dengan benar sesuai dengan ketentuan yang ada</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4 style="text-align: center;"><a>Alur 2</a></h4>
                            <strong>Verifikasi Laporan</strong>
                            <br><br>
                            <ul>
                                <li> Admin akan melakukan verifikasi laporan anda</li>
                                <li> Melakukan cek secara berkala status laporan pada akun Anda</li>
                                <li> Terdapat 3 status laporan (Diajukan, Diterima, dan Ditolak)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4 style="text-align: center;"><a>Alur 3</a></h4>
                            <strong>Proses Pencarian</strong>
                            <br><br>
                            <ul>
                                <li> Ketika status laporan Diterima, maka pihak Keamanan akan mencari barang</li>
                                <li> Ketika status laporan Ditolak, harap melakukan report ulang dengan data yang valid
                                </li>
                                <li> Ketika barang sudah ditemukan, maka akan muncul di dashboard user</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4 style="text-align: center;"><a>Alur 4</a></h4>
                            <strong> Proses Klaim Barang</strong>
                            <br><br>
                            <ul>
                                <li> Ketika barang sudah terverifikasi benar milik anda, maka proses klaim barang bisa
                                    dilakukan</li>
                                <li> Akan muncul barcode untuk klaim barang</li>
                                <li> Akan muncul tagihan biaya layanan</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="syaratketentuan" class="team">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Syarat Dan Ketentuan</h2>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-8 ">
                        <div style="text-align: left;">
                            <p>Syarat dan Ketentuan yang ditetapkan di bawah ini mengatur pemakaian jasa yang ditawarkan
                                oleh Lost And Found System PT.
                                KAI atas penggunaan website, dengan mendaftar, membuat akun dan/atau menggunakan Website
                                Lost And Found, maka pengguna dianggap telah membaca,
                                memahami dan menyetujui isi dalam Syarat dan Ketentuan ini.
                            </p>
                            <ol>
                                <li><strong>Penerima Syarat</strong>
                                    <br>
                                    Ketentuan Penggunaan ini berlaku untuk hubungan apa pun antara pengguna dan Lost and
                                    Found DAOP 6 PT KAI terkait penggunaan Layanan kami.
                                </li>
                                <li><strong>Kontrak Agen</strong>
                                    <br>
                                    Kontrak disepakati antara pengguna dan perusahaan saat pengguna mengirimkan laporan
                                    kehilangan barang kepada Perusahaan melalui formulir yang ditentukan.
                                    Dan saat mengirimkan laporan, pengguna harus menyetujui ketentuan berikut :
                                    <ul style="list-style-type: disc;">
                                        <li>Izinkan perusahaan membebankan biaya kepada pengguna</li>
                                        <li>Izinkan perusahaan untuk menerima properti yang tertinggal dari fasilitas
                                            tempat penyimpanannya</li>
                                        <li>Izinkan perusahaan untuk melakukan semua prosedur pengiriman</li>
                                        <li>Izinkan perusahaan untuk menggulingkan properti yang tertinggal setelah
                                            periode penyimpanan berakhir</li>
                                    </ul>
                                </li>
                                <li><strong>Penolakan Kontrak</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>Jika pengguna termasuk dalam salah satu alasan berikut kontrak dalam
                                            paragraf sebelumnya dapat ditolak setelah memberi tahu pengguna yang
                                            relevan.</li>
                                        <li>Ketika barang yang dilaporkan bertentangan dengan ketertiban umum atau
                                            kesusilaan</li>
                                        <li>Ketika item yang dilaporkan adalah hewan atau tumbuhan</li>
                                        <li>Ketika item yang dilaporkan adalah makanan segar</li>
                                        <li>Ketika perusahaan menentukan bahwa ada risiko pencucian uang</li>
                                        <li>Kasus lain di mana Perusahaan menentukan bahwa tidak mungkin untuk
                                            menyelesaikan kontrak</li>
                                    </ul>
                                </li>
                                <li><strong>Pembatalan Kontrak</strong>
                                    <br>
                                    Jika pengguna termasuk dalam salah satu alasan berikut :
                                    <ul style="list-style-type: disc;">
                                        <li>Ketika pengguna melanggar perjanjian ini</li>
                                        <li>Jika pengiriman tidak selesai karena tujuan yang tidak diketahui</li>
                                        <li>Jika pembayaran tidak selesai pada tanggal jatuh tempo</li>
                                        <li>Apabila masa penyimpanan telah habis</li>
                                        <li>Kasus lain di mana dianggap bahwa hubungan kepercayaan antara Perusahaan dan
                                            pengguna telah terganggu</li>
                                    </ul>
                                </li>
                                <li><strong>Pengembalian Dana</strong>
                                    <br>
                                    Pembatalan dapat dilakukan kapan saja, tetapi tidak ada pengembalian uang yang akan
                                    diberikan untuk jumlah yang telah dibayarkan dengan alasan apa pun.
                                    Selain itu, jika barang yang tertinggal telah dikirimkan kepada kami, kami akan
                                    menyimpannya selama masa penyimpanan, tetapi pengguna setuju bahwa barang tersebut
                                    akan dibuang atau dimusnahkan setelahnya.
                                </li>
                                <li><strong>Pra-Otorisasi</strong>
                                    <br>
                                    Saat kami menemukan properti pengguna yang tertinggal, pra-otorisasi untuk biaya
                                    penanganan dilakukan pada kartu pengguna dan pengguna menyetujuinya
                                    <ul style="list-style-type: disc;">
                                        <li>Ketika pengguna menerima barangnya yang tertinggal dari fasilitas</li>
                                        <li>Saat pengguna mengonfirmasi bahwa item tersebut adalah milik pengguna</li>
                                        <li>Ketika 7 hari telah berlalu tanpa permintaan yang valid dari pengguna</li>
                                        <li>Permintaan untuk menolak biaya karena alasan seperti 'belum membaca daftar
                                            harga di halaman atas' tidak akan diterima</li>
                                        <li>Selain itu, jika Anda berusaha menghindari pembayaran dengan membuat laporan
                                            palsu seperti dijelaskan di bawah ini,
                                            biaya tambahan dengan jumlah yang sama akan dibebankan kepada pengguna
                                            sebagai biaya penalty</li>
                                        <li>Ketika Anda menerima barang yang benar tetapi memberi tahu kami bahwa barang
                                            tersebut salah</li>
                                    </ul>
                                </li>
                                <li><strong>Periode Penyimpanan</strong>
                                    <br>
                                    Selama 30 hari setelah barang sampai di kantor kami, kami akan menyimpannya dengan
                                    baik agar tidak rusak atau hilang.
                                    Selama periode penyimpanan, perusahaan tidak akan menggunakan barang-barang tersebut
                                    secara pribadi. Namun, item dapat digunakan untuk alasan berikut :
                                    <ul style="list-style-type: disc;">
                                        <li>Memeriksa kerusakan</li>
                                        <li>Memeriksa apakah pengguna adalah pemilik item yang tepat</li>
                                        <li>Permintaan penggguna</li>
                                        <li>Dalam hal lain yang dianggap perlu oleh Perusahaan</li>
                                    </ul>
                                </li>
                                <li><strong> Setelah Periode Penyimpanan</strong>
                                    <br>
                                    Setelah masa penyimpanan habis, barang yang diklaim oleh pelanggan tidak akan
                                    disimpan lebih lama lagi dan dibuang setelah perawatan yang tepat.
                                    Barang-barang yang tertinggal berikut ini tidak akan dibuang tetapi dimusnahkan
                                </li>
                                <li><strong>Garansi Kerusakan Barang</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>Perusahaan akan menyimpan barang dengan benar selama periode dari
                                            "Kedatangan di kantor kami" hingga "Pengiriman barang ke perusahaan
                                            pengiriman"</li>
                                        <li>Jika kami tidak menyimpan barang dengan benar dan rusak, kami akan membayar
                                            pengguna barang yang sesuai atau jumlah uang yang sesuai</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top ">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>PT. KAI DAOP 6</h3>
                        <p>
                            Jl. Lempuyangan No.1<br>
                            Kota Yogyakarta, 55212<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 2745 12056<br>
                            <strong>Email:</strong> lostandfound@kai.id<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Informasi</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#home">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#syaratketentuan">Syarat dan Ketentuan</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Buat Laporan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>KAI Group</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.kai.id/" target="_blank">KAI
                                    Website</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://kalogistics.co.id/ "
                                    target="_blank">KAI Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://commuterline.id/"
                                    target="_blank">KAI Commuter</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://kalogistics.co.id/"
                                    target="_blank">KRL Logistics</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://railink.co.id/" target="_blank">KAI
                                    Bandara</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>
                            <img style="max-width:100px;" src="assets/img/lostnfound.png" alt="">
                            <img style="max-width:100px;" src="assets/img/bumn.png" alt="">
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/KAI121" class="twitter" target="_blank"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/keretaapikita" class="facebook" target="_blank"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/keretaapikita/" class="instagram" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/keretaapikita" class="google-plus" target="_blank"><i
                                    class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Lost And Found</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public') }}/assets/js/main.js"></script>

</body>

</html>