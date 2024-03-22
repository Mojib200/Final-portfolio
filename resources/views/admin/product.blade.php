@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/Product</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1>Product Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('product_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-4">
                            <label for="">Product Name:</label>
                            <input type="text" name="product_name" placeholder="Product Name">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Product Image :</label>
                            <input type="file" name="product_image" placeholder="Product Image">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Details Image :</label>
                            <input type="file" name="detalis_image" placeholder="Product Details">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">Product Description:</label>
                                <textarea class="form-control ht-80" name="product"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show All Product</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Product Name</th>
                        <th style="text-align: center">Product Image</th>
                        <th style="text-align: center">Product Image_Detalis</th>
                        <th style="text-align: center">Description</th>
                        <th>Edit</th>
                        <th >Delete</th>

                    </tr>
                    @foreach ($product_info as $product_info)
                    <tr>


                    <td style=" width: 300px">{{$product_info->product_name}}</td>
                    <td style=" width: 300px">  <img src="{{ asset('uploads/product') }}/{{$product_info->product_image}}" width="300"
                        height="300" ></td>
                    <td style=" width: 300px">  <img src="{{ asset('uploads/product_detalis_image') }}/{{$product_info->detalis_image}}" width="300"
                        height="300" ></td>
                    <td style="text-align: justify">{{$product_info->product}}</td>
                    <td style=" width: 300px"><a href="{{route('edit_product',$product_info->id)}}" class="btn btn-success btn-sm">edit</a></td>
                    <td style=" width: 300px"><a href="{{route('delete_product',$product_info->id)}}"class="btn btn-warning btn-sm">delete</a></td>


                    </tr>   @endforeach

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
