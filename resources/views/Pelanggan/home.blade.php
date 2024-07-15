@extends('Layout.main')
@section('title')
    Home
@endsection
@section('content')
<section class="hero">
<main class="content">
    <h1>Find varieties of games at a reasonable price here in Game Store</h1>
    <p>Soulsborne, Open world, Survival, everything is here</p>
    <a href="/product" class="btn">Buy Now</a>
</main>
</section>

<section class="About container">
    <h2 class= "text-start mt-5 fw-bold">About Us</h2>
    <div class="row mt-3">
        <div class="col-md-6">
            <img src="{{ asset ('images/logo.png')}}" alt="" width="100%">
        </div>
        <div class="col-md-6">
            <p>Game Store is a promotionally driven discount retailer of predominantly general merchandise and non-perishable groceries for home, leisure and business use.
Game is a subsidiary of the JSE listed, Massmart Holdings. Game store third largest distributor of consumer goods, the leading retailer of general merchandise, liquor and home improvement equipment and supplies, and the leading wholesaler of basic foods.</p>
        </div>
    </div>

</section>

<section class="best product py-3 mt-4 bg-primary">
    <div class="container">
    <h2 class="text-center fw-bold">Best Product</h2>
<div class="row">
    @foreach ($games as $item)
    <div class="col-md-3">
    <div class="card" >
  <img src="{{asset ('storage/uploads/' . $item->fotogamesadmin) }}" class="card-img-top" alt="..."  >
  <div class="card-body">
    <h5 class="card-title">{{ $item->gamesadmin}}</h5>
    <p class="fw-bold fs-5 text-success">{{ $item->price}}</p>
    <a href="/orders/{{$item->id}}" class="btn btn-dark text-white">Add to cart</a>
    <a href="/orders/{{$item->id}}" class="btn btn-dark text-white">View Product</a>
  </div>
</div>
</div>
    @endforeach
    </div>
    </div>
</section>
@endsection
