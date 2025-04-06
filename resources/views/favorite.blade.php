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
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
      
        <!--vendor css ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css')}}">
      
        <!--Link Swiper's CSS ================================================== -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
      
        <!--Link AOS's CSS ================================================== -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      
        <!-- Style Sheet ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css')}}">
      
        <!-- Google Fonts ================================================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
          href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap"
          rel="stylesheet">
          <style>
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
                      <a class="nav-link active p-0" aria-current="page" href="{{URL::to('favorite')}}">Favorite</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link p-0" href="{{URL::to('notification')}}">Notification</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link p-0" href="{{URL::to('faq')}}">FAQ</a>
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
            style="background-image: url({{asset('assets/images/slider-image.jpg')}}); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
            <div class="row align-items-center m-auto pt-5 px-4 px-lg-0">
              <div class="text-start col-md-4 col-lg-4 col-xl-6 offset-lg-1">
                <h3 class="display-1 fw-normal"> Favorite room recomendation</h3>
                <a href="index.html" class="btn btn-arrow btn-primary mt-3">
                  <span>Explore rooms <svg width="18" height="18">
                      <use xlink:href="#room"></use>
                    </svg></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        </section>
    
        <section id="about-us" class="padding-small mt-5">
            <div class="container-fluid padding-side" data-aos="fade-up">
              <h3 class="display-3 fw-normal text-center">Daddy kost: Woman Sigma 2</h3>
              <div class="row align-items-start mt-3 mt-lg-5">
                <div class="col-lg-6">
                  <div class="p-5">
                    <p>For those who value minimalism and efficiency, the Sigma Room provides a haven of sleek, 
                      modern design tailored to meet your needs. With its thoughtfully planned layout and carefully selected furnishings, 
                      every detail has been optimized to enhance functionality and comfort. The clean lines and uncluttered space create an atmosphere 
                      that is both relaxing and conducive to productivity.</p>
                    <a href="index.html" class="btn btn-arrow btn-primary mt-3">
                      <span>Read About Us <svg width="18" height="18">
                          <use xlink:href="#arrow-right"></use>
                        </svg></span>
                    </a>
                  </div>
                  <img src="{{ asset('assets/images/download (19).jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 350px; width: 750px;">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                  <img src="{{ asset('assets/images/download (16).jpg')}}" alt="img" class="img-fluid rounded-4" style="height: 400px; width: 750px;">
                  <img src="{{ asset('assets/images/korea.jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 350px; width: 800px;">
        
                </div>
              </div>
            </div>
          </section>

          <section id="about-us" class="padding-small">
            <div class="container-fluid padding-side" data-aos="fade-up">
              <h3 class="display-3 fw-normal text-center">Daddy kost: Man Sigma 2</h3>
              <div class="row align-items-start mt-3 mt-lg-5">
                <div class="col-lg-6">
                  <div class="p-5">
                    <p>For those who appreciate a more minimalistic and efficient space, the Sigma room is an ideal choice. 
                      It features a sleek and modern design that prioritizes functionality without compromising style. With its smart 
                      layout and thoughtfully arranged furnishings, this room offers everything you need to maximize both comfort and productivity. 
                      Whether you're a student, a professional, or simply someone who values a streamlined and practical living environment, the Sigma 
                      room provides the perfect balance of simplicity and utility to make your stay truly enjoyable.</p>
                    <a href="index.html" class="btn btn-arrow btn-primary mt-3">
                      <span>Read About Us <svg width="18" height="18">
                          <use xlink:href="#arrow-right"></use>
                        </svg></span>
                    </a>
                  </div>
                  <img src="{{ asset('assets/images/How To Install MRCOOL DIY Ductless Mini-Split Heat Pump – HowTo HVAC.jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 350px; width: 750px;">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                  <img src="{{ asset('assets/images/kamar laki.jpg')}}" alt="img" class="img-fluid rounded-4" style="height: 500px; width: 750px;">
                  <img src="{{ asset('assets/images/tv.jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 350px; width: 800px;">
        
                </div>
              </div>
            </div>
          </section>

          <section id="about-us" class="padding-small">
            <div class="container-fluid padding-side" data-aos="fade-up">
              <h3 class="display-3 fw-normal text-center">Daddy kost: Big Family Enigma 3</h3>
              <div class="row align-items-start mt-3 mt-lg-5 mb-5">
                <div class="col-lg-6">
                  <div class="p-5">
                    <p>The Enigma room is designed for those who crave an eclectic and inspiring environment 
                      that stands out from the ordinary. With its creative design, vibrant accents, and unique ambiance, 
                      this room is a haven for individuals who value self-expression and originality. Every corner is thoughtfully curated to 
                      spark imagination and foster a sense of wonder, making it the ideal choice for artists, dreamers, and innovators alike. 
                      Whether you're seeking a space to reflect your dynamic personality or a setting that encourages creativity and fresh ideas, 
                      the Enigma room offers an experience that's as unique as you are.</p>
                    <a href="index.html" class="btn btn-arrow btn-primary mt-3">
                      <span>Read About Us <svg width="18" height="18">
                          <use xlink:href="#arrow-right"></use>
                        </svg></span>
                    </a>
                  </div>
                  <img src="{{ asset('assets/images/download (16).jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 320px; width: 750px;">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                  <img src="{{ asset('assets/images/download (17).jpg')}}" alt="img" class="img-fluid rounded-4" style="height: 500px; width: 750px;">
                  <img src="{{ asset('assets/images/Double Bedroom.jpg')}}" alt="img" class="img-fluid rounded-4 mt-4" style="height: 350px; width: 800px;">
        
                </div>
              </div>
            </div>
          </section>

      <div class="footer-daddy-kost">
        <footer class="footer">
          &copy; 2024 Daddy Kost Website. All rights reserved.
        </footer>
      </div>  
    
  <script src="{{ asset('assets/js/jquery-1.11.0.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/plugins.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/script.js')}}"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>