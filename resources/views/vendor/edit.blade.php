@extends('layouts.user-layout-without-sidebar')


@section('title', 'Vendor-Registration')


@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/form-styles.css') }}">
@endsection




@section('vendor-register-form')

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
            <form class="form-content" id="register-form" action="#" method="post" enctype="multipart/form-data">
            <label> check: {{$message or ''}}</label>
{{ csrf_field() }}
                <input type="hidden" value="{{$vendor->email}}" name="email">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="form-title text-center">Update Information</h2>
                    </div>
                </div>
                <p class="section"><span class="number">1</span><span class="text">Basic information</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="fname">Name<span>*</span></label>
                        <input required value="{{$vendor->name}}" type="text" name="name" id="fname" pattern="[a-zA-Z ]{2,}"  placeholder="Please enter your first name" required title="It must contain only letters and a length of minimum 2 characters">
                    </div>

                </div>

              
                <div class="row">
                    <div class="col-sm-12">
                        <label for="address"><i class="glyphicon glyphicon-map-marker"></i> Address<span>*</span></label>
                        <input required value="{{$vendor->address}}" type="text" name="address" id="address" pattern="[a-zA-Z0-9. - , ]{10,}"  placeholder="Please enter your street address" title="It must contain letters and/or separators and a length of minimum 10 characters" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="country"><i class="glyphicon glyphicon-globe"></i> Country<span>*</span></label>
                        <input required value="{{$vendor->country}}" type="text" name="country" id="country" pattern="[a-zA-Z- ]{2,}"  placeholder="Please enter your country" title="It must contain only letters and a length of minimum 2 characters" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="zipcode">ZIP Code<span>*</span></label>
                        <input required value="{{$vendor->zipcode}}" type="text" name="zipcode" id="zipcode" pattern="[0-9 ]{3,}" placeholder="Please enter your zip code" title="It must contain only numbers and a length of minimum 3 characters" required>
                    </div>
                </div>



                <p class="section"><span class="number">2</span><span class="text">Contact details</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="address"><i class="glyphicon glyphicon-map-marker"></i> Contact Number<span>*</span></label>
                        <input required value="{{$vendor->contact_number}}" type="text" name="phonenumber" id="address" pattern="[a-zA-Z0-9. - , ]{10,}"  placeholder="Please enter your street address" title="It must contain letters and/or separators and a length of minimum 10 characters" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="address"><i class="glyphicon glyphicon-map-marker"></i>Website<span>*</span></label>
                        <input required value="{{$vendor->website}}" type="text" name="website" id="address" pattern="[a-zA-Z0-9. - , ]{10,}"  placeholder="Please enter your street address" title="It must contain letters and/or separators and a length of minimum 10 characters" required>
                    </div>
                </div>


                <p class="section"><span class="number">3</span><span class="text">Company Details</span></p>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="address">Company Name<span>*</span></label>
                        <input required value="{{$vendor->vendor_name}}" type="text" name="vendorname" id="vendorname" pattern="[a-zA-Z0-9. - , ]{10,}"  placeholder="Please enter your street address" title="It must contain letters and/or separators and a length of minimum 10 characters" required>
                    </div>
                </div>
             

                <div class="row">
                    <div class="col-sm-12">
                        <label for="address">Product Type<span>*</span></label>
                        <select required name="producttype">
                            <option value="Electronics">Electronics</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Shoe">Shoe</option>
                        </select>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <button name="register-submit" type="submit" class="button green">Update Account</button>
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