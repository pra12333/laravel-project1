<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Hash;

class FileController extends Controller
{
    public function index(){
        return view('page.welcome');
    }

    public function view(){
        $getdata = Data::all();
        return view('page.view',compact('getdata'));
    }

    public function data(){
        return view('page.datainsert');
    }

    public function insert(Request $request){
        $data = new Data();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->save();
        return redirect('/dataform')->with('success', 'Data Inserted Successfully');
    }
}
