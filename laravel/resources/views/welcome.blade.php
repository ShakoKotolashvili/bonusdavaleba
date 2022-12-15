@extends('layout')
@section('title','Posts')

@section('body')
    @foreach ($rows as $row)
        @if (isset($row))
            <div style="background-color:dodgerblue; margin: 20px 10px; padding:5px; display:inline-block; width:25%; border-radius:10px">
                <h1 >{{$row->title}}</h1>
                <p style="padding-left: 20px; color:rgb(39, 39, 39)">{{$row->body}}</p>
                <h3 style="color:rgb(39, 39, 39); text-align: end">{{$row->author}}</h3>
            </div>
        @else
            <h1>No Posts Found</h1>
        @endif
    
    @endforeach
@endsection