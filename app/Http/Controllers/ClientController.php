<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $client = client::get();
        return view("client.index",["clients" => $client]);
    }

    public function addClientView(){
        return view("client.add");
    }

    public function addClient(Request $request){
        // dd($request);
        $client = new Client;
        $client->client_name = $request->input("client_name");
        $client->save();
        return redirect()->route('client', app()->getLocale())->with('success', 'Client Successfully Added.');
    }

    public function editClientView($id){
        $client =  Client::find($id);
        return view('client.edit',["client"=>$client]);
    }

    public function updateClient(Request $request,$id){
        // dd($request);
        Client::where("id", $id)->update(["client_name" => $request->client_name]);
        return redirect()->route('client', app()->getLocale())->with('success', 'Client Successfully Updated.');
    }

    public  function statusClient($id)
    {
        $client =  Client::find($id);
        $client->status = $client->status == 1 ? 0 : 1;
        $client->save();
        return redirect()->route('client', app()->getLocale())->with('success', 'Client Status Successfully Updated.');   
    }

    public function deleteClient($id){
        Client::where("id", $id)->delete();
        return redirect()->route('client', app()->getLocale())->with('success', 'Client Successfully Deleted.');   
    }


}
