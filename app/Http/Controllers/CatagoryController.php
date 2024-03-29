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
            'name'=>'required'
        ]);

     return redirect()->route('admin.dashboard');
    }
}
