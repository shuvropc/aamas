@extends('layouts.admin-layout')


@section('content')


    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h2 class="txt-dark">Sliders</h2>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>product-orders</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <div class="row">
                <a class="btn-primary btn-lg" href="{{route('admin.addSlider')}}">Add New</a>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display responsive product-overview mb-30" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($sliders as $slider)

                                                <tr>
                                                    <td class="txt-dark">{{$slider->title}}</td>
                                                    <td class="txt-dark">{{$slider->description}}</td>
                                                    <td>
                                                        <img src="{{asset($slider->image)}}" alt="iMac" width="80">
                                                    </td>
                                                    <td><a class="btn-danger btn-sm" href="{{route('admin.deleteSlider',['id'=>$slider->id])}}">Delete</a></td>
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

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Philbert. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>


@endsection