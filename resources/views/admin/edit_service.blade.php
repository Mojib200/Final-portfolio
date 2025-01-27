@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Service</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1> Edit Service  Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('edit_service_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-6">
                            <label for="">Service Name:</label>
                            <input type="text" name="service_name" placeholder="Service Name" value="{{$eidt_service_info->service_name}}">
                        </div>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Service Font Awesome :</label>
                            <input type="text" name="font_awesome" placeholder="Font Awesome Code"value="{{$eidt_service_info->font_awesome}}">
                        </div>
                        <input type="number" name="id" hidden value="{{$eidt_service_info->id}}">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">Service Description:</label>
                                <textarea class="form-control ht-80" name="service" >{{$eidt_service_info->service}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add Edit  Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
