<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\category;  # model category
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);


//-- Halaman About ----//
Route::get('/about', function () {
    return view('about', [
        "title" => 'about',
        "active" => 'about',
        'name' => 'BeritaGenZ',
    ]);
});

//--- Halaman Post---//
Route::get('/posts', [PostController::class, 'index']); //--memanggil controller posts dengan parameter index--//
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //--memanggil controller posts dengan parameter show---//
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => category::all(), # satu kategori mempunyai banyak post atau one to many
    ]);
});

//--- Login Menu-----//                             //--name('login')-- untuk menghindari bajak akun seperti /dashboard //
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //index adalah parameter di Logincontroller
Route::post('/login', [LoginController::class, 'authenticate']); //auth adalah parameter di Logincontroller
Route::post('/logout', [LoginController::class, 'logout']); //auth adalah parameter di Logincontroller

//---register-----//
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); //index adalah parameter di Registercontroller
Route::post('/register', [RegisterController::class, 'store']); //store adalah parameter di Registercontroller

//---dashboard---//
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth'); //midleware fungsinya untuk hak akses


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
