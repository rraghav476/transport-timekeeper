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
        $region = new Region;
        $region->region_name = $request->input("region_name");
        $region->save();
        return redirect()->route('region', app()->getLocale())->with('success', 'Region Successfully Added.');   
    }

    public function editRegionView($id){
        $region =  Region::find($id);
        return view('region.edit',["region"=>$region]);
    }

    public function updateRegion(Request $request){
        Region::where("id", $request->id)->update(["region_name" => $request->input("region_name")]);
        return redirect()->route('region', app()->getLocale())->with('success', 'Region Successfully Updated.');   
    }

    public  function statusRegion($id)
    {
        $region =  Region::find($id);
        $region->status = $region->status ==1?0:1;
        $data = $region->save();
        return redirect()->route('region', app()->getLocale())->with('success', 'Region Status Successfully Updated.');   
    }

    public function deleteRegion($id){
        Region::where("id", $id)->delete();
        return redirect()->route('region', app()->getLocale())->with('success', 'Region Successfully Deleted.');   
    }
}
