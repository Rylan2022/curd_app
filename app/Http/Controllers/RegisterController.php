<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('new.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required',
            'mobile' => 'required|max:15'
        ]);

        $latest = StudentModel::latest('id')->first();
        $nextId = $latest ? $latest->id + 1 : 1;
        $empId = 'EMP' . str_pad($nextId, 5, '0', STR_PAD_LEFT);

        StudentModel::create([
            'empId' => $empId,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
        ]);

        return redirect('student');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $studentData = StudentModel::latest()->get();
        return view('new.view', compact('studentData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $empId)
    {
        $studentData = StudentModel::find($empId);

        if (!is_null($studentData)) {
            $data = compact('studentData');
            return view('new.form')->with($data);
        } else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $empId)
    {
        $studentData = StudentModel::find($empId);
        $studentData->fullname = $request['fullname'];
        $studentData->email = $request['email'];
        $studentData->mobile = $request['mobile'];
        $studentData->gender = $request['gender'];

        $studentData->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $empId)
    {
        $studentData = StudentModel::find($empId);

        if (!is_null($studentData)) {
            $studentData->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }


    }
}
