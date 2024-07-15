@extends('Layout.app')
@section('title')
    Admin
@endsection
@section('content')
    <h1>Admin</h1>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
<hr>
<div class="card-body">

    <form action="/saveadmin" method="post" enctype="multipart/form-data">
@csrf

    <div class="mb-3">
      <label for="adm" class="form-label">Nama Admin</label>
      <input type="text" value="{{old('nama_admin')}}" name="nama_admin" id="adm" class="form-control" placeholder="Nama Admin">
      @error('nama_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="jkadm" class="form-label">Jenis Kelamin</label>
      <select name="jk_admin" id="jkadm" class="form-select">
      <option value="">--pilih Jenis Kelamin--</option>
<option value="Laki-laki">L</option>
<option value="Perempuan">P</option>
      </select>
      @error('jk_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="noadm" class="form-label">Nomor Handphone</label>
      <input type="text" value="{{old('nohp_admin')}}" name="nohp_admin" id="noadm" class="form-control" placeholder="Nomor Handphone">
      @error('nohp_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="emailadm" class="form-label">Email Admin</label>
      <input type="email" value="{{old('email_admin')}}" name="email_admin" id="emailadm" class="form-control" placeholder="Email Admin">
      @error('email_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="passadm" class="form-label">Password Admin</label>
      <input type="password" value="{{old('password_admin')}}" name="password_admin" id="passadm" class="form-control" placeholder="Password Admin">
      @error('password_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="alamadm" class="form-label">Alamat Admin</label>
      <textarea type="text" name="alamat_admin" id="alamadm" class="form-control" placeholder="Alamat Admin">{{old('alamat_admin')}}</textarea>
      @error('alamat_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="jbtadm" class="form-label">Jabatan Admin</label>
      <input type="text" value="{{old('jabatan_admin')}}" name="jabatan_admin" id="jbtadm" class="form-control" placeholder="Jabatan Admin">
      @error('jabatan_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="ftadm" class="form-label">Foto Admin</label>
      <input type="file" value="{{old('foto_admin')}}" name="foto_admin" id="ftadm" class="form-control">
      @error('foto_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@endsection
