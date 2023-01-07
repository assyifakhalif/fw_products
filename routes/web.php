<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;
use App\Http\controllers\Barang;
use App\Http\Controllers\employee;
use App\Http\Controllers\ProductsController;
use App\Http\controllers\SupplierController;
use App\Http\Controllers\PurchaseController;

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

Route::get('/ langsung', function () { //cara mengaksesnya https://127.0.0.1:800/langsung
    echo "ini ditampilkan dari function routes langsung";
});

//routes langsung menampilkan file view
Route::view('/ini_route_view','welcome');

//routes untuk direct
Route::redirect('/ini_direct','/langsung');

//routes denan parameter data
Route::get('/route_param/{id}', function($id){
    echo 'ini data dari parameter route param : ' .$id; 
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/langsung', function(){
            echo "Ini ditampilkan dari function routes langsung";
    });

    Route::get('/group_route_satu', function(){
        echo "ini ditampilkan dari function routes langsung";
    });
});

//menghubungkan routes dengan controller
Route::get('/route_cont/{i}',[Barang::class, 'index']);

//UTS FW ASSYIFA KHALIF/2010631170058

Route::get('/view_employee/{id}',[employee::class, 'index']);
Route::get('/delete_employee/{id}',[employee::class, 'destroy']);
Route::get('/edit_employee/{id}',[employee::class, 'edit']);
Route::get('/simpan_test',[Barang::class, 'simpan_get']);
Route::get('/hapus_test/{id}',[Barang::class, 'hapus_get']);
Route::get('/update_test/{id}',[Barang::class, 'edit_get']);
Route::get('/view_test',[Barang::class, 'view_get']);
//end UTS
Route::group (['prefix' => 'products'], function(){
    Route::get('/create',[ProductsController::class, 'create']);
    Route::post('/store',[ProductsController::class, 'store']);
    Route::get('/',[ProductsController::class, 'index'])->name('list_products');
    Route::get('/delete/{id}',[ProductsController::class, 'destroy']);
    Route::get('/edit/{id}',[ProductsController::class, 'edit']);
    Route::post('/update/{id}',[ProductsController::class, 'update']);
});

Route::group(['prefix' => 'supplier'], function(){
    Route::get('/create',[SupplierController::class, 'create']);
    Route::post('/store',[SupplierController::class, 'store']);
    Route::get('/view',[SupplierController::class, 'index'])->name('view_supplier');
});

Route::group(["prefix" => "purchase"], function () {
    Route::get('/', [PurchaseController::class, 'index']);
    Route::get('/create', [PurchaseController::class, 'create']);
    Route::post('/store', [PurchaseController::class, 'store']);
});