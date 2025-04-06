<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daddy Kost - User Pages</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--Bootstrap ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor.css')}}">

    <!--Link Swiper's CSS ================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Link AOS's CSS ================================================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
    <style>
        .container {
            max-width: 1800px;
            margin-left: 7rem;
            margin-top: 4rem;
            margin-bottom: 5rem;
            padding: 0 1rem;
        }

        .peraturan-container {
            display: flex;
            margin: 20px 50px;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-bottom: 30px;
        }

/* Styling for each card */
        .card {
            background-color: #d4cdc3; /* Card warna gelap abu-abu */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 48%; /* Two cards per row */
            margin-bottom: 20px;
        }

        .judul {
            color: #1a1a1a;
            font-size: 1.8rem;
            margin-bottom: 15px;
            text-decoration: underline; 
        }

        .card ul {
            list-style-type: decimal; /* Menambahkan nomor urut pada list */
            padding-left: 20px; /* Memberi padding agar lebih rapi */
        }

        .card ul li {
            margin: 10px 0;
            font-size: 1.1rem;
            text-decoration: none;
        }

        .footer-daddy-kost {
            .footer {
                position: relative;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
</head>

<body>

    <header id="header">
        <nav id="primary-header" class="navbar navbar-expand-lg py-4">
            <div class="container-fluid padding-side">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets/images/ok.jpg')}}" class="logo img-fluid">
                    </a>
                    <button class="navbar-toggler border-0 d-flex d-lg-none order-3 p-2 shadow-none" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar"
                        aria-expanded="false">
                        <svg class="navbar-icon" width="60" height="60">
                            <use xlink:href="#navbar-icon"></use>
                        </svg>
                    </button>
                    <div class="header-bottom offcanvas offcanvas-end " id="bdNavbar"
                        aria-labelledby="bdNavbarOffcanvasLabel">
                        <div class="offcanvas-header px-4 pb-0">
                            <button type="button" class="btn-close btn-close-black mt-2" data-bs-dismiss="offcanvas"
                                aria-label="Close" data-bs-target="#bdNavbar"></button>
                        </div>
                        <div class="offcanvas-body align-items-center justify-content-center">
                            <div class="search d-block d-lg-none m-5">
                                <form class=" position-relative">
                                    <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2"
                                        placeholder="Search...">
                                    <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                                        <svg class="" width="20" height="20">
                                            <use xlink:href="#search"></use>
                                        </svg>
                                    </a>
                                </form>
                            </div>
                            <ul class="navbar-nav align-items-center mb-2 mb-lg-0">
                                <li class="nav-item px-3">
                                    <a class="nav-link p-0" href="{{URL::to('user/home')}}">Riwayat</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link p-0" href="{{URL::to('user/category')}}">Kategori</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link p-0" aria-current="page" href="{{URL::to('user/daftar')}}">Daftar Menu</a>
                                </li>
                                <li class="nav-item px-3 dropdown">
                                    <a class="nav-link active p-0 dropdown-toggle text-center " data-bs-toggle="dropdown"
                                        href="#" role="button" aria-expanded="false">Pusat Bantuan</a>
                                    <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                        <li><a href="{{URL::to('user/peraturan')}}" class="dropdown-item " aria-current="page">Peraturan </a>
                                        </li>
                                        <li><a href="{{URL::to('user/notifikasi')}}" class="dropdown-item ">Notifikasi </a>
                                        </li>
                                        <li><a href="{{URL::to('user/komplain')}}" class="dropdown-item ">Komplain </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item px-3 dropdown">
                                    <a class="nav-link p-0 dropdown-toggle text-center " data-bs-toggle="dropdown" href="#" role="button"
                                      aria-expanded="false">Account</a>
                                    <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 p-3 border-0 shadow ">
                                      <li class="p-1">
                                        <span>{{ auth()->user()->name }}</span>
                                      </li>
                                      <li class="p-1">
                                        <span>{{ auth()->user()->email }}</span>
                                      </li>
                                      <li>
                                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                      </li>
                                    </ul>
                                  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="peraturan-container">
            <!-- Peraturan Umum -->
            <div class="card">
                <h2 class="judul">Peraturan Umum</h2>
                <ul>
                    <li>Setiap penghuni kost wajib menjaga kebersihan kamar dan area umum.</li>
                    <li>Penghuni kost tidak diperbolehkan mengadakan pesta atau keramaian tanpa izin.</li>
                    <li>Penghuni kost diharapkan untuk menghormati privasi satu sama lain.</li>
                    <li>Merokok hanya diperbolehkan di area yang telah disediakan.</li>
                    <li>Penghuni kost dilarang membawa benda berbahaya seperti senjata atau bahan kimia berbahaya.</li>
                </ul>
            </div>

            <!-- Jam Malam -->
            <div class="card">
                <h2 class="judul">Jam Malam</h2>
                <ul>
                    <li>Jam malam dimulai pukul 22:00 hingga 06:00 pagi.</li>
                    <li>Penghuni kost dilarang membuat kebisingan yang mengganggu tetangga pada jam malam.</li>
                    <li>Setelah jam malam, semua penghuni kost wajib berada di dalam kamar.</li>
                </ul>
            </div>
        </section>

        <section class="peraturan-container">
            <!-- Fasilitas Kost -->
            <div class="card">
                <h2 class="judul">Fasilitas Kost</h2>
                <ul>
                    <li>Setiap kamar dilengkapi dengan tempat tidur, lemari, dan meja belajar.</li>
                    <li>Fasilitas dapur dapat digunakan bersama, namun harus dalam keadaan bersih setelah digunakan.</li>
                    <li>Kamar mandi bersama harus dijaga kebersihannya oleh semua penghuni kost.</li>
                    <li>AC hanya tersedia di kamar yang telah dilengkapi fasilitas tersebut.</li>
                </ul>
            </div>

            <!-- Sanksi -->
            <div class="card">
                <h2 class="judul">Sanksi</h2>
                <ul>
                    <li>Penghuni yang melanggar peraturan pertama kali akan mendapatkan peringatan.</li>
                    <li>Pelanggaran kedua dapat dikenakan denda atau pengurangan fasilitas.</li>
                    <li>Pelanggaran berat dapat berakibat pada pengusiran tanpa pengembalian uang sewa.</li>
                </ul>
            </div>
        </section>

        <section class="peraturan-container">
            <!-- Kunjungan Tamu -->
            <div class="card">
                <h2 class="judul">Kunjungan Tamu</h2>
                <ul>
                    <li>Penghuni kost diperbolehkan menerima tamu, namun tamu tidak boleh menginap lebih dari 1 malam.</li>
                    <li>Tamu yang menginap harus mendapat izin dari pengelola kost minimal sehari sebelumnya.</li>
                </ul>
            </div>

            <!-- Kebersihan dan Keamanan -->
            <div class="card">
                <h2 class="judul">Kebersihan dan Keamanan</h2>
                <ul>
                    <li>Penghuni kost wajib menjaga kebersihan kamar dan area umum seperti koridor dan ruang tamu.</li>
                    <li>Keamanan lingkungan kost menjadi tanggung jawab bersama, pastikan pintu dan jendela terkunci saat keluar.</li>
                    <li>Penghuni kost tidak diperbolehkan untuk membawa barang-barang yang dapat membahayakan keamanan kost.</li>
                </ul>
            </div>
        </section>
    </main>

    <div class="footer-daddy-kost">
        <footer class="footer">
            &copy; 2024 Daddy Kost Website. All rights reserved.
        </footer>
    </div>

    <script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
</body>

</html>