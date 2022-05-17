<?php
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patients', [App\Http\Controllers\PatientController::class, 'index'])->name('patients');
Route::resource('patients','App\Http\Controllers\PatientController');
Route::post('index', [App\Http\Controllers\PatientController::class, 'destroy'])->name('destroy');
use App\Http\Controllers\RendezvousController;
//fullcalender
Route::get('/rendez-vous',[RendezvousController::class,'index']);
Route::get('/rendez-vous/add',[RendezvousController::class,'add']);
Route::post('/rendez-vous/create',[RendezvousController::class,'create']);
Route::post('/rendez-vous/update',[RendezvousController::class,'update']);
Route::post('/rendez-vous/delete',[RendezvousController::class,'destroy']);
