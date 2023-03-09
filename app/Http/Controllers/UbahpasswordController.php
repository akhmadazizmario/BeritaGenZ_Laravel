<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UbahpasswordController extends Controller
{
    ////menampilkan profil 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //Menampilkan Data
        return view('dashboard.ubahpassword', [
            'user' => User::where('id', Auth::user()->id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $post
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //---Menampilkan Data ------//
        return view('dashboard.ubahpassword', [
            'user' => User::where('id', Auth::user()->id)->first()
        ]);
    }

    public function update(Request $request, User $user)
    {
        //-- Eksekusi update ---//
        $validatedData = $request->validate([
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        User::where('id', Auth::user()->id)->first()->update($validatedData);
        return redirect('/profil')->with('success', 'profil anda berhasil diupdate');
    }
}
