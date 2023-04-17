<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaContoller;

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
    return view('welcome');
});



//Route Basic
// Route::get('/routing', function() {
//     return view('routing');
// });
// Route::view('/test1', 'test1');

Route::view('/test', 'test');

Route::get('/siswa', [SiswaContoller::class, 'index']);
Route::get('/siswa/create', [SiswaContoller::class, 'create']);
Route::post('/siswa/store', [SiswaContoller::class, 'store']);
Route::get('/siswa/{id}/edit', [SiswaContoller::class, 'edit']);
Route::put('/siswa/{id}', [SiswaContoller::class, 'update']);
Route::delete('/siswa/{id}', [SiswaContoller::class, 'destroy']);