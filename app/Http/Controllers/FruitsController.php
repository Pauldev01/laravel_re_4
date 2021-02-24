<?php

namespace App\Http\Controllers;

use App\Models\fruits;
use App\Models\User;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    public function index(){
        $datafruit = fruits::all();
        return view('fruit', compact('datafruit'));
    }
    public function show($id){
        $show=fruits::find($id);
        return view ('show', compact('show'));
    }
}
