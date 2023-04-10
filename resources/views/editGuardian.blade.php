@extends('layouts.master')
@section('title','Admin')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Father/Guardian Name</th>
            <th scope="col">Email</th>
            <th scope="col">CNIC</th>
            <th scope="col">Address</th>
            <th scope="col">Occupation</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['gname']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['cnic']}}</td>
                <td>{{$item['address']}}</td>
                <td>{{$item['occpation']}}</td>
                <td><a href={{"delt/".$item['id']}}>  Delete</a></td>
                <td><a href={{"new/".$item['id']}}>  Update</a></td>


            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
