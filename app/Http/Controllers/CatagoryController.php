<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index(){
        $catagories = Catagory::all();
        return view('admin.catagory',['catagories'=>$catagories]);
    }
    public function create(Request $request){
        $request->validate([
        'catagory'=>'required'
        ]);
        $catagory = new Catagory();
        $catagory->name = $request->catagory;
        $catagory->save();
     return redirect()->route('admin.dashboard.catagories');
    }
    public function destroy(Catagory $catagory){

        $catagory->delete();
        return redirect()->route('admin.dashboard.catagories');
    }
}
