<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits;
use App\Models\Legumes;

class HomeController extends Controller
{
    public function index(){
        $fruitdata=Fruits::all();
        $legumedata=Legumes::all();
        return view ('welcome',compact('fruitdata','legumedata'));
    }
}
