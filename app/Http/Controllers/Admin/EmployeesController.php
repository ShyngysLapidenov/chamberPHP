<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employees;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employees::latest('id')->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employees();
        $employee->type = $request->type;
        $employee->fio = $request->fio;
        $employee->position = $request->position;
        $employee->company = $request->company;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/events', $filename);
            $employee->img = $filename;
        }
        $employee->save();
        return redirect()->route('admin.staffs.index');
    }

    public function edit($id)
    {
        $employee = Employees::find($id);
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employees::find($id);
        $employee->type = $request->type;
        $employee->fio = $request->fio;
        $employee->position = $request->position;
        $employee->company = $request->company;
        if($request->has('img')){
            //upload img
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('images/employees', $filename);
            $employee->img = $filename;
        }
        $employee->save();
        return redirect()->route('admin.staffs.index');
    }

    public function delete($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect()->route('admin.staffs.index');
    }
}
