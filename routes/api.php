<?php

use App\Http\Controllers\apiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** Vehicle API ROUTE */
Route::middleware('auth:sanctum')->group(function(){

    Route::prefix('car-model')->group(function(){
        Route::get('/', [CarModelController::class, 'getAllCarModels']);
        Route::get('/{id}/brands', [CarModelController::class, 'getCarModelByIdWithBrand']);
        // Route::get('/{id}', [CarModelController::class, 'getById']);

    });

    Route::get('/vehicle/brand/{brand_id}', [VehicleController::class, 'getAllVehicleModelsByBrandID'])->name('vehicle.getModels');
    Route::get('/vehicle/usercar/{user_car}', [UserCarsController::class, 'getUserCarsByID'])->name('vehicle.userCar');
});

Route::post('/login', [apiController::class, 'login']);
Route::post('/create', [apiController::class, 'create']);
