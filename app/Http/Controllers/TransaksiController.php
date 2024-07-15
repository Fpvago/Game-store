<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Product::all();
        return view('Pelanggan.product',  compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $games = Product::find($id);
        return view('Orders.checkout',  compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
    [
        'product_id' => 'required',
        'qty_order' => 'required',
        'total_bayar' => 'required',
        'status_bayar' => 'required',
    ]
    );
    $orders = new Pembayaran();
    $orders ->product_id = $request['product_id'];
    $orders ->qty_order = $request['qty_order'];
    $orders ->total_bayar = $request['total'];
    $orders ->status_bayar = $request['status_bayar'];
    $orders->save();

    return redirect()->route('checkout',['id' => $orders->id]);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
