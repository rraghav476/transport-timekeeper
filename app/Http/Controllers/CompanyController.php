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
        // dd($request);
        $company = new Company;
        $company->company_name = $request->company_name;
        $company->save();
        return redirect()->route('company', app()->getLocale())->with('success', 'Company Successfully Added.');
    }

    public function editCompanyView($id){
        $company =  Company::find($id);
        return view('company.edit',["company"=>$company]);
    }

    public function updateCompany(Request $request,$id){
        // dd($request);
        Company::where("id", $id)->update(["company_name" => $request->input("company_name")]);
        return redirect()->route('company', app()->getLocale())->with('success', 'Company Successfully Updated.');
    }

    public function statusCompany($id){
        $company =  Company::find($id);
        
        $company->status = $company->status == 1 ? 0 : 1;
        $data = $company->save();
        return redirect()->route('company', app()->getLocale())->with('success', 'Company Status Successfully Updated.');
    }

    public function deleteCompany($id){
        Company::where("id", $id)->delete();
        return redirect()->route('company', app()->getLocale())->with('success', 'Company Successfully Deleted.');
    }

}
