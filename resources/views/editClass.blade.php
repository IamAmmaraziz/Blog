@extends('layouts.master')
@section('title','Admin')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class</th>
            <th scope="col">Allowed</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['class']}}</td>
                <td>{{$item['allowed']}}</td>
                <td><a href="{{'delte/'.$item['id']}}">  Delete</a></td>
                <td><a href="{{'updated/'.$item['id']}}">  Update</a></td>


            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
