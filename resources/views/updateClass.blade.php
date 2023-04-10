@extends('layouts.master')
@section('title','Class')
@section('content')

    <div class="container mt-5 ">
        <h2 class="text-center mb-4">Class</h2>
        <div class="d-flex justify-content-center col-12" >
            <div class="row " >
                <form action="/updateclass" class=" was-validated"  method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">

                    <div  >
                        <div class="col-12 form-outline form-white">
                            <input type="text" class="mb-4 form-control form-control-lg" placeholder="Class Name" value="{{$data['class']}}" name="class" id="" required>
                        </div>
                        <!-- <div class=" mb-4 mt-4 col-12 form-outline form-white">
                            <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="" id="" required>
                        </div> -->
                        <div class="col-12 form-outline form-white">
                            <input type="text" value="{{$data['allowed']}}" name="allowed"  class="form-control form-control-lg input-number text-secondary" placeholder="Class Strnghth" min="1" max="50"  >
                        </div>
                        <button style="position: relative;left: 10px"  type="submit" class="   btn btn-success btn-lg  text-light mt-4"  >Submit</button>
                    </div>
                </form>

            </div>



@endsection
