<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Product::all();
        return view('Product.product',  compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'fotogamesadmin'=>'required|mimes:jpg,png,gif,jpeg|image|max:3072',
                'gamesadmin'=>'required',
                'price'=>'required',
                'stock'=>'required',
                'supplier'=>'required',
                'status'=>'required',
            ],

            [
                'fotogamesadmin.required' => 'Foto wajib diisi',
                'fotogamesadmin.mimes' => 'Foto wajib dalam format jpg,png,gif,jpeg',
                'fotogamesadmin.image' => 'Foto wajib diisi',
                'fotogamesadmin.max' => 'Foto hanya mencapai 3mb',
                'price.required' => 'Harga wajib diisi ',
                'stock.required' => 'Number of stock wajib diisi',
                'supplier.required' => 'Status wajib diisi',
                'status.required' => 'Status wajib diisi',
            ]
        );

        $path = $request->file('fotogamesadmin')->store('public/uploads');

        $games = new Product();
        $games ->fotogamesadmin = basename($path);
        $games ->gamesadmin = $request['gamesadmin'];
        $games ->price = $request['price'];
        $games ->stock = $request['stock'];
        $games ->supplier = $request['supplier'];
        $games ->status = $request['status'];
        $games ->save();

        return redirect('/product');
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
        $games = Product::find($id);
        return view('Product.edit', compact('games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'fotogamesadmin'=>'mimes:jpg,png,gif,jpeg|image|max:3072',
                'gamesadmin'=>'required',
                'price'=>'required',
                'stock'=>'required',
                'supplier'=>'required',
                'status'=>'required',
            ],

        );

        if ($request->file('fotogamesadmin')){
            if($request->fotogamesadm) {
                Storage::delete($request->fotogamesadm);
            }
            $path = $request->file('fotogamesadmin')->store('public/uploads');
        } else {
            $path = $request->fotogamesadm;
        }

        $games = Product::find($id);
        $games ->fotogamesadmin = basename($path);
        $games ->gamesadmin = $request['gamesadmin'];
        $games ->price = $request['price'];
        $games ->stock = $request['stock'];
        $games ->supplier = $request['supplier'];
        $games ->status = $request['status'];
        $games ->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy('id', $id);
        return redirect('/product');
    }
}
