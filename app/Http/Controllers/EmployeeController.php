<?php

namespace App\Http\Controllers;

use File;
use App\Vendor;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
   
    public function HRindex(Request $request)
    {
//            $employee=$request->session()->get('employee');
//            if($employee->type=="HR"){
                    return view('vendor.employee.hr.index');
//            }
//            else
//            {
//            return redirect()->route('sales.index');
//            }
    }

    public function salesExcecutiveindex(Request $request)
    {
//        $employee=$request->session()->get('employee');
//         if($employee->type=="Sales"){
         return view('vendor.employee.sales.index');
//    }else{
//          return redirect()->route('hr.index');
//    }
//
    }

    public function employeeLogin(){
        return view('vendor.employee.login');
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

                if($employee->type=="HR"){
                    return redirect()->route('hr.index');
                }
                elseif ($employee->type=="Sales"){
                    return redirect()->route('sales.index');
                }

            }else{
                return view('vendor.employee.login',["errorMessage"=>"Email or Password doesn't match"]);
            }
        }else {
            return view('vendor.employee.login');
        }

    }

    public function employeeCreateByVendor(){
        return view('vendor.addEmployee');
    }
    public function createEmployeeByVendor(Request $request){
        $vendorId=$request->session()->get('vendor.id');
        $this->validate($request,[
            'emp_name' =>'required',
            'emp_type'=>'required',
            'emp_email'=>'required|email|unique:employees,email',
            'emp_pass' =>'required',
            'cnpassword'=>'required|same:emp_pass'

        ],
        [
            'emp_name.required'     => 'Please provide your name',
            'emp_type.required'     => 'Provide employee type',
            'emp_email.required'    => 'You must Provide an email address',
            'emp_email.email'       => 'You must Provide an email address',
            'emp_email.unique'      => 'This email already exist ',
            'emp_pass.required'     => 'Please provide your Password',
            'cnpassword.required'   => 'Please provide your Password again',
            'cnpassword.same'       => 'Password and confirm password does not match',

        ]
        );


        $employee= new Employee();

        $employee->name= $request->input('emp_name');
        $employee->email= $request->input('emp_email');
        $employee->password=Hash::make($request->input('emp_pass'));
        $employee->type=$request->input('emp_type');
        $employee->Identity_number= $vendorId .'-'. date("H-i-s").'-'. str_random(2);
        $employee->vendor_id=$vendorId;
        $employee->referenced_by= $vendorId;

        $employee->save();

        return redirect()->route('vendor.index');

    }

    public function create(Request $request)
    {
                $employeeType=$request->session()->get('employee.type');

                if($employeeType=="HR"){

                return view('vendor.employee.hr.addemployee');

                }else{
                        return "Not authorized";
                }
    }

    public function CreateEmployee(Request $request)
    {
        $employeeType=$request->session()->get('employee.type');

      //  return $employeeType;

        if($employeeType=="HR"){

             $this->validate($request,[
                 'emp_email'=>'required|email|unique:employees,email',
                 'emp_ident'=>'required|unique:employees,Identity_number',
                 'emp_pass' =>'required',
                 'cnpassword'=>'required|same:emp_pass'
            
            ]);
            
            $employee = new Employee();

                $employee->name=$request->input('emp_name');
                $employee->email=$request->input('emp_email');
                $employee->password=Hash::make($request->input('emp_pass'));
    //            $employee->current_address=$request->input('emp_address');
    //            $employee->parmanent_address=$request->input('emp_par_address');
    //            $employee->contact_number=$request->input('emp_contact');
                $employee->type=$request->input('emp_type');
                $employee->Identity_number= $request->session()->get('employee.id') .'-'. date("H-i-s").'-'. str_random(2);

                $employee->vendor_id=session()->get('employee.vendor_id');
                $employee->referenced_by=session()->get('employee.id');

                //emp_ident
                $employee->save();
                return redirect()->route('hr.index');

        }else{
            
            return view('vendor.employee.hr.addemployee',["message"=>"Sorry You are not authorized to add employee!"]);
        }
    }

    
    public function show($id)
    {
        //Employee profile details
    }

    
    public function edit(Request $request)
    {
         $employee=Employee::find($request->session()->get('employee.id'));
        if($employee->type=="HR"){
            return view('vendor.employee.hr.edit',['employee'=>$employee]);
        }else{
            return view('vendor.employee.sales.edit',['employee'=>$employee]);
        }
        
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

   
public function changePassword(){
        return view('employee.passwordChange');
    }
    public function updatePassword(Request $request){

        $this->validate($request,[
            'oldPassword'   =>'required',
            'NewPassword'   =>'required',
            'conPassword'   =>'required|same:NewPassword'
        ]);




        $employee=Employee::find($request->session()->get('employee.id'));

        if (Hash::check($request->input('oldPassword'),  $employee->password)) {
            $employee->password = Hash::make($request->input('NewPassword'));
            $employee->password = Hash::make($request->input('NewPassword'));
            $employee->save();
            return "Password Changed Successfully";
        }else{
            $message = "current password does not match";
            return view('employee.passwordChange', ['message' => $message]);
        }


    }

 public function imagechange(Request $request)
    {
        $employee=Employee::find($request->session()->get('employee.id'));
        $file=$request->file('image');

        if($file!=null){
                
                    //File Upload Code Start
                    $file_name = $request->session()->get('employee.id').'.png';
                    if(file_exists(public_path('/uploads/vendor/employee/'.$file_name))){
                         //delete existing file
                        File::delete(public_path('/uploads/vendor/employee/'.$file_name));

                    }

                    $file->move(public_path('/uploads/vendor/employee'), $file_name);
                    $employee->image='/uploads/vendor/employee/'.$file_name;
                    $employee->save();
                   
                       
                    

                     $employee->password=null;
                session(['employee' => $employee]);
                 return redirect()->route('hr.index');
                    
                    
                    //File Upload Code End
                }
                if($employee->type=="HR"){
                    return redirect()->route('hr.index');
                }
                elseif ($employee->type=="Sales Executive"){
                    return redirect()->route('sales.index');
                }
    }



    public function destroy($id)
    {
        //Delete employee
    }

    public function allemployee(Request $request){
         $employee=Employee::find($request->session()->get('employee.id'));

        if($employee->type=="HR"){
           $employees=Employee::all()->sortByDesc("Active");

         return view('vendor.employee.hr.allemployee',['employee'=>$employee, 'employees'=>$employees]);
        }
        else{
            return "You are not authorized.";
        }
    }

    public function active(Request $request){
        $employee=Employee::find('id',$request->id);
        $employee->Active=$request->active;
    }


    public function logOut(Request $request){
        session()->forget('employee');
        return redirect()->route('employee.login');
    }




    public function employeeList(Request $request, $type){

        $employees = Employee::where('vendor_id', '=', $request->session()->get('employee.vendor_id'))
            ->where('type', '=', $type)
            ->get();

        return view('vendor.employee.hr.employeeList')->with('employees',$employees)->with('type', $type);
    }

}
