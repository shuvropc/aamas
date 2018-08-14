@extends('layouts.vendor-layout')


@section('title', 'Vendor Dashboard')

@section('content')


    <!-- Main Content -->

    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <h3 id="heading" class="txt-danger">Product : Going Out of Stock</h3>
            </div>

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
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity Left</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $product)

                                        <tr class="product_row_">
                                            <td class="txt-dark">{{$product->product_name}}</td>
                                            <td>
                                                <img src="{{asset($product->image1)}}" alt="iMac" width="80">
                                            </td>
                                            <td class="txt-dark">{{$product->size}}</td>
                                            <td class="txt-dark">{{$product->color}}</td>
                                            <td class="text-danger">{{$product->available_quantity}}</td>
                                            <td>
                                                {{--<button class="btn btn-primary" data-toggle="modal"  onclick="productUpdate({{$product->id, $product->color, $product->size}})">Update</button>--}}
                                                {{--<span class="label label-success font-weight-100">Update</span>--}}
                                                <a class="btn btn-success" href="/vendor/product/edit/{{$product->id}}">Edit</a>
                                            </td>
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



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <input type="number" id="updateValue"  required >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="conProductUpdate()" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
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
        var product_id=null;
        var color=null;
        var size=null;
        function productUpdate(id,color,size) {
            $('#exampleModalCenter').modal('show');

        }
        function conProductUpdate() {
            var value=$('#updateValue').val();
            $.ajax({
                type: 'POST',
                url: "http://127.0.0.1:8000/product/update",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : {
                    product_id : id,
                    color:color,
                    size:size,
                    value:value
                },
                success: function(result){
                    console.log(result);
                    $('#myModal').modal('hide');
                    if(value>5){
                        $('.product_row_'+product_id).remove();
                    }

                    product_id=null;

                }
            });

        }
    </script>



@endsection