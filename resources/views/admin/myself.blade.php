@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/My Self</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1> My Self Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('myself_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-white">
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Name:</label>
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Location:</label>
                            <input type="text" name="location" placeholder="Location">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Phone:</label>
                            <input type="number" name="phone" placeholder="Phone">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Email:</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Your Image:</label>
                            <input type="file" name="profile" placeholder="Image">
                        </div>
                        <div class="col-lg-4 ">
                            <label for="">Whats App</label>
                            <input type="text" name="whatsapp" placeholder="Whats App">
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Facebook:</label>
                            <input type="text" name="facebook" placeholder="Facebook">
                        </div>
                        <div class="col-lg-4 ">
                            <label for="">Instagram:</label>
                            <input type="text" name="instagram" placeholder="Instagram">
                        </div>
                        <div class="col-lg-4  ">
                            <label for="">Youtube:</label>
                            <input type="text" name="youtube" placeholder="Youtube">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">My Self:</label>
                                <textarea class="form-control ht-80" name="myself"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To My Self</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show My Information Insert Or Update Cause Only My Information</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Location</th>
                        <th style="text-align: center">Phone</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Profile </th>
                        <th style="text-align: center">Facebook</th>
                        <th style="text-align: center">Whats App</th>
                        <th style="text-align: center">Youtube</th>
                        <th style="text-align: center">Instagram</th>
                        <th style="text-align: center">Myself</th>
                    </tr>
                    <tr>
                        @if($myself_information!=null)
                        <td style=" width: 100px">{{$myself_information->name}}</td>
                        <td style=" width: 100px">{{$myself_information->location}}</td>
                        <td style=" width: 100px">0{{$myself_information->phone}}</td>
                        <td style=" width: 100px">{{$myself_information->email}}</td>
                        <td style=" width: 150px"><img src="{{asset('Uploads/My_Self')}}/{{$myself_information->profile}}" height="150" width="150" class="rounded-circle"></td>
                        <td style=" width: 70px"><a href="{{$myself_information->facebook}}"> FaceBook</a></td>
                        <td style=" width: 70px"><a href="{{$myself_information->whatsapp}}">Whats App</a></td>
                        <td style=" width: 70px"><a href="{{ $myself_information->youtube}}">Youtube</a></td>
                        <td style=" width: 70px"><a href="{{$myself_information->instagram}}">Instagram</a></td>
                        <td style="text-align: justify">{{$myself_information->myself}}</td>
                        @endif


                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
