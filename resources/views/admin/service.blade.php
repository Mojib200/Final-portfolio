@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/Service</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1>Service Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('service_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-6">
                            <label for="">Service Name:</label>
                            <input type="text" name="service_name" placeholder="Service Name">
                        </div>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Service Font Awesome :</label>
                            <input type="text" name="font_awesome" placeholder="Font Awesome Code">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">Service Description:</label>
                                <textarea class="form-control ht-80" name="service"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show All Services</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Service Name</th>
                        <th style="text-align: center">Font Awesome</th>
                        <th style="text-align: center">Description</th>
                        <th>Edit</th>
                        <th >Delete</th>

                    </tr>
                    @foreach ($service_info as $service_info)
                    <tr>


                    <td style=" width: 300px">{{$service_info->service_name}}</td>
                    <td style=" width: 300px">{{$service_info->font_awesome}}</td>
                    <td style="text-align: justify">{{$service_info->service}}</td>
                    <td style=" width: 300px"><a href="{{route('edit_service',$service_info->id)}}" class="btn btn-success btn-sm">edit</a></td>
                    <td style=" width: 300px"><a href="{{route('delete_service',$service_info->id)}}"class="btn btn-warning btn-sm">delete</a></td>


                    </tr>   @endforeach

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
