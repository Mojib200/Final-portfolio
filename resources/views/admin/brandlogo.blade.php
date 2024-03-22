@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/Brand</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1>Service Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('brand_logo_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-6">
                            <label for="">Brand Name:</label>
                            <input type="text" name="brand_name" placeholder="Brand Name">
                        </div>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Brand Logo :</label>
                            <input type="file" name="brand_logo" placeholder="Brand Logo">
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show All Brand</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Brand Name</th>
                        <th style="text-align: center">Barnd Logo</th>
                        <th>Edit</th>
                        <th >Delete</th>

                    </tr>
                    @foreach ($brand_info as $brand_info)
                    <tr>


                    <td style=" width: 300px">{{$brand_info->brand_name}}</td>
                    <td style=" width: 300px"> <img src="{{ asset('uploads/brandlogo') }}/{{$brand_info->brand_logo}}" class="rounded-circle" alt=""></td>
                    <td style=" width: 300px"><a href="{{route('edit_brand',$brand_info->id)}}" class="btn btn-success btn-sm">Edit</a></td>
                    <td style=" width: 300px"><a href="{{route('delete_brand',$brand_info->id)}}"class="btn btn-warning btn-sm">delete</a></td>


                    </tr>   @endforeach

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
