@extends('layouts.master')
@section('title','Class')
@section('content')




    <div class="container mt-5 ">
        <!-- some text here its just comments -->
        <h2 class="text-center mb-4">Class</h2>
        <div class="d-flex justify-content-center col-12" >
            <div class="row " >
                <form action="/class" class=" was-validated"  method="post">
                    @csrf
                    <div  >
                        <div class="col-12 form-outline form-white">
{{--                            =====================================--}}
                            <select class="mb-4 form-control form-control-lg" name="class" id="" required>
                                <option>Information Technologies</option>
                                <option>Computer Science</option>
                                <option>Psychology</option>
                            </select>

                            {{--                            ========================================--}}
{{--                            <input type="text" class="mb-4 form-control form-control-lg" placeholder="Class Name" name="class" id="" required>--}}
                        </div>
                        <!-- <div class=" mb-4 mt-4 col-12 form-outline form-white">
                            <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="" id="" required>
                        </div> -->
                        <div class="col-12 form-outline form-white">
                            <input type="text" name="allowed"  class="form-control form-control-lg input-number text-secondary" placeholder="Class Strnghth" min="1" max="50"  >
                        </div>
                        <button style="position: relative;left: 10px"  type="submit" class="   btn btn-success btn-lg  text-light mt-4"  >Submit</button>
                    </div>
                </form>

            </div>



@endsection
