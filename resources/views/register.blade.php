@extends('layoutauth')
@section('judulnya')
@section('formnya')
<form class="pt-3" action="{{ route('register.post') }}" method="POST">
    @csrf
    @error('success')
    {{-- <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span> --}}
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
         {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    @enderror
    <div class="form-group">
      <label for="exampleInputEmail">Nama</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-account-outline text-white"></i>
          </span>
        </div>
        <input type="text" class="form-control form-control-lg border-left-0" style="color: white" id="nama" placeholder="Nama" name="nama" autofocus>
        @if($errors->has('nama'))
        <span class="error">{{ $errors->first('nama') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail">username</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-account-outline text-white"></i>
          </span>
        </div>
        <input type="text" class="form-control form-control-lg border-left-0" style="color: white" id="username" placeholder="username" name="username" autofocus>
        @if($errors->has('username'))
        <span class="error">{{ $errors->first('username') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail">Email</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-account-outline text-white"></i>
          </span>
        </div>
        <input type="text" class="form-control form-control-lg border-left-0" style="color: white" id="email" placeholder="Email" name="email" autofocus>
        @if($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      {{-- <label for="exampleInputEmail">Level</label> --}}
      <div class="input-group">
        {{-- <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-account-outline text-white"></i>
          </span>
        </div> --}}
        <input type="hidden" value="customer" class="form-control form-control-lg border-left-0" style="color: white" id="level" placeholder="level" name="level" autofocus>
        @if($errors->has('level'))
        <span class="error">{{ $errors->first('level') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-lock-outline text-white"></i>
          </span>
        </div>
        <input type="password" class="form-control form-control-lg border-left-0" style="color: white" id="password" name="password" placeholder="Password">
        @if($errors->has('password'))
        <span class="error">{{ $errors->first('password') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Confirm Password</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="mdi mdi-lock-outline text-white"></i>
          </span>
        </div>
        <input type="password" class="form-control form-control-lg border-left-0" style="color: white" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation">
        @if($errors->has('password_confirmation'))
        <span class="error">{{ $errors->first('password_confirmation') }}</span>
        @endif
      </div>
    </div>
    <div class="my-2 d-flex justify-content-between align-items-center">
      <div class="form-check">
        <label class="form-check-label text-muted">
          <input type="checkbox" class="form-check-input">
          Keep me signed in
        </label>
      </div>
      <a href="#" class="auth-link text-white">Forgot password?</a>
    </div>
    <div class="my-2">
      <button type="submit" class="btn btn-block btn-lg font-weight-medium auth-form-btn" href="index.html" style="background-color: #E8D5C4">LOGIN</button>
    </div>
    <div class="text-center mt-4 font-weight-light">
      Don't have an account? <a href="register-2.html" class="text-white " style="font-weight: bold">Create</a>
    </div>
  </form>
@endsection