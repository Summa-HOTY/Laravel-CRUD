<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cars.index')
            ->with('cars', Car::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'license_plate' => [
                'required',
                'string',
                'max:6'
            ],
            'owner_name' => [
                'required',
                'string',
                'max:75'
            ],
            'brand' => [
                'required',
                'string',
                'max:25'
            ],
            'color' => [
                'required',
                'string',
                'max:25'
            ],
            'construction_year' => [
                'required',
                'numeric'
            ],
        ]);

        Car::create([
            'license_plate' => $request->license_plate,
            'owner_name' => $request->owner_name,
            'brand' => $request->brand,
            'color' => $request->color,
            'construction_year' => $request->construction_year,
        ]);

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show')
            ->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit')
            ->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'license_plate' => [
                'required',
                'string',
                'max:6'
            ],
            'owner_name' => [
                'required',
                'string',
                'max:75'
            ],
            'brand' => [
                'required',
                'string',
                'max:25'
            ],
            'color' => [
                'required',
                'string',
                'max:25'
            ],
            'construction_year' => [
                'required',
                'numeric'
            ],
        ]);

        $car->license_plate = $request->license_plate;
        $car->owner_name = $request->owner_name;
        $car->brand = $request->brand;
        $car->color = $request->color;
        $car->construction_year = $request->construction_year;
        $car->save();

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
