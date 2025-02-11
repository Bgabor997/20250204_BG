<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get()
    {
        $cars = Car::query()
            ->with("owner")
            ->get();

        return response()->json($cars);
    }

    public function createCar(CarRequest $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function updateCar(Car $car, CarRequest $request)
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
