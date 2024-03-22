@extends('layouts\dashboard\dashboard_master')

@section('content')
<div class="page-titles mt-3 md-5 ml-3">
  <h3><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">/About Us</a></li>
</ol></h3>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="card  bg-success ">
            <div class="card-header">
                <h1> My Self Information</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('about_info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-dark">
                        <div class="mb-3 col-lg-4  ">
                            <label for="">Your About Image:</label>
                            <input type="file" name="about_profile" placeholder="Image">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-3 mt-3">
                            <div class="form-group">
                                <label class=" text-white ft-medium">About:</label>
                                <textarea class="form-control ht-80" name="about"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-4 ">
                            <select name="exam_name1" id="">
                                <option value="">Exam Name </option>
                                <option value="Secondary School Certificate">SSC</option>
                                <option value="Higher Secondary Certificate">HSC</option>
                                <option value="Bachelor of Computer Science And Engineering">Bsc</option>
                                <option value="Msc">Msc</option>
                            </select>
                        </div>

                        <div class="col-lg-4  ">

                            <select name="exam_year1" id="">
                                <option value="">Exam Year </option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <select name="progressbar1" id="">
                                <option value="0">Progressbar  Value</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="100">100</option>
                            </select>

                        </div>

                        <div class="col-lg-4 ">
                            <select name="exam_name2" id="">
                                <option value="">Exam Name </option>
                                <option value="Secondary School Certificate">SSC</option>
                                <option value="Higher Secondary Certificate">HSC</option>
                                <option value="Bachelor of Computer Science And Engineering">Bsc</option>
                                <option value="Msc">Msc</option>
                            </select>
                        </div>
                        <div class="col-lg-4  ">
                            <select name="exam_year2" id="">
                                <option value="">Exam Year </option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <select name="progressbar2" id="">
                                <option value="0">Progressbar  Value</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="100">100</option>
                            </select>

                        </div>

                        <div class="col-lg-4 ">
                            <select name="exam_name3" id="">
                                <option value="">Exam Name </option>
                                <option value="Secondary School Certificate">SSC</option>
                                <option value="Higher Secondary Certificate">HSC</option>
                                <option value="Bachelor of Computer Science And Engineering">Bsc</option>
                                <option value="Msc">Msc</option>
                            </select>
                        </div>
                        <div class="col-lg-4  ">
                            <select name="exam_year3" id="">
                                <option value="">Exam Year </option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-4  ">
                            <select name="progressbar3" id="">
                                <option value="0">Progressbar  Value</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="100">100</option>
                            </select>

                        </div>


                    </div>
                    <div class="mb-3 pt-2">
                        <button class="btn btn-primary" type="submit"> Add To About</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 justify-content-md-center mt-5">
        <div class="card bg-danger ">

            <div class="card-header">
                <h1  class="text-center text-white">Show About  Information Insert Or Update</h1>

            </div>
            <div class="card-body ">
                <table class="table table-striped text-white w-auto" >
                    <tr>

                        <th style="text-align: center">Photo</th>
                        <th style="text-align: center">Exam Name </th>
                        <th style="text-align: center">Exam Year</th>
                        <th style="text-align: center">Progressbar</th>
                        <th style="text-align: center">Exam Name </th>
                        <th style="text-align: center">Exam Year</th>
                        <th style="text-align: center">Progressbar</th>
                        <th style="text-align: center">Exam Name </th>
                        <th style="text-align: center">Exam Year</th>
                        <th style="text-align: center">Progressbar</th>
                        <th style="text-align: center">My About</th>
                    </tr>
                    <tr>
                        @if ($about_info!=null)


                        <td style=" width: 150px"><img src="{{asset('Uploads/about')}}/{{$about_info->about_profile}}" height="150" width="150" class="rounded-circle"></td>
                        <td style=" width: 100px">{{$about_info->exam_name1}}</td>
                        <td style=" width: 100px">{{$about_info->exam_year1}}</td>
                        <td style=" width: 100px">{{$about_info->progressbar1}}</td>
                        <td style=" width: 100px">{{$about_info->exam_name2}}</td>
                        <td style=" width: 100px">{{$about_info->exam_year2}}</td>
                        <td style=" width: 100px">{{$about_info->progressbar2}}</td>
                        <td style=" width: 100px">{{$about_info->exam_name3}}</td>
                        <td style=" width: 100px">{{$about_info->exam_year3}}</td>
                        <td style=" width: 100px">{{$about_info->progressbar3}}</td>

                        <td style="text-align: justify">{{$about_info->about}}</td>

                    </tr>
                    @endif
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
