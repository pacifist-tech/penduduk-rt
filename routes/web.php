<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('desa', ['title' => 'Penduduk', 'menus' => [['label' => 'Add', 'color' => 'green', 'href' => '/penduduk/add']]]);
});

Route::get('/desa', function () {
    return view('desa');
});
Route::get('/penduduk', function () {
    return view('penduduk');
});
Route::get('/penduduk/add', function () {
    return view('penduduk.add');
});

Route::post('/penduduk/add', function (Request $request) {
    $body = $request->body();
    return redirect('/');
});
Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');


Route::get('/kelahiran', function () {
    return view('kelahiran');
});

Route::get('/kematian', function () {
    return view('kematian');
});
Route::get('/pindah', function () {
    return view('pindah');
});
Route::get('/datang', function () {
    return view('datang');
});
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
