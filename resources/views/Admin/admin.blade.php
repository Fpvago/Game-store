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
      <th scope="col">Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nomor Hp</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>



    </tr>

  </thead>
        <tbody>
            @foreach ($admin as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><img src="{{asset ('storage/uploads/' . $item->foto_admin) }}" alt="" width="175"> </td>
      <td>{{ $item->nama_admin }}</td>
      <td>{{ $item->jk_admin }}</td>
      <td>{{ $item->nohp_admin }}</td>
      <td>{{ $item->email_admin }}</td>
      <td>{{ $item->alamat_admin }}</td>
      <td>{{ $item->jabatan_admin }}</td>
      <td>
      <a class="btn btn-success" href="/detailkaryawan/{{$item->id}}" role="button">Details</a>
      </td>
      <td>
      <a class="btn btn-success" href="/editkaryawan/{{$item->id}}" role="button">Edit</a>
      </td>

      <td>
      <a class="btn btn-success" href="/deletekaryawan/{{$item->id}}" role="button">Delete</a>
      </td>
    </tr>
    @endforeach
        </tbody>
</table>
  </div>
</div>
@endsection
