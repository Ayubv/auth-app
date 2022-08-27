<?php

use App\Models\Foder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/age-site', function () {
    return view('age');
});
Route::get('/noaccess', function () {
    return view('noaccess');
});




Route::get('/foders/index', [App\Http\Controllers\FoderController::class, 'index'])->name('home');
Route::get('/foders/create', [App\Http\Controllers\FoderController::class, 'createFoder']);
Route::post('/foders/store', [App\Http\Controllers\FoderController::class, 'storeFoder']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'ageCheck'],function(){
Route::get('/service',[App\Http\Controllers\PageController::class, 'servicePage']);
Route::get('/about',[App\Http\Controllers\PageController::class, 'aboutPage']);
Route::get('/movie',[App\Http\Controllers\PageController::class, 'moviePage']);
Route::get('/portfolio',[App\Http\Controllers\PageController::class, 'portfolioPage'])->withoutMiddleware('ageCheck');

});

Route::get('/foders/index',function(){
    $foder=Foder::where('user_id',Auth::user()->id)->get();
    return view('/foders/index',compact('foder'));
})->middleware('auth');
