@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Product/Edit</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1> Edit Product  Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('edit_product_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-6">
                            <label for="">Product Name:</label>
                            <input type="text" name="product_name" placeholder="Service Name">
                        </div>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Product Image  : {{$eidt_product_info->product_image}}</label>
                            <input type="file" name="product_image">
                        </div>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Product Detalis :{{$eidt_product_info->detalis_image}}</label>
                            <input type="file" name="detalis_image" value="{{$eidt_product_info->detalis_image}}">
                        </div>
                        <input type="number" name="id" hidden value="{{$eidt_product_info->id}}">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">Description:</label>
                                <textarea class="form-control ht-80" name="product" value="{{$eidt_product_info->product}}">{{$eidt_product_info->product}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add Edit  Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
