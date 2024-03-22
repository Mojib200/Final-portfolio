@extends('layouts\dashboard\dashboard_master')

@section('content')
    <div class="page-titles mt-3 md-5 ml-3">
        <h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">/Show My CV </a></li>
            </ol>
        </h3>
    </div>
    <div class="row">

        <div class="col-lg-12 justify-content mt-5">
            <div class="card  ">

                <div class="card-header">
                    <h1  class="text-center ">Show My Information</h1>

                </div>
                <div class="card-body ">
                    <table class="table table-striped w-auto" >
                        <tr>

                            <th >ID</th>
                            <th >View</th>
                            <th style="text-align: center">Download</th>
                        </tr>
                        @foreach ($info_cv as $info_cv)
                        <tr>
                            <td>{{ $info_cv->id }}</td>
                            <td><a href="{{ route('view', $info_cv->id) }}">{{ $info_cv->cv }}</a></td>
                            <td><a href="{{ route('download', $info_cv->cv) }}">{{ $info_cv->cv }}</a></td>
                        </tr>
                    @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
