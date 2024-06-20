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
<div class="card">
  <div class="card-header">
    <div class="text-end">
  <a class="btn btn-dark" href="/createadmin" role="button">Tambah Admin</a>
  </div>
  </div>
  <div class="card-body">
  <table class="table  table-striped-columns">
  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nomor Hp</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>


    </tr>

  </thead>
  
</table>
  </div>
</div>
@endsection