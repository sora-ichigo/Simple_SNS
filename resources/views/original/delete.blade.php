@extends('original.layout')

@section('title','DELETE')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$thing->id}}</th>
                <td>{{$thing->title}}</td>
                <td>{{$thing->content}}</td>
            </tr>
        </tbody>
    </table>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="delete">
        <button type="submit" class="btn btn-primary">delete</button>
    </form>

@endsection

