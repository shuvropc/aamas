
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
                                            <img class="inline-block mb-10" src="{{asset('$admin->image')}}" alt="{{$admin->name}}"/>
                                            <div class="fileupload btn btn-default">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" id="profileImage" onchange="photoUpdate({{$admin->id}})" type="file">
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
                                                                                                    <input type="text" class="form-control" id="name" value="{{$admin->name}}" placeholder="{{$admin->name}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                                                    <input type="email" class="form-control" value="{{$admin->email}}" id="email" placeholder="{{$admin->email}}">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                                                                    <input type="text" class="form-control" value="{{$admin->phone}}" id="contact" placeholder="+102 9388333">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputpwd_1">Permanent Address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></div>
                                                                                                    <input type="text" class="form-control" id="permanent" value="{{$admin->permanent_address}}" placeholder="Address">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10" for="exampleInputpwd_1">Present Address</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></div>
                                                                                                    <input type="text" class="form-control" id="present" value="{{$admin->present_address}}" placeholder="Address">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-actions mt-10">
                                                                                            <button type="submit" class="btn btn-success mr-10 mb-30" onclick="updateProfile({{$admin->id}})">Update profile</button>
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
                    <p>2018 &copy; aamas</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    <script>
        function updateProfile(id) {
          var name=$('#name').val();
          var email=$('#email').val();
          var contact=$('#contact').val();
          var permanent=$('#permanent').val();
          var present=$('#present').val();

            $.ajax({
                type: 'POST',
                url: "http://127.0.0.1:8000/admin/profile/update",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : {
                    aid : id,
                    aname:name,
                    aemail:email,
                    acontact:contact,
                    apermanent:permanent,
                    apresent:present


                },
                success: function(result){
                    console.log(result);
                    $('#myModal').modal('hide');

                }

            });

        }

        function photoUpdate(id) {
            var photo=$('#profileImage').val();
            //console.log(photo);

            $.ajax({
                type: 'POST',
                url: "/admin/photo/update",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : {
                    aid : id,
                    aphoto:photo

                },
                success: function(result){
                    console.log(result);

                }

            });

        }

    </script>


@endsection