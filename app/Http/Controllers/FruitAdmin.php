<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits;

class FruitAdmController extends Controller
{
    public function index(){
        $fruitdata=Fruits::all();
        $count = count($fruitdata);
        return view ('fruitadm', compact('fruitdata','count'));
    }
    public function show($id){
        $show=Fruits::find($id);
        return view ('showadm', compact('show'));
    }
    public function destroy($id){
        $destroy = Fruits::find($id);
        $destroy->delete();
        return redirect('/fruitadm');
    }
}
