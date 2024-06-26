<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::all();
        return view('Admin.admin',  compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_admin'=>'required',
                'jk_admin'=>'required',
                'nohp_admin'=>'required|numeric',
                'email_admin'=>'required|unique:admins',
                'password_admin'=>'required',
                'alamat_admin'=>'required',
                'foto_admin'=>'required|mimes:jpg,png,gif,jpeg|image|max:3072',
                'jabatan_admin'=>'required',
            ],

            [
                'nama_admin.required' => 'Nama Karyawan wajib diisi',
                'jk_admin.required' => 'Jenis Kelamin wajib diisi',
                'nohp_admin.required' => 'Nomor Handphone wajib diisi ',
                'email_admin.required' => 'Email wajib diisi',
                'email_admin.unique' => 'Email sudah terpakai',
                'password_admin.required' => 'Password wajib diisi',
                'alamat_admin.required' => 'Alamat wajib diisi',
                'foto_admin.required' => 'Foto wajib diisi',
                'foto_admin.mimes' => 'Foto wajib dalam format jpg,png,gif,jpeg',
                'foto_admin.image' => 'Foto wajib diisi',
                'foto_admin.max' => 'Foto hanya mencapai 3mb',
                'jabatan_admin.required' => 'Jabatan wajib diisi',
            ]
        );

        $path = $request->file('foto_admin')->store('public/uploads');

        $admin = new Admin();
        $admin ->nama_admin = $request['nama_admin'];
        $admin ->jk_admin = $request['jk_admin'];
        $admin ->nohp_admin = $request['nohp_admin'];
        $admin ->email_admin = $request['email_admin'];
        $admin ->password_admin = Hash::make($request['password_admin']);
        $admin ->alamat_admin = $request['alamat_admin'];
        $admin ->foto_admin = basename($path);
        $admin ->jabatan_admin = $request['jabatan_admin'];
        $admin ->save();

        return redirect('/admin');
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
        $admin = Admin::find($id);
        return view('Admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
               'nama_admin'=>'required',
                'jk_admin'=>'required',
                'nohp_admin'=>'required|numeric',
                'email_admin'=>'required',
                'alamat_admin'=>'required',
                'foto_admin'=>'mimes:jpg,png,gif,jpeg|image|max:3072',
                'jabatan_admin'=>'required',
            ]
        );

        if ($request->file('foto_admin')){
            if($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $path = $request->file('foto_admin')->store('public/uploads');
        } else {
            $path = $request->fotolama;
        }

        $admin = Admin::find($id);
        $admin ->nama_admin = $request['nama_admin'];
        $admin ->jk_admin = $request['jk_admin'];
        $admin ->nohp_admin = $request['nohp_admin'];
        $admin ->email_admin = $request['email_admin'];
        $admin ->alamat_admin = $request['alamat_admin'];
        $admin ->foto_admin = basename($path);
        $admin ->jabatan_admin = $request['jabatan_admin'];
        $admin ->save();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::destroy('id', $id);
        return redirect('/admin');
    }
}
