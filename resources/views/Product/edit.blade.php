@extends('Layout.app')
@section('title')
GamesPage
@endsection

@section('content')
    <h1>Stock</h1>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
<hr>
<div class="card-body">

    <form action="/updategames/{{$games->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
@csrf

    <div class="mb-3">
      <label for="ftgmsadm" class="form-label">Foto Games</label>
      <input type="hidden" name="fotogamesadm" value="{{$games->fotogamesadmin}}">
        <input type="file" name="fotogamesadmin" id="ftgmsadm" class="from-control" accept="*/uploads">
    </div>

    <div class="mb-3">
      <label for="gmsadm" class="form-label">Games</label>
      <input type="text" value="{{$games->gamesadmin}}" name="gamesadmin" id="gmsadm" class="form-control" placeholder="Games Name">

    </div>

    <div class="mb-3">
      <label for="priceadm" class="form-label">Price</label>
      <input type="text" value="{{$games->price}}" name="price" id="priceadm" class="form-control" placeholder="Price Game">

    </div>

    <div class="mb-3">
      <label for="stkadm" class="form-label">Stock</label>
      <input type="integer" value="{{$games->stock}}" name="stock" id="stkadm" class="form-control" placeholder="Stock Game">

    </div>

    <div class="mb-3">
      <label for="splradm" class="form-label">Supplier</label>
      <input type="text" value="{{$games->supplier}}" name="supplier" id="splradm" class="form-control" placeholder="Supplier Games">

    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
        <option value="">--Game Status--</option>
  <option value="Best Product">Best Product</option>
  <option value="non-Best Product">non-Best Product</option>
        </select>

      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@endsection
