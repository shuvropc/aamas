@extends('layouts.employee-hr-layout')


@section('title', 'HR')


@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/form-styles.css') }}">
@endsection




@section('index')

    <div class="container-fluid" style="background-color: seashell">
        <div class="form-wrapper">
            <!-- BEGIN REGISTER FORM -->
            <form class="form-content" id="register-form" action="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="form-title text-center">Employee Registration</h2>
                    </div>
                </div>
                <p class="section"><span class="number">1</span><span class="text">Basic information</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="fname">Name<span>*</span></label>
                        <input required  type="text" name="emp_name" id="name" pattern="[a-zA-Z ]{2,}"  placeholder="Please enter your full name" required title="It must contain only letters and a length of minimum 2 characters">
                    </div>

                </div>




                <p class="section"><span class="number">2</span><span class="text">Employee Details</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="address">Identity Number<span>*</span></label>
                        <input required type="text" name="emp_ident" id="idNumber"   placeholder="Please enter Employee Id Number" title="It must contain letters and/or separators and a length of minimum 10 characters" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label for="address">Employee Type<span>*</span></label>
                        <select required name="emp_type">
                            <option value="HR">HR</option>
                            <option value="Sales">Sales Executive</option>
                        </select>
                    </div>
                </div>


                <p class="section"><span class="number">3</span><span class="text">Account credentials</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="email_reg"><i class="glyphicon glyphicon-envelope"></i> Email<span>*</span></label>
                        <input required type="email" name="emp_email" id="email_reg" placeholder="Please enter a valid email address" title="It must contain a valid email address e.g. someone@provider.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="password_reg"><i class="glyphicon glyphicon-lock"></i> Password<span>*</span></label>
                        <input required type="password" name="emp_pass" id="password_reg" pattern=".{6,}"  placeholder="Please enter your password" title="It can contain all types of characters and a length of minimum 6 characters" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="rpassword"><i class="glyphicon glyphicon-lock"></i> Confirm Password<span>*</span></label>
                        <input required type="password" name="cnpassword" id="rpassword" pattern=".{6,}"  placeholder="Please enter your password" title="It can contain all types of characters and a length of minimum 6 characters" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button name="register-submit" type="submit" class="button green">Create Account</button>
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