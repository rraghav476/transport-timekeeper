<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::get();
        return view("company.index",["company"=>$company]);
    }

    public function addCompanyView(){
        return view("company.add");
    }

    public function addCompany(Request $request){
        dd($request);
    }

    public function editCompanyView($id){
        $company = Company::find($id);
        return view("company.edit");
    }

    public function updateCompany(Request $request,$id){
        dd($request);
    }

    public function statusCompany($id){
        dd("toggle status");
    }

    public function deleteCompany($id){
        dd("delete id form here");
    }

}
