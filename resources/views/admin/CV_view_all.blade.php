@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/View My CV</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12  mt-2">
     <div class="mb-5">
        <iframe src="/uploads/CV/{{$view->cv}}" height="1350" width="1350" alt=""> </iframe>
     </div>
        </div>
    </div>

</div>
@endsection
