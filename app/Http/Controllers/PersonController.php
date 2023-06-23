<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonModel;

class PersonController extends Controller
{
    public function index()
    {
        $result = PersonModel::all();
        return view('IndexView',['result'=>$result]);
    }

    public function createPerson(Request $request)
    {
        PersonModel::create([
            'Name' => $request->Name,
            'LastName' => $request->LastName,
            'Address' => $request->Address,
            'Email' => $request->email,
            'PhoneNumber' => $request->PhoneNumber
        ]);

        return redirect()->back();
    }

    public function ShowView()
    {
        return view('createPersonView');
    }

    public function DeletePerson($id)
    {
       $result = PersonModel::where('id',$id)->first();

       $result->delete();
       return redirect()->back();
    }

    public function UbdatePerson($id,Request $request)
    {
       $result = PersonModel::where('id',$id)->first();
       $result ->ubdate([
        'Name' => $request->Name,
        'LastName' => $request->LastName,
        'Address' => $request->Address,
        'Email' => $request->email,
        'PhoneNumber' => $request->PhoneNumber
       ]);

       return redirect()->back();
    }
}
