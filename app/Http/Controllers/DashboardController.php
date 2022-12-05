<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        for ($bulan = 1; $bulan < 13; $bulan++) {
            $chartpost = collect(DB::SELECT("SELECT count(id) as jumlah from posts where month(created_at)= '$bulan'"))->first();
            $jumlah_posts = $chartpost->jumlah;
        }
        return view(
            'dashboard.index',
            compact('jumlah_posts')
        );
    }
}
