<?php

namespace App\Http\Controllers;

use App\Models\PatientModel;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    public function create(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birthdate' => 'required|date',
        ]);

        if(!$validation) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data = $request->all();

        PatientModel::create($data);

        return redirect('/')->with('success', 'Patient added');
    }

    public function store()
    {
        $patientsx = PatientModel::select('id','name','gender','birthdate')->get();

        return view('patients.index', compact('patientsx'));
    }
}
