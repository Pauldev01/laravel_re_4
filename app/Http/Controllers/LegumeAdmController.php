<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legumes;

class LegumeAdmController extends Controller
{
    public function index(){
        $legumedata=Legumes::all();
        $count = count($legumedata);

        return view ('legumeadm',compact('legumedata','count'));

    }
    public function show($id){
        $show=legumes::find($id);
        return view ('showadm', compact('show'));
    }
    public function destroy($id){
        $destroy = Legumes::find($id);
        $destroy->delete();
        return redirect('/legumeadm');
    }


}
