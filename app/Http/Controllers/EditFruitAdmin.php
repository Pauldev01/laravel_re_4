<?php

namespace App\Http\Controllers;

use App\Models\Fruits;
use Illuminate\Http\Request;

class EditFruitAdmin extends Controller
{
    public function edit($id){
        $fruitdata=Fruits::find($id);
        return view('editfruitadm', compact('fruitdata'));
    }
    public function update($id, Request $request){
        $fruitdata=Fruits::find($id);
        $fruitdata->name= $request->name;
        $fruitdata->qantité= $request->qantité;
        $fruitdata->save();
        return redirect('/fruit-showadm/'.$fruitdata->id);
    }
}
