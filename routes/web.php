<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\InventoryController;


Auth::routes();

Route::get('/', function (){
    return view('auth.login');
} );

   

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('customAuth');
 
    

    // Route::get('/mainInventory', function () {
    //     return view('inventory');
    // })->middleware('customAuth');

    // Route::get('/warehouse', function () {
    //     return view('warehouse');
    // })->middleware('customAuth');

 
    
    //********************************All-orders Page Routes ******************** */
    Route::get('/all-orders', [OrderController::class , 'getAlldata'])->middleware('customAuth');
    
    Route::get('/pending-orders', [OrderController::class , 'getPendingdata'])->middleware('customAuth');
    
    Route::get('/returned-orders', [OrderController::class , 'getReturneddata'])->middleware('customAuth');
    
    Route::get('/canceled-orders',  [OrderController::class , 'getCanceleddata'])->middleware('customAuth');
    
    Route::get('/sold-orders', [OrderController::class , 'getSolddata'])->middleware('customAuth');
    
    Route::POST('/submit-data', [OrderController::class , 'save_data'])->middleware('customAuth');
    
    Route::GET('/see-details/{id}', [OrderController::class , 'getorderdetail'])->middleware('customAuth');

    Route::GET('/updateStatus/{id}', [OrderController::class , 'updateStatusview'])->middleware('customAuth');

    Route::POST('/updateStatus/{id}', [OrderController::class , 'updateStatus'])->middleware('customAuth');

    Route::GET('/deleteOrder/{id}', [OrderController::class , 'deleteOrder'])->middleware('customAuth');


    //********************************Retailers Page Routes ******************** */
    Route::get('/retailers', [RetailerController::class , 'getAllRetailers'])->middleware('customAuth');
    
    Route::POST('/addretailer', [RetailerController::class , 'saveRetailer'])->middleware('customAuth');

    Route::GET('/updateretailer/{id}', [RetailerController::class , 'updateRetailer'])->middleware('customAuth');

    Route::POST('/updateretailer/{id}', [RetailerController::class , 'updateRetailerSubmit'])->middleware('customAuth');

    Route::GET('/deleteretailer/{id}', [RetailerController::class , 'deleteRetailer'])->middleware('customAuth');


  //********************************Warehouse Page Routes ******************** */
    Route::GET('/warehouse', [WarehouseController::class , 'getWarehouse'])->middleware('customAuth');

    Route::POST('/addwarehouse', [WarehouseController::class , 'saveWarehouse'])->middleware('customAuth');

    Route::GET('/updatewarehouse/{id}', [WarehouseController::class , 'updateWarehouse'])->middleware('customAuth');

    Route::POST('/updatewarehouse/{id}', [WarehouseController::class , 'updateWarehouseSubmit'])->middleware('customAuth');

    Route::GET('/deletewarehouse/{id}', [WarehouseController::class , 'deleteWarehouse'])->middleware('customAuth');



    //********************************Warehouse Page Routes ******************** */
    Route::GET('/mainInventory', [InventoryController::class , 'getInventories'])->middleware('customAuth');

    Route::POST('/addinventory', [InventoryController::class , 'saveInventories'])->middleware('customAuth');

    Route::GET('/updateinventory/{id}', [InventoryController::class , 'updateInventory'])->middleware('customAuth');

    Route::POST('/updateinventory/{id}', [InventoryController::class , 'updateInventorySubmit'])->middleware('customAuth');

    Route::GET('/deleteinventory/{id}', [InventoryController::class , 'deleteInventory'])->middleware('customAuth');