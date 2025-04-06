@extends('layouts.master')

@section('content')
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('backend/images/logos/logo.jpeg')}}" alt="" width="35" height="35" class="rounded-circle-black">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <p class="mb-0 fs-3">Profile</p>
                  </a>
                  <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-user fs-6"></i>
                    <p class="mb-0 fs-3">{{ auth()->user()->name }}</p>
                  </a>
                  <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-mail"></i>
                    <p class="mb-0 fs-3">{{ auth()->user()->email }}</p>
                  </a>
                  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--  Header End -->
    <div class="container-fluid">
      <!--  Row 1 -->
      {{-- <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-start gap-4">
              <!-- Kamar -->
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-10">
                      <h5 class="card-title mb-9 fw-semibold"> Man </h5>
                      <div class=" pb-1">
                        <h3 class="fw-semibold mb-1">Alpha</h3>
                        <p class="text-dark me-1 fs-3 mb-0">15 terisi dari 20 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Sigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">8 terisi dari 12 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Enigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">2 terisi dari 8 Kamar</p>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="d-flex justify-content-end">
                        <div
                          class="text-black bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-man fs-8"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-10">
                      <h5 class="card-title mb-9 fw-semibold"> Woman </h5>
                      <div class=" pb-1">
                        <h3 class="fw-semibold mb-1">Alpha</h3>
                        <p class="text-dark me-1 fs-3 mb-0">12 terisi dari 20 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Sigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">10 terisi dari 12 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Enigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">5 terisi dari 8 Kamar</p>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="d-flex justify-content-end">
                        <div
                          class="text-black bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-woman fs-8"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-10">
                      <h5 class="card-title mb-9 fw-semibold"> Couple </h5>
                      <div class=" pb-1">
                        <h3 class="fw-semibold mb-1">Alpha</h3>
                        <p class="text-dark me-1 fs-3 mb-0">10 terisi dari 15 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Sigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">4 terisi dari 10 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Enigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">6 terisi dari 8 Kamar</p>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="d-flex justify-content-end">
                        <div
                          class="text-black bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-friends fs-8"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-start gap-4">
              <!-- Kamar -->
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-10">
                      <h5 class="card-title mb-9 fw-semibold"> Man </h5>
                      <div class=" pb-1">
                        <h3 class="fw-semibold mb-1">Alpha</h3>
                        <p class="text-dark me-1 fs-3 mb-0">15 terisi dari 20 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Sigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">8 terisi dari 12 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Enigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">2 terisi dari 8 Kamar</p>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="d-flex justify-content-end">
                        <div
                          class="text-black bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-man fs-8"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-10">
                      <h5 class="card-title mb-9 fw-semibold"> Woman </h5>
                      <div class=" pb-1">
                        <h3 class="fw-semibold mb-1">Alpha</h3>
                        <p class="text-dark me-1 fs-3 mb-0">12 terisi dari 20 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Sigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">10 terisi dari 12 Kamar</p>
                        <br>
                        <h4 class="fw-semibold mb-1">Enigma</h4>
                        <p class="text-dark me-1 fs-3 mb-0">5 terisi dari 8 Kamar</p>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="d-flex justify-content-end">
                        <div
                          class="text-black bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-woman fs-8"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-start gap-4">
              <!-- Pemgaduan -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">Pengaduan</h5>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Keterangan</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengaduan as $pe)
                        <tr>
                          <td class="border-bottom-0">{{$loop->iteration }}</td>
                          <td class="border-bottom-0">
                            {{$pe->keterangan}}               
                          </td>
                          <td class="border-bottom-0">
                            {{$pe->status}}               
                          </td>
                        </tr>
                        @endforeach                
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Riwayat Transaksi</h5>
              <div class="table-responsive">
                <table class="table table-stripped">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Penghuni</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Kamar</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Harga</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Durasi</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Tanggal Masuk</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Total Harga</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transaksi as $tran)
                    <tr>
                      <td class="border-bottom-0">{{$loop->iteration }}</td>
                      <td class="border-bottom-0">
                        {{$tran->penghuni ? $tran->penghuni->nama : 'N/A' }}                
                      </td>
                      <td class="border-bottom-0">
                        {{$tran->kamar ? $tran->kamar->nama : 'N/A' }}                
                      </td>
                      <td class="border-bottom-0">
                        {{$tran->harga}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$tran->durasi}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$tran->tgl_masuk}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$tran->total_harga}}               
                      </td>
                    </tr>
                    @endforeach                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="backend/images/products/s4.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Boat Headphone</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="backend/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="backend/images/products/s7.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="backend/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
    </div> --}}
  </div>
@endsection
