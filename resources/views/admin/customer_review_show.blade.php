@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/Customer Reviews</a></li>
</ol></h3>
</div>
<div class="row">

    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show All Services</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Customer Name</th>
                        <th style="text-align: center">Customer Email</th>
                        <th style="text-align: center">Customer Number</th>
                        <th style="text-align: center">Customer Image</th>
                        <th style="text-align: center">Customer Review</th>
                        <th >Delete</th>

                    </tr>
                    @foreach ($customer_reviews as $customer_reviews)
                    <tr>
                    <td style=" width: 300px">{{$customer_reviews->customer_name}}</td>
                    <td style=" width: 300px">{{$customer_reviews->customer_email}}</td>
                    <td style=" width: 300px">0{{$customer_reviews->customer_number}}</td>
                    <td style=" width: 300px"> <img src="{{ asset('uploads/customer') }}/{{$customer_reviews->customer_image}}" width="100" height="100" class="rounded-circle" alt="img"></td>
                    <td style="text-align: justify">{{$customer_reviews->customer_message}}</td>
                    <td style=" width: 100px"><a href="{{route('delete_customer_reviews',$customer_reviews->id)}}"class="btn btn-warning btn-sm">delete</a></td>


                    </tr>   @endforeach

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
