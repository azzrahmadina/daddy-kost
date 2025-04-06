<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Daddy Kost - Landing Pages</title>
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
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: white;
                background-image: url('images/download\(22\).jpg');
                background-size: cover;
                background-attachment: fixed;
                color: #333;
            }

            .container {
                max-width: 1300px;
                margin: 4rem auto;
                padding: 1rem;
                background-color: #d4cdc3;
                border-radius: 10px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            }

            .faq-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-bottom: 2rem;
            }

            .card {
                background-color: #fffff;
                border: 1px solid #cfd2cd;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 1.5rem;
                transition: transform 0.2s;
                flex: 1;
                margin: 15px;
                min-width: 30%;
            }

            .card:hover {
                transform: scale(1.02);
            }

            .card h3 {
                font-size: 1.2rem;
                color: #1f1f1f;
                margin: 0;
                cursor: pointer;
            }

            .card p {
                margin-top: 0.5rem;
                display: none;
                font-size: 1rem;
                line-height: 1.6;
            }

            .card.active p {
                display: block;
            }


            .footer-daddy-kost {
                .footer {
                    position: fixed;
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqs = document.querySelectorAll(".card h3");
            faqs.forEach(faq => {
                faq.addEventListener("click", function () {
                    this.parentElement.classList.toggle("active");
                });
            });
        });
    </script>
</head>

<body>

    <header id="header">
        <nav id="primary-header" class="navbar navbar-expand-lg py-4">
            <div class="container-fluid padding-side">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand" href="index.html">
                  <img src="{{ asset('ok.jpg') }}" class="logo img-fluid">
                </a>
                <button class="navbar-toggler border-0 d-flex d-lg-none order-3 p-2 shadow-none" type="button"
                  data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false">
                  <svg class="navbar-icon" width="60" height="60">
                    <use xlink:href="#navbar-icon"></use>
                  </svg>
                </button>
                <div class="header-bottom offcanvas offcanvas-end " id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
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
                        <a class="nav-link p-0" href="{{URL::to('welcomeUser')}}">Home</a>
                      </li>
                      <li class="nav-item px-3">
                        <a class="nav-link p-0"  href="{{URL::to('favorite')}}">Favorite</a>
                      </li>
                      <li class="nav-item px-3">
                        <a class="nav-link p-0" href="{{URL::to('notification')}}">Notification</a>
                      </li>
                      <li class="nav-item px-3">
                        <a class="nav-link active p-0" aria-current="page" href="{{URL::to('faq')}}">FAQ</a>
                      </li>
                      <li class="nav-item px-3 dropdown">
                        <a class="nav-link p-0 dropdown-toggle text-center " data-bs-toggle="dropdown" href="#" role="button"
                          aria-expanded="false">Account</a>
                        <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                          <li><a href="{{URL::to('login')}}" class="dropdown-item ">Login </a>
                          </li>
                          <li><a href="{{URL::to('register')}}" class="dropdown-item ">Register </a>
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

    <section id="slider" data-aos="fade-up">
        <div class="container-fluid padding-side">
          <div class="d-flex rounded-5"
            style="background-image: url({{asset('assets/images/slider-image.jpg')}}); background-size: cover; background-repeat: no-repeat; height: 38vh; background-position: center;">
            <div class="row align-items-center m-auto px-4 px-lg-0">
              <div class="text-start col-md-4 col-lg-4 col-xl-6 offset-lg-1">
                <h5 class="display-1 fw-normal text-nowrap"> Frequently Ask Question</h5>
              </div>
            </div>
          </div>
        </div>
    </section>

    <div class="container">
        <div class="card">
            <h3>1. Apa saja fasilitas yang tersedia di Daddy Kost?</h3>
            <p>
                Daddy Kost menyediakan fasilitas lengkap seperti Wi-Fi, laundry, area parkir, dapur bersama, dan
                keamanan 24 jam.
                Kamar-kamar juga dilengkapi dengan furnitur modern dan pendingin ruangan untuk kenyamanan penghuni.
                Selain itu, tersedia ruang komunal untuk bersosialisasi dan bersantai dengan penghuni lainnya.
            </p>
        </div>

        <div class="card">
            <h3>2. Apakah ada kamar untuk pasangan?</h3>
            <p>
                Ya, kami memiliki beberapa kamar yang dirancang khusus untuk pasangan dengan privasi ekstra.
                Kamar pasangan dilengkapi dengan fasilitas tambahan seperti area duduk pribadi dan akses langsung ke
                balkon.
                Semua ini dirancang untuk memastikan kenyamanan dan kemudahan bagi pasangan yang tinggal di Daddy Kost.
            </p>
        </div>

        <div class="card">
            <h3>3. Bagaimana cara melakukan pemesanan?</h3>
            <p>
                Anda dapat memesan kamar melalui situs resmi kami atau langsung menghubungi pengelola via WhatsApp.
                Pastikan untuk memberikan informasi lengkap tentang kebutuhan Anda, seperti tipe kamar yang diinginkan
                dan tanggal check-in.
                Kami juga menyediakan layanan konsultasi untuk membantu Anda memilih kamar yang paling sesuai dengan
                kebutuhan Anda.
            </p>
        </div>

        <div class="card">
            <h3>4. Apakah ada kebijakan refund?</h3>
            <p>
                Refund dapat dilakukan dengan syarat dan ketentuan tertentu. Silakan hubungi pengelola untuk informasi
                lebih lanjut.
                Kami biasanya memproses refund dalam waktu 7-14 hari kerja setelah pengajuan diterima.
                Kebijakan ini bertujuan untuk memastikan transparansi dan kepuasan pelanggan.
            </p>
        </div>

        <div class="card">
            <h3>5. Apakah diperbolehkan membawa hewan peliharaan?</h3>
            <p>
                Maaf, untuk menjaga kenyamanan semua penghuni, hewan peliharaan tidak diperbolehkan.
                Kebijakan ini dibuat untuk menghindari alergi atau ketidaknyamanan bagi penghuni lain.
                Namun, kami terus berupaya memberikan layanan terbaik bagi semua penghuni.
            </p>
        </div>

        <div class="card">
            <h3>6. Apakah ada layanan pembersihan kamar?</h3>
            <p>
                Ya, Daddy Kost menyediakan layanan pembersihan kamar secara berkala untuk memastikan kebersihan ruang
                tinggal Anda.
                Penghuni dapat memesan jadwal tambahan jika diperlukan melalui pengelola kost.
                Layanan ini dirancang untuk mendukung kenyamanan dan kebersihan lingkungan kost.
            </p>
        </div>

        <div class="card">
            <h3>7. Bagaimana dengan keamanan di Daddy Kost?</h3>
            <p>
                Keamanan menjadi prioritas utama di Daddy Kost. Kami memiliki sistem keamanan 24 jam, CCTV di setiap
                sudut kost,
                serta akses masuk yang terbatas hanya untuk penghuni dan tamu yang telah terdaftar. Anda dapat merasa
                aman dan nyaman
                selama tinggal di sini.
            </p>
        </div>

        <div class="card">
            <h3>8. Apakah Daddy Kost menyediakan layanan antar-jemput?</h3>
            <p>
                Ya, kami menyediakan layanan antar-jemput dengan biaya tambahan. Layanan ini dapat dipesan melalui
                pengelola kost
                untuk perjalanan ke stasiun, bandara, atau lokasi lainnya. Kami berusaha untuk memudahkan penghuni dalam
                mobilitas
                sehari-hari.
            </p>
        </div>

        <div class="card">
            <h3>9. Apakah Daddy Kost menyediakan tempat kerja atau coworking space?</h3>
            <p>
                Ya, Daddy Kost memiliki area khusus yang dilengkapi dengan meja kerja dan koneksi Wi-Fi cepat yang dapat
                digunakan oleh
                penghuni yang membutuhkan tempat kerja atau ruang untuk bekerja secara produktif. Area ini juga ideal
                untuk belajar atau
                bekerja remote.
            </p>
        </div>

    </div>

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