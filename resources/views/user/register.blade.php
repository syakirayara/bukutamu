@extends('apps')
@section('content')
<div class="row">
  <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded">
  @if($errors->any())
  @foreach($errors->all() as $err)
  <p class="alert alert-danger">{{ $err }}</p>
  @endforeach
  @endif
<form method="POST" action="{{ route('register.action') }}">
    @csrf
    <h2>Register</h2>
    <div class="mb-3">
        <label>Nama<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
      </div>
      <div class="mb-3">
        <label>Username<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="username" value="{{ old('username') }}">
      </div>
      <div class="mb-3">
        <label>alamat<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
      </div>
      <div class="mb-3">
        <label>telepon<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="tlp" value="{{ old('tlp') }}">
      </div>
      <div class="mb-3">
        <label>email<span class="text-danger">*</span></label>
        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
      </div>
    <div class="mb-3">
      <label>Password<span class="text-danger">*</span></label>
      <input class="form-control" type="password" name="password">
    </div>
    <div class="mb-3">
      <label>Password Confirmation<span class="text-danger">*</span></label>
      <input class="form-control" type="password" name="password_confirmation">
    </div>
    <button type="register" class="btn btn-primary">Register</button>
  </form>
</div>
</div>
</div>
@endsection