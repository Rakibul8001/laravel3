@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    Add Products
                </div>
                <div class="card-body">
                    <form action="{{route('admin.pages.products.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @include('admin.messages.message')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" rows="10" cols="80" class="form-control" id="exampleInputPassword1" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail1"  placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1"  placeholder="Enter quantity">
                        </div>

                        <div class="form-group">
                            <label for="product_image">Product Image</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" name="product_image[]" class="form-control" id="product_image"  >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="product_image[]" class="form-control" id="product_image"  >
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="product_image[]" class="form-control" id="product_image"  >
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

