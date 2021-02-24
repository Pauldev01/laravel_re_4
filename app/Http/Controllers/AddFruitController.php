<?php

namespace App\Http\Controllers;

use App\Models\Fruits;
use Illuminate\Http\Request;

class AddFruitController extends Controller
{
    public function index(){
        return view('addfruit');
    }
    public function store(Request $request){
        $store = new Fruits;
        $store->name = $request->name;
        $store->qantité = $request->qantité;
        $store->save();
        return redirect()->back();
    }
}
