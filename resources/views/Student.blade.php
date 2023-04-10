@extends('layouts.master')
@section('title','Class')
@section('content')

    <div class="container mt-5">
        <div class="col-xl-12">
            <div class="row mb-3">

                <div class="col-xl-6">
                    <img src="{{ asset('images/Student.jpg') }}" height="450vh" width="350px" alt="No image">

                </div>
                <div class="col-xl-6">
                    <form action="student" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-5">
                                <input type="text" class="form-control" placeholder="First name" name="fname"
                                       aria-label="First name">
                            </div>
                            <div class="col-6 mb-5">
                                <input type="text" class="form-control" placeholder="Last name" name="lname"
                                       aria-label="Last name">
                            </div>
                            <div class="col-md-6 mb-5">
                                <input type="email" class="form-control" placeholder="ahsnakhan@gmail.com" name="email"
                                       id="inputEmail4">
                            </div>
                            <div class="col-md-6 mb-5">
                                <input type="text" class="form-control" placeholder="38101-39848u4-7" name="cnic"
                                       id="inputPassword4">
                            </div>
                            <div class="col-12 mb-5">
                                <input type="text" class="form-control" id="inputAddress" name="address"
                                       placeholder="Address:: 1234 Main St">
                            </div>
                            <div class="col-md-6 mb-5 ">
                                <input type="text" class="form-control" name="country" placeholder="Country"
                                       id="inputCity">
                            </div>
                            <div class="col-md-4 mb-5">
                                <input type="text" class="form-control" name="city" placeholder="CITY" id="inputCity">
                            </div>
                            <div class="col-md-2 mb-5">
                                <input type="text" class="form-control" name="post" placeholder="30000" id="inputZip">
                            </div>
                            <div class="col-md-6 mb-5 ">
{{--                                ===========================--}}
                                <select class="form-control " name="pclass">
                                    <option>Information Technologies</option>
                                    <option>Computer Science</option>
                                    <option>Psychology</option>
                                </select>

{{--                               =============================--}}
{{--                                <input type="text" class="form-control" name="pclass" placeholder="Previous Class"--}}
{{--                                       id="inputCity">--}}
                            </div>
                            <div class="col-md-4 mb-5">
                                <input type="text" class="form-control" name="year" placeholder="Year:2017-2019"
                                       id="inputCity">
                            </div>
                            <div class="col-md-2 mb-5">
                                <input type="text" class="form-control" name="rollno" placeholder="Roll No"
                                       id="inputZip">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>


                        </div>

                    </form>


                </div>
            </div>

        </div>


    </div>
    </div>
    </div>

@endsection
