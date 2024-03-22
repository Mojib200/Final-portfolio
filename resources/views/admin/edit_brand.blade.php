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
                <form action="{{ route('brand_logo_edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-6">
                            <label for="">Brand Name:</label>
                            <input type="text" name="brand_name" placeholder="Brand Name" value="{{$eidt_brand_info->brand_name}}">
                        </div>
                        <input type="number" name="id" value="{{$eidt_brand_info->id}}" hidden>
                        <div class="mb-3 col-lg-6  ">
                            <label for="">Brand Logo :</label>
                            <input type="file" name="brand_logo" placeholder="Brand Logo" >
                            <img src="{{ asset('uploads/brandlogo') }}/{{$eidt_brand_info->brand_logo}}" class="rounded-circle" alt="">
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Edit To Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
