@extends('layouts.secure')

@section('content')
<p class="h3 text-center fs-6 mb-0 fw-bold">Login</p>
<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

       @error('password')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label text-dark" for="flexCheckChecked">
          Remember me
        </label>
      </div>
    </div>
    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Login</button>
  </form>
@endsection