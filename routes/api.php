<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**public Routes */
Route::post('user/create', [apiController::class, 'create']);

/** Vehicle API ROUTE */
Route::middleware('auth:sanctum')->group(function(){

    /** USERS ROUTE */
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    /** Car Models API ROUTE */
    Route::prefix('car-models')->group(function(){
        Route::get('/', [CarModelController::class, 'getAllCarModels']);
        Route::get('/{id}', [CarModelController::class, 'getById']);
        Route::get('/{id}/brands', [CarModelController::class, 'getCarModelByIdWithBrand']);
    });

    Route::prefix('brands')->group(function(){
        Route::get('/', [BrandController::class, 'getAll']);
        Route::get('/{id}/car-models', [CarModelController::class, 'getCarModelByBrandId']);
    });

    /** VEHICLES ROUTE */
    Route::prefix('vehicles')->group(function(){
        // Route::get('/brands/{brand_id}', [VehicleController::class, 'getAllVehicleModelsByBrandID'])->name('vehicle.getModels');
        // Route::get('/usercar/{user_car}', [UserCarsController::class, 'getUserCarsByID'])->name('vehicle.userCar');
    });

});


