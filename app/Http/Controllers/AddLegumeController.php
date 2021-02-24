<?php

namespace App\Http\Controllers;

use App\Models\Legumes;
use Illuminate\Http\Request;

class AddLegumeController extends Controller
{
    public function index(){
        return view('addlegume');
    }
    public function store(Request $request){
        $store = new Legumes();
        $store->name = $request->name;
        $store->qantité = $request->qantité;
        $store->save();
        return redirect()->back();
    }
}
