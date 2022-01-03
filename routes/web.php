<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RegionController;
use App\Models\client;
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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
    
})->middleware(['auth'])->name('dashboard');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'company'], function () {
    Route::get('/', [CompanyController::class,'index'])->name('company');
    Route::get('/add',[CompanyController::class,'addCompanyView'] );
    Route::post('/save',[CompanyController::class,'addCompany'] );
    Route::get('/edit/{id}',[CompanyController::class,'editCompanyView']);
    Route::post('/update/{id}',[CompanyController::class,'updateCompany']);
    Route::get('/delete/{id}', [CompanyController::class,"deleteCompany"]);
    Route::get('/status/{id}', [CompanyController::class,'statusCompany']);
});

Route::group(['prefix' => 'client'], function () {
    Route::get('/', [ClientController::class,'index'])->name("client");
    Route::get('/add',[ClientController::class,'addClientView'] );
    Route::post('/save',[ClientController::class,'addClient'] );
    Route::get('/edit/{id}',[ClientController::class,'editClientView']);
    Route::post('/update/{id}',[ClientController::class,'updateClient']);
    Route::get('/delete/{id}', [ClientController::class,"deleteClient"]);
    Route::get('/status/{id}', [ClientController::class,'statusClient']);
});

Route::group(['prefix' => 'region'], function () {
    Route::get('/', [RegionController::class,'index'])->name("region");
    Route::get('/add',[RegionController::class,'addRegionView'] );
    Route::post('/save',[RegionController::class,'addRegion'] );
    Route::get('/edit/{id}',[RegionController::class,'editRegionView']);
    Route::post('/update/{id}',[RegionController::class,'updateRegion']);
    Route::get('/delete/{id}', [RegionController::class,"deleteRegion"]);
    Route::get('/status/{id}', [RegionController::class,'statusRegion']);
});

Route::group(['prefix' => 'driver'], function () {
    Route::get('/', [DriverController::class,'index'])->name('driver');
    Route::get('/add',[DriverController::class,'addDriverView'] );
    Route::post('/save',[DriverController::class,'addDriver'] );
    Route::get('/edit/{id}',[DriverController::class,'editDriverView']);
    Route::post('/update/{id}',[DriverController::class,'updateDriver']);
    Route::get('/delete/{id}', [DriverController::class,"deleteDriver"]);
    Route::get('/status/{id}', [DriverController::class,'statusDriver']);
});

