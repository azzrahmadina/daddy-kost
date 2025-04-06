<!DOCTYPE html>
<html lang="en">
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
            color: #333;
        }

        .card {
            width: 80%;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin: 50px auto;
        }

        .btn-universal {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px; 
            height: 40px; 
            width: auto; 
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

    <section id="slider" data-aos="fade-up">
        <div class="container-fluid padding-side">
          <div class="d-flex rounded-5"
            style="background-image: url({{asset('assets/images/slider-image.jpg')}}); background-size: cover; background-repeat: no-repeat; height: 38vh; background-position: center;">
            <div class="row align-items-center m-auto px-4 px-lg-0">
              <div class="text-start col-md-4 col-lg-4 col-xl-6 offset-lg-1">
                <h5 class="display-1 fw-normal text-nowrap">Komplain</h5>
              </div>
            </div>
          </div>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <h2>Masih Butuh Bantuan? Lapor sama Daddy </h2>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('user/komplain') }}" method="POST" id="rentalForm">
                @csrf
                    <div class="form-group">
                      <label for="name"><h4>Isi Disini</h4></label>
                      <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                    </div>
                    <br>    
                    <button type="submit" class="btn btn-universal btn-success">Send</button>
            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @elseif (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif
    });
</script>


</body>
</html>
