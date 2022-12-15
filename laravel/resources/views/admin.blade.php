@extends('layout')
@section('title','Admin')

@section('body')
    
    <table class="table table-primary table-striped table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Active</th>
                <th>Edit</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($rows as $row)
                @if(isset($row))
                    <tr>
                        <td>{{$row->title}}</td>
                        <td>{{$row->body}}</td>
                        <td>{{$row->author}}</td>
                        <td>{{$row->active}}</td>
                        <td>
                            <form method="POST" style="display: inline-block">
                            @csrf
                            <input type="text" name="title" placeholder="Title" value="{{$row->title}}">
                            <input type="text" name="body" placeholder="Body" value="{{$row->body}}">
                            <input type="text" name="author" placeholder="Author" value="{{$row->author}}">
                            <input size="5" type="number" name="active" placeholder="Active" value="{{$row->active}}">
                            <button type="submit" class="btn btn-primary" name="id" value="{{$row->id}}">Change</button>
                            </form>
                            <a href="{{route('delete', ['post' => $row])}}"> <button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>    
                @else
                    <h1>No Products Found</h1>
                @endif
            @endforeach

        </tbody>

    </table>

    <hr>
    <h3>Create Element</h3>
        <form method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="body" placeholder="Body">
        <input type="text" name="author" placeholder="Author">
        <input type="number" name="active" placeholder="Active">
        <button type="submit" class="btn btn-success">Create</button>
        </form>


@endsection