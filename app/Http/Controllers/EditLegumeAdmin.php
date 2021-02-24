<?php

namespace App\Http\Controllers;

use App\Models\Legumes;
use Illuminate\Http\Request;

class EditLegumeAdmin extends Controller
{
    public function edit(Legumes $id){
        $legumedata=Legumes::find($id);
        return view('editlegumeadm', compact('legumedata'));
    }
    public function update($id, Request $request){
        $legumedata=Legumes::find($id);
        $legumedata->name= $request->name;
        $legumedata->qantité= $request->qantité;
        $legumedata->save();
        return redirect('/legume-showadm/'.$legumedata->id);
    }
}