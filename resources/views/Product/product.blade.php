@extends('Layout.app')
@section('title')
    Product
@endsection

@section('content')
    <h1>Game Stock</h1>
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
  <a class="btn btn-dark" href="/creategames" role="button">Tambahkan product</a>
  </div>
  </div>
  <div class="card-body">
  <table class="table  table-striped-columns">
  <thead>

        <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Games</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Supplier</th>
        <th scope="col">Status</th>
        </tr>

  </thead>
  <tbody>
    @foreach ($games as $item)
<tr>
<th scope="row">{{$loop->iteration}}</th>
<td><img src="{{asset ('storage/uploads/' . $item->fotogamesadmin) }}" alt="" width="175"> </td>
<td>{{ $item->gamesadmin}}</td>
<td>{{ $item->price}}</td>
<td>{{ $item->stock}}</td>
<td>{{ $item->supplier}}</td>
<td>{{ $item->status}}</td>
<td>
<a class="btn btn-success" href="/editgames/{{$item->id}}" role="button">Edit</a>
</td>
<td>
<a class="btn btn-success" href="/deletegames/{{$item->id}}" role="button">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
  </div>
</div>
@endsection
