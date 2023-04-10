@extends('layouts.master')
@section('title','guardian')
@section('content')

    <div class="d-flex justify-content-between mb-3">
        <div>
            <div class="card">
                <h5 class="card-header">Students</h5>
                <div class="card-body">
                    <h2 class="card-title">Total Students:</h2>
                    <h5 class="card-text">{{$items}}</h5>
                    <a href="/showstudent" class="btn btn-success">Show  </a>
                </div>
            </div>
        </div>


        <div>

            <div class="card">
                <h5 class="card-header">Class</h5>
                <div class="card-body">
                    <h2 class="card-title">Total Classes:</h2>
                    <h5 class="card-text">{{$data}}</h5>
                    <a href="/showclass" class="btn btn-success">show</a>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <h5 class="card-header">Guardian</h5>
                <div class="card-body">
                    <h2 class="card-title">Total Guardians:</h2>
                    <h5 class="card-text">{{$guardian}}</h5>
                    <a href="/showguardian" class="btn btn-success">show</a>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <h5 class="card-header">Teacher</h5>
                <div class="card-body">
                    <h2 class="card-title">Total Teachers:</h2>
                    <h5 class="card-text">{{$teacher}}</h5>
                    <a href="/showteacher" class="btn btn-success">show</a>
                </div>
            </div>
        </div>
    </div>



@endsection
