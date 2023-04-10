@extends('layouts.master')
@section('title','Admin')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class</th>
            <th scope="col">Allowed</th>
                  </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['class']}}</td>
                <td>{{$item['allowed']}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
