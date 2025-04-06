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
              <h5 class="card-title fw-semibold mb-4">Tabel Kamar</h5>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="d-flex justify-content-end me-4">
                  <button id="btnadd" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#mdladd">+ Tambah Kamar</button>
                </div>
                <div class="table-responsive mt-2">
                <div class="col-md-4 mt-2">
                    <form action="/kamar/search" method="GET" class="d-inline">
                        <div class="input-group mb-1">
                            <input type="text" name="search" placeholder="Search Kamar" class="form-control" required>
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
                        <h6 class="fw-semibold mb-0">Nama</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Harga</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Penghuni</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Kategori</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Gambar</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Keterangan</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kamar as $kam)
                    <tr>
                      <td class="border-bottom-0">{{$loop->iteration }}</td>
                      <td width="100px" class="border-bottom-0">
                        {{$kam->nama}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$kam->harga}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$kam->status}}               
                      </td>
                      <td class="border-bottom-0">
                        {{$kam->penghuni ? $kam->penghuni->nama : 'N/A' }}                
                      </td>
                      <td class="border-bottom-0">
                        {{$kam->kategori ? $kam->kategori->nama : 'N/A' }}               
                      </td>
                      <td class="border-bottom-0">
                        <img src="{{ asset ('/storage/img/'.$kam->gambar) }}" style="width: 100px; height: 100px; object-fit: cover;">              
                      </td>
                      <td width="250px" class="border-bottom-0">
                        {{$kam->keterangan}}               
                      </td>
                      <td class="border-bottom-0">
                        <button data-id="{{ $kam->id }}" id="btnedit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mdledit">
                            Edit
                        </button>
                        <form method="POST" action="{{ URL::to('admin/kamar/'. $kam->id) }} " class="d-inline">

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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <form action="{{ URL::to('admin/kamar/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
              <label for="title" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-1">
              <label for="status" class="form-label">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="">Pilih Status</option>
                  @foreach(\App\Models\Kamar::getStatusOptions() as $status)
                      <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group mb-1">
              <label for="nama" class="form-label">Penghuni</label>
              <select name="id_penghuni" id="id_penghuni" class="form-control">
                  <option value="">Pilih Penghuni</option>
                  @foreach ($penghuni as $pe)
                      <option value="{{ $pe->id }}">
                          {{ $pe->nama }}
                      </option>
                  @endforeach
              </select>
            </div>
            <div class="form-group mb-1">
              <label for="nama" class="form-label">Kategori</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                  <option value="">Pilih Kategori</option>
                  @foreach ($kategori as $kat)
                      <option value="{{ $kat->id }}">
                          {{ $kat->nama }}
                      </option>
                  @endforeach
              </select>
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="keterangan" cols="10" rows="4"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Edit --}}
  <div class="modal fade" id="mdledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-1">
              <label for="title" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-1">
              <label for="status" class="form-label">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="">Pilih Status</option>
                  @foreach(\App\Models\Kamar::getStatusOptions() as $status)
                      <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group mb-1">
              <label for="nama" class="form-label">Penghuni</label>
              <select name="id_penghuni" id="id_penghuni" class="form-control">
                  <option value="">Pilih Penghuni</option>
                  @foreach ($penghuni as $pe)
                      <option value="{{ $pe->id }}">
                          {{ $pe->nama }}
                      </option>
                  @endforeach
              </select>
            </div>
            <div class="form-group mb-1">
              <label for="nama" class="form-label">Kategori</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                  <option value="">Pilih Kategori</option>
                  @foreach ($kategori as $kat)
                      <option value="{{ $kat->id }}">
                          {{ $kat->nama }}
                      </option>
                  @endforeach
              </select>
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-1">
              <label for="title" class="form-label">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="keterangan" cols="10" rows="4"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Change</button>
        </div>
      </form>
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

      $(document).on("click", "#btnedit", function (e) {
    e.preventDefault();
    const id = $(this).data("id");

    $.ajax({
        type: 'GET',
        url: '/admin/kamar/' + id + '/edit',
        dataType: 'JSON',
        success: function (response) {
            $("#mdledit #nama").val(response.nama);
            $("#mdledit #harga").val(response.harga);
            $("#mdledit #status").val(response.status);
            $("#mdledit #id_penghuni").val(response.id_penghuni);
            $("#mdledit #id_kategori").val(response.id_kategori);
            $("#mdledit #keterangan").val(response.keterangan);
            $("#mdledit form").attr("action", "/admin/kamar/" + id);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});

    
  });



 

</script>