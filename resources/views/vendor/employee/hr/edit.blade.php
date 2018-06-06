@extends('layouts.employee-hr-layout')




@section('title', 'Edit Profile')


@section('styles')
<link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/form-styles.css') }}">
@endsection




@section('details')
<div class="row">
<div class="col-md-12">
    <span><b class="text-warning">{{$message or ''}}</b></span>
</div>
</div>
        <div class="container-fluid" style="background-color: seashell">
     <div class="form-wrapper">
     @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- BEGIN REGISTER FORM -->
        <form class="form-content" id="emp-edit-form" action="#" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <h2 class="form-title text-center">Edit Profile</h2>
                    
                </div>
            </div>
            <p class="section"><span class="number">1</span><span class="text">Basic information</span></p>
            <div class="row">
                <div class="col-sm-12">
                    <label for="fname">Employee Name<span>*</span></label>
                    <input required  value="{{$employee->name}}" type="text" name="emp_name" id="emp_name"   placeholder="Please enter employee full name" required title="It must contain only letters and a length of minimum 2 characters">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="fname">Current Address<span>*</span></label>
                    <input required value="{{$employee->current_address}}" type="text" name="emp_address" id="emp_address"   placeholder="Please enter employee current address" required title="It must contain only letters and a length of minimum 2 characters">
                </div>

            </div>
             <div class="row">
                <div class="col-sm-12">
                    <label for="fname">Parmanent Address<span>*</span></label>
                    <input required value="{{$employee->parmanent_address}}" type="text" name="emp_par_address" id="emp_par_address"   placeholder="Please enter employee Parmanent address" required title="It must contain only letters and a length of minimum 2 characters">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="fname">Contact Number<span>*</span></label>
                    <input required value="{{$employee->contact_number}}" type="text" name="emp_contact" id="emp_contact" pattern="[0-9+]{10,}"  placeholder="Please enter employee contact number" required title="It must contain only letters and a length of minimum 2 characters">
                </div>

            </div>

            <div class="row">
                    <div class="col-sm-12">
                        <label for="address">Employee Type<span>*</span></label>
                        <select  required name="emp_type" readonly="readonly">
                            <option readonly value="{{ $employee->type}}">
                            {{ $employee->type}}
                           
                        </select>
                    </div>
                </div>

             <p class="section"><span class="number">2</span><span class="text">Identity Details</span></p>
             <div class="row">
                <div class="col-sm-12">
                    <label for="email_reg"><i class="glyphicon glyphicon-envelope"></i> Identity Number<span>*</span></label>
                    <input required value="{{$employee->Identity_number}}" type="text" name="emp_ident" id="emp_ident" placeholder="Please enter employee citizen Identity number"  required readonly>
                </div>
            </div>
            

            <p class="section"><span class="number">3</span><span class="text">Account credentials</span></p>
            <div class="row">
                <div class="col-sm-12">
                    <label for="email_reg"><i class="glyphicon glyphicon-envelope"></i> Email<span>*</span></label>
                    <input required value="{{$employee->email}}" type="email" name="emp_email" id="emp_email" placeholder="Please enter a valid email address" title="It must contain a valid email address e.g. someone@provider.com" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <button name="emp-submit" type="submit" class="button green">Update Account</button>
                </div>
                
            </div>
        </form><!-- END OF REGISTER FORM -->
    </div><!-- END OF WRAPPER DIV -->

</div>


@endsection



@section('scripts')
<script src="{{ URL::asset('assets/js/jquery.validate.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // validate register form on submit
        $("#register-form").validate();
    });
</script>
@endsection