<?php

namespace App\Http\Controllers;


use App\Vendor;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
   
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
   
    public function create()
    {

        return view('employee.addemployee');
    }

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

    
    public function show($id)
    {
        //Employee profile details
    }

    
    public function edit(Request $request)
    {
         $employee=Employee::find($request->session()->get('employee.id'));
        return view('employee.edit',['employee'=>$employee]);
    }


    public function update(Request $request)
{
        $employeeEmail = $request->input('emp_email');
        if($employeeEmail != $request->session()->get('employee.email') )
        {
             $this->validate($request,[
        
            'emp_email'=>'required|email|unique:employees,email'
            
            
        ]);
        }
       



         $employee=Employee::find($request->session()->get('employee.id'));

if($employee !=null){
            $employee->name=$request->input('emp_name');
            $employee->email=$request->input('emp_email');
            
            $employee->current_address=$request->input('emp_address');
            $employee->parmanent_address=$request->input('emp_par_address');
            $employee->contact_number=$request->input('emp_contact');
            $employee->type=$request->input('emp_type');
            $employee->Identity_number=$request->input('emp_ident');

$employee->save();
return "Profile Updated successfully.";

}else{
    return view('employee.edit',['employee'=>$employee, 'message'=>'not updated']);
}

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
