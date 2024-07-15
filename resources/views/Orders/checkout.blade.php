@extends('Layout.main')
@section('title')
Payment Method
@endsection
@section('content')

<section class="orders">

<div class="card-body py-5 mt-5">
    <h3>Payment</h3>

    <img src="{{asset ('storage/uploads/' . $games->fotogamesadmin) }}" width="10%" alt="..."  >

    <form action="payment" method="post" enctype="multipart/form-data">
        @csrf


        <input type="hidden" id="product_id" name="product_id" value="{{$games->id}}">
        <input type="hidden" id="price-per-item" name="product_id" value="{{$games->price}}">
        <input type="hidden" name="status_bayar" value="0">
        <input type="hidden" id="total-input" name="total_bayar">

        <input type="text" readonly value="{{$games->gamesadmin}}">
        <input type="text" readonly value="{{$games->price}}">
        <input type="text" id="qty_order" name="qty_order" placeholder="Number of Order">
        <input type="text" id="total" readonly placeholder="Total bayar">
        <button type="submit" class="btn btn-danger mt-4">Checkout</button>


        </section>

    </form>
</div>

<script>
    $(document).ready(function() {
        $('#quantity').on('input', function() {
            var quantity = parseFloat($('#quantity').val());

            var priceperitem = parseFloat($('#price-per-item').val());

            var total = quantity * priceperitem;
            $('#total').val(total);
            $('#total-input').val(total);
        });
        });

</script>
@endsection
