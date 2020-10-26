@extends('original.layout')

@section('title','INDEX')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">user</th>
                <th scope="col">title</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($things as $thing)
            <tr>
                <th scope="row"><a href="{{route('show',['id'=>$thing->id])}}">{{$thing->id}}</a></th>
                <td><a href="{{route('user.index',['id'=>$thing->user_id])}}">{{$thing->user->name}}</a></td>
                <td>{{$thing->title}}</td>
                @if($thing->user_id==$user->id)
                <td><a href="{{route('edit',['id'=>$thing->id])}}">to edit</a></td>
                <td><a href="{{route('delete',['id'=>$thing->id])}}">to delete</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('add')}}" class="btn btn-primary">add</a>
@endsection
