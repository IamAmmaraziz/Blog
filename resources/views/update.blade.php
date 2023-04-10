@extends('layouts.master')
@section('title','Class')
@section('content')

    <div class="container-fluid mt-3 ">
        <div class="row">
            <div class="col-3   "></div>
            <div style="padding-top: 120px" class="col  text-secondary">
                <h4 class="text-center mb-4">Teacher Information</h4>

                <form action="/updateteacher" method="post" class="was-validated">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row" >
                        <div class="col form-outline form-white">
                            <input type="text" class="form-control form-control-lg" placeholder="First Name" value="{{$data['fname']}}" name="fname" id="" required>
                        </div>
                        <div class="col form-outline form-white">
                            <input type="text" class="form-control form-control-lg" placeholder="Last Name" value="{{$data['lname']}}" name="lname" id="lname" required>
                        </div>
                    </div>
                    <div class="row mt-4" >
                        <div class="col">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" value="{{$data['email']}}" name="email" id="" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="CNIC" value="{{$data['cnic']}}" name="cnic" id="cnic" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Specelization" value="{{$data['Specelization']}}" name="Specelization" id="" required>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <div class="col">
                                    <select class="form-control" value="{{$data['class']}}" name="class" >
                                        <option>Select</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </div>
                    </div>


                </form>


            </div>
            <div class="col-3   "></div>
        </div>
    </div>


@endsection
