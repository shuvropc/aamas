@extends('layouts.vendor-layout')


@section('title', 'Vendor Admin')


@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/imageUpload.css') }}">

@endsection




@section('content')

    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">add-products</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#"><span>e-commerce</span></a></li>
                    <li class="active"><span>add-products</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form method="post" enctype="multipart/form-data">

                                    @csrf


                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
                                    <hr class="light-grey-hr">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Product Name</label>
                                                <input type="text" required="" id="firstName" name="product_name" value="{{$product['product_name']}}" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->






                                        <!--/span-->
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Category</label>
                                                <select  name="category" id="category" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->category_name}}">{{ $category->category_name }}</option>

                                                    @endforeach
                                                </select>
                                                <div id="newCategory"></div>
                                                <button id="addNewCategory" onclick="addCategory()" type="button" class="btn btn-success btn-icon left-icon "> <i class="fa fa-plus"></i> <span>Add New</span></button>

                                            </div>
                                        </div>

                                        <input type="text" name="product_id" value="{{$product->id}}">

                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Status</label>
                                                <div class="radio-list">
                                                    <div class="radio-inline pl-0">
                                                        <div class="radio radio-info">
                                                            <input type="radio" checked="" name="radio" id="radio1" value="1">
                                                            <label for="radio1">Published</label>
                                                        </div>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <div class="radio radio-info">
                                                            <input type="radio" name="radio" id="radio2" value="0">
                                                            <label for="radio2">Unpublished</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Buying Price</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-money"></i></div>
                                                    <input required="" type="text" value="{{$product['buying_price']}}" name="buying_price" class="form-control" id="exampleInputuname" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Selling Price</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-money"></i></div>
                                                    <input required="" type="text" value="{{$product['selling_price']}}" name="selling_price" class="form-control" id="exampleInputuname_1" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>





                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Discount</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                    <input  type="text" name="discount" value="{{$product['discount']}}" class="form-control" id="exampleInputuname" placeholder="%">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Brand</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                    <input  type="text" name="brand" value="{{$product['brand']}}" class="form-control" id="exampleInputuname" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Details</h6>
                                    <hr class="light-grey-hr">


                                    <div id="quantity_input">
                                        @foreach($details as $detail)

                                        <div class="row" id="detail_row_{{$detail->id}}">

                                        <input type="hidden" value="{{$detail->id}}" name="detail_id[]">


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Size</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                        <input  type="text" value="{{$detail['size']}}" name="size[]"  class="form-control" id="size" placeholder="">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Color</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                        <input required="" type="text" value="{{$detail['color']}}" name="color[]" class="form-control" id="color" placeholder="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Quatity</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                        <input required="" type="text" value="{{$detail['total_quantity']}}" name="total_quantity[]" class="form-control" id="quantity" placeholder="">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label mb-10"></label>
                                                    <div class="input-group">
                                                        <button type="button" class="btn btn-danger" type="button" onclick="removeDetails({{$detail->id}})">X</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        @endforeach
                                        </div>




                                    <button type="button" class="btn btn-success btn-icon left-icon " onclick="addNewDetailsRow()">Add New Size</button>

                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
                                    <hr class="light-grey-hr">
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="form-group">
                                                <textarea name="product_description"  class="form-control" rows="4" >{{$product['product_description']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->




                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Image</h6>
                                    <hr class="light-grey-hr">


                                    <div class="row" id="dynamicImageUploadDiv">

                                        <div class="col-md-3">
                                            <div class="imageupload panel panel-default">
                                                <div class="panel-heading clearfix">
                                                    <h3 class="panel-title pull-left">Upload Image</h3>
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-default active">File</button>
                                                    </div>
                                                </div>

                                                <div style="width: 100%">

                                                    <img style="height: 200px;" src="{{asset($product->image1)}}">
                                                </div>

                                                <div class="file-tab panel-body">
                                                    <label class="btn btn-default btn-file">
                                                        <span>Browse</span>
                                                        <!-- The file is stored here. -->
                                                        <input  type="file" name="productImage1">
                                                    </label>
                                                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imageupload panel panel-default">
                                                <div class="panel-heading clearfix">
                                                    <h3 class="panel-title pull-left">Upload Image</h3>
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-default active">File</button>
{{--                                                        <img style="height: 200px;" src="{{asset($product->image2)}}">--}}

                                                    </div>
                                                </div>

                                                <div style="width: 100%">

                                                    <img style="height: 200px;" src="{{asset($product->image2)}}">
                                                </div>

                                                <div class="file-tab panel-body">
                                                    <label class="btn btn-default btn-file">
                                                        <span>Browse</span>
                                                        <!-- The file is stored here. -->
                                                        <input type="file" name="productImage2">
                                                    </label>
                                                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imageupload panel panel-default">
                                                <div class="panel-heading clearfix">
                                                    <h3 class="panel-title pull-left">Upload Image</h3>
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-default active">File</button>

                                                    </div>
                                                </div>

                                                <div style="width: 100%">

                                                    <img style="height: 200px;" src="{{asset($product->image3)}}">
                                                </div>
                                                <div class="file-tab panel-body">
                                                    <label class="btn btn-default btn-file">
                                                        <span>Browse</span>
                                                        <!-- The file is stored here. -->
                                                        <input type="file" name="productImage3">
                                                    </label>
                                                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imageupload panel panel-default">
                                                <div class="panel-heading clearfix">
                                                    <h3 class="panel-title pull-left">Upload Image</h3>
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-default active">File</button>

                                                    </div>
                                                </div>

                                                <div style="width: 100%">

                                                <img style="height: 200px;" src="{{asset($product->image4)}}">
                                                </div>

                                                <div class="file-tab panel-body">
                                                    <label class="btn btn-default btn-file">
                                                        <span>Browse</span>
                                                        <!-- The file is stored here. -->
                                                        <input type="file" name="productImage4">
                                                    </label>
                                                    <button type="button" class="btn btn-default" style="display: none;">Remove</button>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
                                        <button type="button" class="btn btn-warning pull-left">Cancel</button>
                                        <div class="clearfix"></div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>


    </div>

@endsection






@section('scripts')
    p
    <script src="/assets/js/edit-product.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/image-upload.js') }}"></script>


    <script>
        var $imageupload = $('.imageupload');
        $imageupload.imageupload();
    </script>

@endsection