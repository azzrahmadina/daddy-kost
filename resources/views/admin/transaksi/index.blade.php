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
                <img src="{{ asset ('backend/images/logos/logo.jpeg')}}" alt="" width="35" height="35" class="rounded-circle-black">
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
      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Tabel Transaksi</h5>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="d-flex justify-content-end me-4">
                  <button id="btnadd" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#mdladd">+ Tambah Transaksi</button>
                </div>
                <div class="table-responsive mt-2">
                <div class="col-md-4 mt-2">
                    <form action="/transaksi/search" method="GET" class="d-inline">
                        <div class="input-group mb-1">
                            <input type="text" name="search" placeholder="Search Transaksi" class="form-control" required>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
                <table class="table table-stripped">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">#</h6>
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
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
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
                      <td class="border-bottom-0">
                        <button data-id="{{ $tran->id }}" id="btnedit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mdledit">
                            Edit
                        </button>
                        <form method="POST" action="{{ URL::to('admin/transaksi/'. $tran->id) }} " class="d-inline">

                            @csrf

                            <input name="_method" type="hidden" value="DELETE">

                            <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip">Delete</button>

                        </form>
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

  {{-- Modal Add --}}
  <div class="modal fade" id="mdladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Transaksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ URL::to('admin/transaksi/') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-1">
                        <label for="nama" class="form-label">Penghuni</label>
                        <select name="id_penghuni" id="id_penghuni" class="form-control">
                            <option value="">Pilih Penghuni</option>
                            @foreach ($penghuni as $pe)
                                <option value="{{ $pe->id }}">{{ $pe->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-1">
                        <label for="nama" class="form-label">Kamar</label>
                        <select name="id_kamar" id="id_kamar" class="form-control">
                            <option value="">Pilih kamar</option>
                            @foreach ($kamar as $kam)
                                <option value="{{ $kam->id }}">{{ $kam->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="title" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" readonly>
                    </div>
                    <div class="mb-1">
                        <label for="title" class="form-label">Durasi</label>
                        <input type="text" class="form-control" id="durasi" name="durasi">
                    </div>
                    <div class="mb-1">
                        <label for="title" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                    </div>
                    <div class="mb-1">
                      <label for="total_harga" class="form-label">Total Harga</label>
                      <input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>

  <!-- Modal Edit -->
<div class="modal fade" id="mdledit" tabindex="-1" aria-labelledby="mdleditLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="mdleditLabel">Edit Transaksi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="" method="POST" id="editForm">
                  @csrf
                  @method('PUT') <!-- Untuk metode PUT -->

                  <div class="form-group mb-3">
                      <label for="edit_penghuni" class="form-label">Penghuni</label>
                      <select name="id_penghuni" id="edit_penghuni" class="form-control">
                          <option value="">Pilih Penghuni</option>
                          @foreach ($penghuni as $pe)
                              <option value="{{ $pe->id }}">{{ $pe->nama }}</option>
                          @endforeach
                      </select>
                  </div>

                  <div class="form-group mb-3">
                      <label for="edit_kamar" class="form-label">Kamar</label>
                      <select name="id_kamar" id="edit_kamar" class="form-control">
                          <option value="">Pilih Kamar</option>
                          @foreach ($kamar as $kam)
                              <option value="{{ $kam->id }}" data-harga="{{ $kam->harga }}">
                                  {{ $kam->nama }}
                              </option>
                          @endforeach
                      </select>
                  </div>

                  <div class="form-group mb-3">
                      <label for="edit_harga" class="form-label">Harga</label>
                      <input type="text" name="harga" id="edit_harga" class="form-control" readonly>
                  </div>

                  <div class="form-group mb-3">
                      <label for="edit_durasi" class="form-label">Durasi</label>
                      <input type="number" name="durasi" id="edit_durasi" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                      <label for="edit_tgl" class="form-label">Tanggal Masuk</label>
                      <input type="date" name="tgl_masuk" id="edit_tgl" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                      <label for="edit_total_harga" class="form-label">Total Harga</label>
                      <input type="text" name="total_harga" id="edit_total_harga" class="form-control" readonly>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">

  $(function () {

    $('.show_confirm').click(function(e) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        e.preventDefault();
        
        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
        
    });

    $(document).on('click', '#btnedit', function (e) {
    e.preventDefault();
    const id = $(this).data('id');

    // AJAX request untuk mendapatkan data transaksi
      $.ajax({
          type: 'GET',
          url: `/admin/transaksi/${id}/edit`,
          success: function (response) {
              // Isi form modal dengan data yang diterima
              $('#edit_penghuni').val(response.id_penghuni);
              $('#edit_kamar').val(response.id_kamar).change();
              $('#edit_harga').val(response.harga);
              $('#edit_durasi').val(response.durasi);
              $('#edit_tgl').val(response.tgl_masuk);
              $('#edit_total_harga').val(response.total_harga);

              // Ubah action form agar sesuai dengan rute update
              $('#editForm').attr('action', `/admin/transaksi/${id}`);
              
              // Tampilkan modal
              $('#mdledit').modal('show');
          },
          error: function (xhr) {
              console.error(xhr.responseText);
          }
      });
    });

    $('#edit_durasi').on('input', function () {
        const harga = parseFloat($('#edit_harga').val());
        const durasi = parseInt($(this).val());
        if (!isNaN(harga) && !isNaN(durasi)) {
            $('#edit_total_harga').val(harga * durasi);
        }
    });


    $(document).on("change", "#id_kamar", function () {
      const kamarId = $(this).val(); // Ambil ID kamar yang dipilih

      if (kamarId) {
          $.ajax({
              url: '/getHargaKamar/' + kamarId, // Endpoint untuk mendapatkan harga
              type: 'GET',
              dataType: 'json',
              success: function (response) {
                  if (response.harga) {
                      $('#harga').val(response.harga); // Isi field harga
                  } else {
                      $('#harga').val(''); // Kosongkan field harga jika tidak ada data
                  }
              },
              error: function (xhr, status, error) {
                  console.error(xhr.responseText); // Tampilkan error di console
                  $('#harga').val(''); // Kosongkan field harga jika terjadi error
              }
          });
      } else {
            $('#harga').val(''); // Kosongkan field harga jika tidak ada kamar yang dipilih
      }
    });
    $(document).on('input', '#id_kamar, #durasi', function () {
      const harga = parseFloat($('#id_kamar option:selected').data('harga')) || 0;
      const durasi = parseInt($('#durasi').val()) || 0;

      const totalHarga = harga * durasi;
      $('#total_harga').val(totalHarga);
    });
    
  });



 

</script>