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

        {{-- <div class="mb-3">
            <label for="Pymnt" class="form-label">Please select a payment method</label>
            <select name="Payment" id="Pymnt" class="form-select">
            <option value="Game Coins">Game Coins</option>
        <option value="Visa">Visa</option>
        <option value="MasterCard">MasterCard</option>
        <option value="Dana">Dana</option>
        <option value="Linkaja">Linkaja</option>
        <option value="Gopay">GoPay</option>
            </select>
        </div> --}}

            {{-- <button type="submit" class="btn btn-primary">Continue</button> --}}
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
