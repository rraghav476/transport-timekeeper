<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $region = Region::get();
        return view("Region.index",["regions"=>$region]);
    }

    public function addRegionView(){
        return view("Region.add");
    }

    public function addRegion(Request $request){
        dd($request);
    }

    public function editRegionView(){
        return view("Region.edit");
    }

    public function updateRegion(Request $request){
        dd($request);
    }

    public  function statusRegion($id)
    {
        dd("togal status of id this.",$id);
    }

    public function deleteRegion($id){
        dd("softdelete or harddelete ask");
    }
}
