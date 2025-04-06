@extends('layouts.secure')

@section('content')

<p class="h3 text-center fs-6 mb-0 fw-bold">Register</p>
<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputtext1" class="form-label">Name</label><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
    </div>
    {{-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Register</a> --}}
    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Register</button>
    
  </form>
@endsection