<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonModel;

class PersonController extends Controller
{
    public function index()
    {
        $result = PersonModel::all();
        return view('IndexView', ['result' => $result]);
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

    public function EditeView($id)
    {
        $result = PersonModel::where('id', $id)->first();
        return view('UbdatePersonView')->with('result', $result);
    }

    public function DeletePerson($id)
    {
        $result = PersonModel::where('id', $id)->first();

        $result->delete();
        return redirect()->back();
    }

    public function UpdatePerson($id, Request $request)
    {
        $result = PersonModel::where('id', $id)->first();
        $result->update([
            'Name' => $request->Name,
            'LastName' => $request->LastName,
            'Address' => $request->Address,
            'Email' => $request->email,
            'PhoneNumber' => $request->PhoneNumber,
        ]);

        return redirect()->back();
    }
    public function show($id)
    {
        $result = PersonModel::where('id', $id)->first();
        return view('showPerson',compact('result'));
    }
}
