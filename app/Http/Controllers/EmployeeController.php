<?php

namespace App\Http\Controllers;


use App\Vendor;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //employee list
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.addemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateEmployee(Request $request)
    {
        $employee = new Employee();

            $employee->name=$request->input('emp_name');
            $employee->email=$request->input('emp_email');
            $employee->password=$request->input('emp_pass');
            $employee->current_address=$request->input('emp_address');
            $employee->parmanent_address=$request->input('emp_par_address');
            $employee->contact_number=$request->input('emp_contact');
            $employee->type=$request->input('emp_type');
            
            $employee->vendor_id=session()->get('vendor.id');
         $employee->save();
            return "Employee added successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Employee profile details
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Employee profile edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Employee profile update
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete employee
    }
}
