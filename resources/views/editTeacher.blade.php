@extends('layouts.master')
@section('title','Admin')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">CNIC</th>
            <th scope="col">Specelization</th>
            <th scope="col">Class</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['fname']}}</td>
                <td>{{$item['lname']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['cnic']}}</td>
                <td>{{$item['Specelization']}}</td>
                <td>{{$item['class']}}</td>
                <td><a href={{"delet/".$item['id']}}>  Delete</a></td>
                <td><a href={{"update/".$item['id']}}>  Update</a></td>


            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
