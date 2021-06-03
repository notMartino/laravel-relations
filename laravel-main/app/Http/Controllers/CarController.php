<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

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
}
