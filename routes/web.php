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
    Route::get('/add',[CompanyController::class,'addCompanyView'])->name("company.add");
    Route::post('/save',[CompanyController::class,'addCompany'])->name("company.save");
    Route::get('/edit/{id}',[CompanyController::class,'editCompanyView'])->name('company.edit');
    Route::post('/update/{id}',[CompanyController::class,'updateCompany'])->name('company.update');
    Route::get('/delete/{id}', [CompanyController::class,"deleteCompany"])->name('company.delete');
    Route::get('/status/{id}', [CompanyController::class,'statusCompany'])->name('company.status');
});

Route::group(['prefix' => 'client'], function () {
    Route::get('/', [ClientController::class,'index'])->name("client");
    Route::get('/add',[ClientController::class,'addClientView'])->name("client.add");
    Route::post('/save',[ClientController::class,'addClient'] )->name("client.save");
    Route::get('/edit/{id}',[ClientController::class,'editClientView'])->name("client.edit");
    Route::post('/update/{id}',[ClientController::class,'updateClient']);
    Route::get('/delete/{id}', [ClientController::class,"deleteClient"])->name("client.delete");
    Route::get('/status/{id}', [ClientController::class,'statusClient'])->name("client.status");
});

Route::group(['prefix' => 'region'], function () {
    Route::get('/', [RegionController::class,'index'])->name("region");
    Route::get('/add',[RegionController::class,'addRegionView'])->name("region.add");
    Route::post('/save',[RegionController::class,'addRegion'] )->name("region.save");
    Route::get('/edit/{id}',[RegionController::class,'editRegionView'])->name('region.edit');
    Route::post('/update/{id}',[RegionController::class,'updateRegion'])->name('region.update');
    Route::get('/delete/{id}', [RegionController::class,"deleteRegion"])->name('region.delete');
    Route::get('/status/{id}', [RegionController::class,'statusRegion'])->name('region.status');
});

Route::group(['prefix' => 'driver'], function () {
    Route::get('/', [DriverController::class,'index'])->name('driver');
    Route::get('/add',[DriverController::class,'addDriverView'] )->name('driver.add');
    Route::post('/save',[DriverController::class,'addDriver'] )->name('driver.save');
    Route::get('/edit/{id}',[DriverController::class,'editDriverView'])->name('driver.edit');
    Route::post('/update/{id}',[DriverController::class,'updateDriver'])->name('driver.update');
    Route::get('/delete/{id}', [DriverController::class,"deleteDriver"])->name('driver.delete');
    Route::get('/status/{id}', [DriverController::class,'statusDriver'])->name('driver.status');
});

