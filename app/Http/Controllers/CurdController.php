<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurdModel;

class CurdController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|max:100',
            'password' => 'required|max:255',
            'mobile' => 'required|max:15',
            'gender' => 'required',
            'joining' => 'required',

        ]);

        $latest = CurdModel::latest('id')->first();
        $nextId = $latest ? $latest->id + 1 : 1;
        $empId = 'EMP' . str_pad($nextId, 5, '0', STR_PAD_LEFT);

        CurdModel::create([
            'empId' => $empId,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'joining' => $request->joining,
        ]);

        return redirect('/view');


    }

    public function view()
    {
        $userdata = CurdModel::latest()->get();
        return view('view', compact('userdata'));

    }

    public function edit_employee($empId)
    {
        $employee = CurdModel::find($empId);

        if (!is_null($employee)) {
            $data = compact('employee');
            return view('form')->with($data);
        } else {
            return redirect('view');
        }
    }

    public function update_employee(Request $request, $empId)
    {
        $employee = CurdModel::find($empId);
        $employee->fullname = $request['fullname'];
        $employee->email = $request['email'];
        $employee->mobile = $request['mobile'];
        $employee->gender = $request['gender'];
        $employee->joining = $request['joining'];

        $employee->save();

        return redirect('view');
    }

        public function delete_employee(Request $request, $empId)
    {
        $employee = CurdModel::find($empId);

        if(!is_null($employee)){
            $employee->delete();
            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }
}
