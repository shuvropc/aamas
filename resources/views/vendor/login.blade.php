@extends('layouts.user-layout-without-sidebar')


@section('title', 'Vendor-Registration')


@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/form-styles.css') }}">
@endsection




@section('vendor-register-form')

    <div class="container-fluid" style="background-color: seashell">
        <div class="form-wrapper">
            <!-- BEGIN REGISTER FORM -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class="form-content" id="register-form" action="#" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="form-title text-center">Sign in vendor account</h2>
                    </div>
                </div>




                <div class="row">
                    <div class="col-sm-12">
                        <label for="email_reg"><i class="glyphicon glyphicon-envelope"></i> Email<span>*</span></label>
                        <input  type="email" name="email" id="email_reg" placeholder="Please enter a valid email address" title="It must contain a valid email address e.g. someone@provider.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="password_reg"><i class="glyphicon glyphicon-lock"></i> Password<span>*</span></label>
                        <input required type="password" name="password" id="password_reg" pattern=".{6,}"  placeholder="Please enter your password" title="It can contain all types of characters and a length of minimum 6 characters" required>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <button name="register-submit" type="submit" class="button green">Login</button>
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