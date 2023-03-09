<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        for ($bulan = 1; $bulan < 13; $bulan++) {
            $chartpost = collect(DB::SELECT("SELECT count(user_id) as jumlah from posts where month(created_at)= '$bulan'"))->first();
            $jumlah_posts = $chartpost->jumlah;
        }
        return view(
            'dashboard.index',
            [
                'user' => User::where('id', Auth::user()->id)->first(),
                'jumlah_posts' => $jumlah_posts
            ]
        );
    }
    public function show()
    {
        //Menampilkan Data
        for ($bulan = 1; $bulan < 13; $bulan++) {
            $chartpost = collect(DB::SELECT("SELECT count(user_id) as jumlah from posts where month(created_at)= '$bulan'"))->first();
            $jumlah_posts = $chartpost->jumlah;
        }
        return view(
            'dashboard.index',
            [
                'user' => User::where('id', Auth::user()->id)->first(),
                'jumlah_posts' => $jumlah_posts
            ]
        );
    }
}
