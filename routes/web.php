<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
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
Route::get('/admin/{id}', [Admin::class, 'index']);
Route::get('/editpost/{id}', [Admin::class, 'editpost']);
Route::post('/updatepost/{id}', [Admin::class, 'updatepost']);
Route::delete('/deletepost/{id}', [Admin::class, 'deletepost']);
Route::get('/editemploi/{id}', [Admin::class, 'editemploi']);
Route::post('/updateemploi/{id}', [Admin::class, 'updateemploi']);
Route::delete('/deleteemploi/{id}', [Admin::class, 'deleteemploi']);
Route::get('/blog', function(){
    return view("blog");
});
Route::get('/', [blogcontroller::class, 'index']);
Route::get('/emploi/{id}', [blogcontroller::class, 'emploi']);
Route::get('/auteur/{id}', [blogcontroller::class, 'auteur']);
Route::get('/post/{id}', [blogcontroller::class, 'post']);
Route::get('/logout', function(){
    session()->flush();
    Auth::logout();
    return redirect('/');
});
Route::get('/createpost', [blogcontroller::class, 'createpost']);
Route::get('/createemploi', [blogcontroller::class, 'createemploi']);

Route::get('/posts', [blogcontroller::class, 'posts']);
Route::get('/emplois', [blogcontroller::class, 'emplois']);
Route::get('/login', [blogcontroller::class, 'login']);
Route::post('/storelogin', [blogcontroller::class, 'storelogin'])->name('storelogin');
Route::post('/storepost', [blogcontroller::class, 'storepost'])->name('storepost');
Route::post('/storeemploi', [blogcontroller::class, 'storeemploi'])->name('storeemploi');