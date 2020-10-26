@extends('original.layout')

@section('title',$user->name)

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($things as $thing)
                <tr>
                    <th scope="row"><a href="{{route('show',['id'=>$thing->id])}}">{{$thing->id}}</a></th>
                    <td>{{$thing->title}}</td>
                    @if($user->id==\Illuminate\Support\Facades\Auth::id())
                        <td><a href="{{route('edit',['id'=>$thing->id])}}">to edit</a></td>
                        <td><a href="{{route('delete',['id'=>$thing->id])}}">to delete</a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('index')}}" class="btn btn-primary">to index</a>
@endsection
