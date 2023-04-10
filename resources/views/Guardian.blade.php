@extends('layouts.master')
@section('title','guardian')
@section('content')

    <div class="container mt-5">
        <div class="col-xl-12">
            <div class="row mb-3">

                <div class="col-xl-6">
                    <img src="{{ asset('images/parents.jpg') }}"  height="500vh"  alt="No image">

                </div>
                <div class="col-xl-6">

                    <div class="row">
                        <div class="col">
                            <h2 class="text-center mb-5">Guardian Information</h2>
                            <div class="container">
                                <div class="container">
                                    <form action="guardian" method="post" class="was-validated ">
                                        @csrf
                                        <div class="">
                                            <label for="name">Father/Guardian Name:</label>
                                            <input type="text" class="form-control form-control-lg" id="f/gname"
                                                   placeholder="Father/Guardian" name="gname" required>
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control form-control-lg" id="email"
                                                   placeholder="Enter email" name="email" required>
                                            <label for="CNIC">CNIC:</label>
                                            <input type="text" class="form-control form-control-lg" id="CNIC"
                                                   placeholder="38101-87487349-3" name="cnic" required>
                                            <label for="Adress">Adress:</label>
                                            <input type="text" class="form-control form-control-lg" id="Address"
                                                   placeholder="@Adress i.e F.b/230 house number 230 street number 7 Mohalla "
                                                   name="address" required>
                                            <div class="form-group ">
                                                <label class="form-label">Father/Guardian occupation:</label>
                                                <div class="">
                                                    <select class="form-control " name="occpation">
                                                        <option>Private Job</option>
                                                        <option>Govt.Job</option>
                                                        <option>Business Man</option>
                                                        <option>Labour</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success mt-4">Submit</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                {{--                    ..................--}}


            </div>

        </div>

    </div>

@endsection
