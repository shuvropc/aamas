@extends('layouts.admin-layout')


@section('content')

    <div class="page-wrapper">
        <div class="container-fluid pt-25">
            <div class="container">
                <h2>New Slider</h2>
                <form method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="email">Title:</label>
                        <input type="text" class="form-control"  required placeholder="Enter title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <input type="text" class="form-control" required  placeholder="Enter description" name="description">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Image:</label>
                        <input type="file" class="form-control"  required name="image">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
