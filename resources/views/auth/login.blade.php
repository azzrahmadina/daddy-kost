
<html>

<head>
  <title>Mellow - Hotel HTML Website Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"
  >
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
</head>

<body>

  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <section id="room" class="w-100">
      <div class="text-center">
        <div class="col-md-6 col-lg-4 mx-auto p-4 bg-light rounded shadow">
          <h4 class="display-6 fw-normal mb-3">Login</h4>
          <p class="text-center mb-4">Log in with your credentials.</p>
          <form method="POST" action="{{ route('user.login.submit') }}">
            @csrf
            <div class="d-grid">
                <input type="email" class="form-control px-4 py-3 mb-3 @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="d-grid">
                <input type="password" class="form-control px-4 py-3 mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <p class="small text-muted mt-4">New to Daddy Kost? <a class="text-primary" href="{{URL::to('register')}}">Create an account</a></p>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
  

  <script src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>