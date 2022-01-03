<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        $drivers = User::get();
        return view("Driver.index",["drivers"=>$drivers]);
    }

    public function addDriverView(){
        return view("Driver.add");
    }

    public function addDriver(Request $request){
        dd($request);
    }

    public function editDriverView(){
        return view("Driver.edit");
    }

    public function updateDriver(Request $request){
        dd($request);
    }

    public  function statusDriver($id)
    {
        dd("togal status of id this.",$id);
    }

    public function deleteDriver($id){
        dd("softdelete or harddelete ask");
    }
}
