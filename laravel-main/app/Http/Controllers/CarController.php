<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Brand;
use App\Pilot;

class CarController extends Controller
{
    public function carView(){ 
        $cars = Car::all();
        
        return view('pages.index', compact('cars'));
    }
    public function carDetailsView($id){
        $car = Car::findOrFail($id);

        return view('pages.carDetails', compact('car'));
    }

    public function createCarView(){
        $brands = Brand::all();
        $pilots = Pilot::all();
        return view('pages.createCar', compact('brands', 'pilots'));
    }

    public function storeCar(Request $request){
        // dd($request -> all());
        $validated = $request -> validate([
            'name' => 'required|string|max:64|min:2',
            'model' => 'required|string|max:64|min:2',
            'kw' => 'required|numeric|max:500|min:40',
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car = Car::make($validated);
        $car-> brand() -> associate($brand);
        $car -> save();

        $car -> pilots() -> attach($request -> get ('pilot_id'));
        $car -> save();
        
        return redirect() -> route('carDetailsLink', $car -> id);
    }
}
