<?php

namespace App\Http\Controllers;

use App\Models\legumes;
use Illuminate\Http\Request;

class LegumesController extends Controller
{
    public function index(){
        $legumedata=legumes::all();
        return view ('legume',compact('legumedata'));
    }
    public function show($id){
        $show=legumes::find($id);
        return view ('show', compact('show'));
    }
}
