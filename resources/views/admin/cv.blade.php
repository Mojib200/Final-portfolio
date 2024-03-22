@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/My CV</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card  bg-success  ">
            <div class="card-header">
                <h1> Insert My CV</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('cv_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">

                        <div class="mb-3 col-lg-4  ">
                            <label for="">Your CV:</label>
                            <input type="file" name="cv" placeholder="CV">
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To My CV</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
