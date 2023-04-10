@extends('layouts.master')
@section('title','Class')
@section('content')

    <div class="container mt-5">


                    <form action="/updateStudent" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="row">
                            <div class="col-6 mb-5">
                                <input type="text" class="form-control" placeholder="First name" value="{{$data['fname']}}" name="fname"
                                       aria-label="First name">
                            </div>
                            <div class="col-6 mb-5">
                                <input type="text" class="form-control" placeholder="Last name" value="{{$data['lname']}}" name="lname"
                                       aria-label="Last name">
                            </div>
                            <div class="col-md-6 mb-5">
                                 <input type="email" class="form-control" placeholder="ahsnakhan@gmail.com" value="{{$data['email']}}" name="email"
                                       id="inputEmail4">
                            </div>
                            <div class="col-md-6 mb-5">
                                <input type="text" class="form-control" placeholder="38101-39848u4-7" value="{{$data['cnic']}}" name="cnic"
                                       id="inputPassword4">
                            </div>
                            <div class="col-12 mb-5">
                                <input type="text" class="form-control" id="inputAddress" value="{{$data['address']}}" name="address"
                                       placeholder="Address:: 1234 Main St">
                            </div>
                            <div class="col-md-6 mb-5 ">
                                <input type="text" class="form-control" value="{{$data['country']}}" name="country"  placeholder="Country"
                                       id="inputCity">
                            </div>
                            <div class="col-md-4 mb-5">
                                <input type="text" class="form-control" value="{{$data['city']}}" name="city" placeholder="CITY" id="inputCity">
                            </div>
                            <div class="col-md-2 mb-5">
                                <input type="text" class="form-control" value="{{$data['post']}}" name="post" placeholder="30000" id="inputZip">
                            </div>
                            <div class="col-md-6 mb-5 ">
                                <input type="text" class="form-control" value="{{$data['pclass']}}" name="pclass" placeholder="Previous Class"
                                       id="inputCity">
                            </div>
                            <div class="col-md-4 mb-5">
                                <input type="text" class="form-control" value="{{$data['year']}}" name="year" placeholder="Year:2017-2019"
                                       id="inputCity">
                            </div>
                            <div class="col-md-2 mb-5">
                                <input type="text" class="form-control" value="{{$data['rollno']}}" name="rollno" placeholder="Roll No"
                                       id="inputZip">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>


                        </div>

                    </form>


                </div>
            </div>

        </div>


    </div>
@endsection
