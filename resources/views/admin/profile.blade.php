
@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')

@section('content')


    <div class="page-wrapper">
        <div class="container-fluid pt-25">

            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="panel panel-default card-view  pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body  pa-0">
                                <div class="profile-box">
                                    <div class="profile-cover-pic">

                                        <div class="profile-image-overlay"></div>
                                    </div>
                                    <div class="profile-info text-center">
                                        <div class="profile-img-wrap">
                                            <img class="inline-block mb-10" src="{{asset('$admin->image')}}" alt="Profile Photo"/>
                                            <div class="fileupload btn btn-default">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file">
                                            </div>
                                        </div>
                                        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{$admin->name}}</h5>
                                        <h6 class="block capitalize-font pb-20">{{$admin->email}}</h6>
                                    </div>
                                    <div class="social-info">

                                        <button class="btn btn-default btn-block btn-outline btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <div class="panel-wrapper collapse in">
                                                                        <div class="panel-body pa-0">
                                                                            <div class="col-sm-12 col-xs-12">
                                                                                <div class="form-wrap">
                                                                                    <form action="#">
                                                                                        <div class="form-body overflow-hide">
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputuname_1">Name</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                                                    <input type="text" class="form-control" id="exampleInputuname_1" value="{{$admin->name}}" placeholder="{{$admin->name}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                                    <input type="email" class="form-control" value="{{$admin->email}}" id="exampleInputEmail_1" placeholder="{{$admin->email}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                                                                    <input type="email" class="form-control" value="{{$admin->phone}}" id="exampleInputContact_1" placeholder="+102 9388333">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputpwd_1">Permanent Address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></div>
                                                                                                    <input type="text" class="form-control" id="exampleInputpwd_1" value="{{$admin->permanent_address}}" placeholder="Address">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputpwd_1">Present Address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></div>
                                                                                                    <input type="text" class="form-control" id="exampleInputpwd_1" value="{{$admin->present_address}}" placeholder="Address">
                                                                                                </div>
                                                                                            </div>
                                                                                            {{--<div class="form-group">--}}
                                                                                                {{--<label class="control-label mb-10">Gender</label>--}}
                                                                                                {{--<div>--}}
                                                                                                    {{--<div class="radio">--}}
                                                                                                        {{--<input type="radio" name="radio1" id="radio_1" value="option1" checked="">--}}
                                                                                                        {{--<label for="radio_1">--}}
                                                                                                            {{--M--}}
                                                                                                        {{--</label>--}}
                                                                                                    {{--</div>--}}
                                                                                                    {{--<div class="radio">--}}
                                                                                                        {{--<input type="radio" name="radio1" id="radio_2" value="option2">--}}
                                                                                                        {{--<label for="radio_2">--}}
                                                                                                            {{--F--}}
                                                                                                        {{--</label>--}}
                                                                                                    {{--</div>--}}
                                                                                                {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--<div class="form-group">--}}
                                                                                                {{--<label class="control-label mb-10">Country</label>--}}
                                                                                                {{--<select class="form-control" data-placeholder="Choose a Category" tabindex="1">--}}
                                                                                                    {{--<option value="Category 1">USA</option>--}}
                                                                                                    {{--<option value="Category 2">Austrailia</option>--}}
                                                                                                    {{--<option value="Category 3">India</option>--}}
                                                                                                    {{--<option value="Category 4">UK</option>--}}
                                                                                                {{--</select>--}}
                                                                                            {{--</div>--}}
                                                                                        </div>
                                                                                        <div class="form-actions mt-10">
                                                                                            <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div  class="panel-body pb-0">
                                <div  class="tab-struct custom-tab-1">
                                    <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                        <li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>profile</span></a></li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent_8">
                                        <div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
                                            <div class="col-md-12">
                                                <div class="pt-20">
                                                    <div class="streamline user-activity">
                                                        <div class="sl-item">
                                                             <h5>Permanent Address </h5> <span>{{$admin->permanent_address}}</span>

                                                        </div>
                                                        <div class="sl-item">
                                                            <h5>Present Address </h5> <span>{{$admin->present_address}}</span>

                                                        </div>
                                                        <div class="sl-item">
                                                            <h5>Present Address </h5> <span>{{$admin->phone}}</span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /Row -->



            <!-- /Row -->

        </div>
        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Philbert. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->


@endsection