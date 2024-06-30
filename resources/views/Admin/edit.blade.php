@extends('Layout.app')
@section('title')
    Update Admin
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

    <form action="/updateadmin/{{$admin->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="mb-3">
      <label for="adm" class="form-label">Nama Admin</label>
      <input type="text" value="{{$admin->nama_admin}}" name="nama_admin" id="adm" class="form-control" placeholder="Nama Admin">

    </div>

    <div class="mb-3">
      <label for="jkadm" class="form-label">Jenis Kelamin</label>
      <select name="jk_admin" id="jkadm" class="form-select">
      <option value="">--pilih Jenis Kelamin--</option>
<option value="Laki-laki">L</option>
<option value="Perempuan">P</option>
      </select>

    </div>

    <div class="mb-3">
      <label for="noadm" class="form-label">Nomor Handphone</label>
      <input type="text" value="{{$admin->nohp_admin}}" name="nohp_admin" id="noadm" class="form-control" placeholder="Nomor Handphone">

    </div>

    <div class="mb-3">
      <label for="emailadm" class="form-label">Email Admin</label>
      <input type="email" value="{{$admin->email_admin}}" name="email_admin" id="emailadm" class="form-control" placeholder="Email Admin">

    </div>

    <div class="mb-3">
      <label for="alamadm" class="form-label">Alamat Admin</label>
      <textarea type="text" name="alamat_admin" id="alamadm" class="form-control" placeholder="Alamat Admin">{{$admin->alamat_admin}}</textarea>

    </div>

    <div class="mb-3">
      <label for="jbtadm" class="form-label">Jabatan Admin</label>
      <input type="text" value="{{$admin->jabatan_admin}}" name="jabatan_admin" id="jbtadm" class="form-control" placeholder="Jabatan Admin">

    </div>

    <div class="mb-3">
      <label for="ftadm" class="form-label">Foto Admin</label>
      <input type="hidden" name="fotolama" value="{{$admin->foto_admin}}">
        <input type="file" name="foto_admin" id="ftadm" class="from-control" accept="*/uploads">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
