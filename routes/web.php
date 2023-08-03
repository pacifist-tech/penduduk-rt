<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\PostController;
use App\Models\Penduduk;
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

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return redirect('/penduduk');
    });
    
    Route::get('/desa', function () {
        return view('desa');
    });
    
    Route::get('/resume', [PdfGeneratorController::class, 'index']);

    Route::get('/penduduk', function () {
        $penduduk_real = Penduduk::all();
        // echo $penduduk_real;

        $penduduk_dummy = [['nik' => '3201010101231', 'name' => 'Ahmad Sobari', 'address' => 'Jl. Tulung Agung no 6', 'jenis_kelamin' => 'Laki-Laki'], ['nik' => '3201010101233', 'name' => 'Kevin Sanjaya', 'address' => 'Jl. Tulung Agung no 7', 'jenis_kelamin' => 'Laki-Laki']];
        return view('desa', ['data' => $penduduk_real, 'title' => 'Penduduk', 'menus' => [['label' => 'Tambah', 'color' => 'green', 'href' => '/penduduk/add']]]);
    })->name('penduduk');
    Route::get('/penduduk/add', function () {
        return view('penduduk.add', ["isEdit"=> false, "data"=> []]);
    });

    Route::get('/penduduk/edit/{id}', function ($id) {
        $penduduk = Penduduk::find($id);
        return view('penduduk.add', ["data"=> $penduduk, 'isEdit'=> true]);
    });

    Route::put('/penduduk/edit/{id}', [FormController::class, 'update'])->name('penduduk.edit');

    Route::get('/kelahiran/add', function () {
        return view('kelahiran.kelahiran-add');
    });
    
    Route::get('/kematian/add', function () {
        return view('kematian.kematian-add');
    });
    Route::get('/pindah/add', function () {
        return view('pindah.add');
    });
    
    Route::post('/penduduk/add', function (Request $request) {
        $body = $request->body();
        return redirect('/');
    });
    

    Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');
    
    Route::get('/kelahiran', function () {
        return view('kelahiran', ['title' => 'Kelahiran', 'menus' => [['label' => 'Add', 'color' => 'green', 'href' => '/kelahiran/add']]]);
    });
    
    Route::get('/kematian', function () {
        return view('kematian.index', ['title' => 'Kematian', 'menus' => [['label' => 'Add', 'color' => 'green', 'href' => '/kematian/add']]]);
    });
    
    Route::get('/pindah', function () {
        return view('pindah.index', ['title' => 'Pindah', 'menus' => [['label' => 'Add', 'color' => 'green', 'href' => '/pindah/add']]]);
    });
    Route::get('/datang', function () {
        return view('datang');
    });
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post/{slug}', [PostController::class, 'show']);

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

});


Route::get('/login', function () {
    return view('login');
})->name('login');

// ->name('login-form.submit');

Route::get('/register', function () {
    return view('register');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
