@extends('layouts.vendor-layout')


@section('title', 'Vendor Dashboard')

@section('content')


    <!-- Main Content -->

    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h3 id="heading" class="txt-dark">Employee List of {{$type}}</h3>
            </div>
            <!-- Breadcrumb -->
          
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->


        <style>

            #heading {
                font-weight: bold;
            }

            #myTable {
                font-size: 20px;
                text-align: center;
            }

            #myTable thead tr th {
                font-size: 20px;
                font-weight: bold;
                text-align: center;
            }
        </style>

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body row">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table display responsive product-overview mb-30" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Address</th>
                                        <th>Date Joined</th>
                                        <th>Status</th>
                                        <th>Contact</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($employees as $employee)

                                        <tr>
                                            <td class="txt-dark">{{$employee->name}}</td>
                                            <td>
                                                <img src="{{asset($employee->image)}}" alt="emp_image" width="80">
                                            </td>
                                            <td>{{$employee->current_address}}</td>
                                            <td>{{$employee->created_at}}</td>
                                            <td>

                                                <div class="toggle">
                                                        <span class="mid">
                                                            <label class="switch">
                                                                @if($employee->active==1)
                                                                    <input type="checkbox" checked id="feature"
                                                                           onclick="changeEmployeeStatus({{$employee->id}})">
                                                                @else
                                                                    <input type="checkbox" id="feature"
                                                                           onclick="changeEmployeeStatus({{$employee->id}})">

                                                                @endif
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </span>
                                                </div>


                                            </td>
                                          <td>{{$employee->contact_number}} </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>

    <script>
        function changeEmployeeStatus(empid) {

            $.ajax({
                type: 'POST',
                url: "http://127.0.0.1:8000/vendor/changeEmployeeStatus",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    empid: empid
                },
                success: function (result) {
                    console.log(result);
                }
            });
        }

    </script>


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