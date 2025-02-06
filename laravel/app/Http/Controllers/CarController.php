<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get()
    {
        $cars = Car::query()
            ->get();

        return response()->json($cars);
    }

    public function createCar(Request $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function updateCar(Car $car, Request $request)
    {
        $car->update($request->all());

        return response()->json($car);
    }

    public function deleteCar(Car $car)
    {
        $car->delete();

        return response()->json("", 204);
    }
}
