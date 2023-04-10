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
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">City</th>
            <th scope="col">Postal Address</th>
            <th scope="col">Previous Class</th>
            <th scope="col">Year</th>
            <th scope="col">Roll No</th>
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
                <td>{{$item['address']}}</td>
                <td>{{$item['country']}}</td>
                <td>{{$item['city']}}</td>
                <td>{{$item['post']}}</td>
                <td>{{$item['pclass']}}</td>
                <td>{{$item['year']}}</td>
                <td>{{$item['rollno']}}</td>
                <td class="">
                    <a href={{"delete/".$item['id']}}>  Delete</a>
                </td>
                <td>
                    <a href={{"edit/".$item['id']}}>  Update</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
