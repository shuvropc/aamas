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
 public function employeeLogin(){
        return view('employee.login');
    }

    public function login(Request $request){



        

        $email=$request->input('email');
        $password=$request->input('password');


        $employee = Employee::where([
            ['email', '=', $email]
        ])->first();

        if($employee){
            if(Hash::check($password,  $employee->password)) {
                $employee->password=null;
                session(['employee' => $employee]);
                return "Email  ".$request->session()->get('employee.email')."  Logged in ".$request->session()->get('employee.type');
            }else{
                return view('employee.login',["errorMessage"=>"Email or Password doesn't match"]);
            }
        }else{
            return view('employee.login');
        }




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
        $employeeType=session()->get('employee.type');

        if($employeeType=="HR"){

             $this->validate($request,[
            'emp_email'=>'required|email|unique:employees,email',
            'emp_ident'=>'required|unique:employees,Identity_number',
            'emp_contact'=>'unique:employees,contact_number'
            
        ]);
            
        $employee = new Employee();

            $employee->name=$request->input('emp_name');
            $employee->email=$request->input('emp_email');
            $employee->password=Hash::make($request->input('emp_pass'));
            $employee->current_address=$request->input('emp_address');
            $employee->parmanent_address=$request->input('emp_par_address');
            $employee->contact_number=$request->input('emp_contact');
            $employee->type=$request->input('emp_type');
            $employee->Identity_number=$request->input('emp_ident');
            
            
            $employee->vendor_id=session()->get('employee.vendor_id');
            $employee->referenced_by=session()->get('employee.id');

            //emp_ident
         $employee->save();
            return "Employee added successfully";

    }else{
            
            return view('employee.addemployee',["message"=>"Sorry You are not authorized to add employee!"]);
        }
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


    public function logOut(Request $request){
        session()->forget('employee');
        return "Employee Logged out ";
    }
}
