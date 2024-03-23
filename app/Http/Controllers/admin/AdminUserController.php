<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function show()
    {
        $users = User::orderBy('id', 'asc')->get();
        return view('admin.user.show', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        
        // Simpan data ke dalam database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'Professi' => $request->profesi,
            'no_telp' => $request->no_telp,
            'deskripsi' => $request->deskripsi,
            'cv' => $request->cv,
        ]);

        return redirect()->route('admin_user_show')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
{
    $users = User::find($id);

    if (!$users) {
        return redirect()->route('admin_user_show')->with('error', 'User not found');
    }

    return view('admin.user.edit', compact('users'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'profesi' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required',
            'cv' => 'required',
        ]);

        // Temukan data berdasarkan ID dan perbarui
        $users = User::find($id);
        $users->update($request->all());

        return redirect()->route('admin_user_show')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin_user_show')->with('success', 'Data berhasil dihapus');
    }

}
