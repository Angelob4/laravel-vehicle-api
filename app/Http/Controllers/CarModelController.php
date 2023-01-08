<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Support\Facades\Validator;

class CarModelController extends Controller
{

    function getAllCarModels()
    {
        return response()->json(CarModel::get(), 200);
    }

    function getCarModelByIdWithBrand($id)
    {

        $validator = Validator::make(["id" => $id], [
            "id" => 'integer'
        ]);

        if (! $validator->fails()) {
            try {

                $carModel = CarModel::where('id', $id)
                    ->select('id as car_model_id', 'name as car_model_name', 'year_ref', 'brand_id')
                    ->with('brand')
                    ->first();

                if (!isset($carModel)) {
                    return response('NOT FOUND ', 404);
                }

                return response($carModel, 200);
            } catch (\Throwable $th) {
                return response('INTERNAL ERROR', 500);
            }
        }

        return response('BAD REQUEST', 400);
    }
}
