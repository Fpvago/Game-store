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

    <form action="/savegames" method="post" enctype="multipart/form-data">
@csrf

    <div class="mb-3">
      <label for="ftgmsadm" class="form-label">Foto Games</label>
      <input type="file" value="{{old('fotogamesadmin')}}" name="fotogamesadmin" id="ftgmsadm" class="form-control">
      @error('fotogamesadmin')
    <div class= "text-danger">
        {{$message}}
    </div>
    @enderror
    </div>

    <div class="mb-3">
      <label for="gmsadm" class="form-label">Games</label>
      <input type="text" value="{{old('gamesadmin')}}" name="gamesadmin" id="gmsadm" class="form-control" placeholder="Games Name">
      @error('gamesadmin')
    <div class= "text-danger">
      {{$message}}
    </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="priceadm" class="form-label">Price</label>
      <input type="text" value="{{old('price')}}" name="price" id="priceadm" class="form-control" placeholder="Price Game">
      @error('price')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="stkadm" class="form-label">Stock</label>
      <input type="integer" value="{{old('stock')}}" name="stock" id="stkadm" class="form-control" placeholder="Stock Game">
      @error('stock')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
      <label for="splradm" class="form-label">Supplier</label>
      <input type="text" value="{{old('supplier')}}" name="supplier" id="splradm" class="form-control" placeholder="Supplier Games">
      @error('alamat_admin')
    <div class= "text-danger">
      {{$message}}
    </div>
  @enderror
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
        <option value="">--Game Status--</option>
  <option value="Best Product">Best Product</option>
  <option value="non-Best Product">non-Best Product</option>
        </select>
        @error('status')
      <div class= "text-danger">
        {{$message}}
      </div>
    @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@endsection
