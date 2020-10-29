@extends('original.layout')

@section('title','SHOW')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">user</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <tr>
                <th scope="row">{{$thing->id}}</th>
                <td><a href="{{route('user.index',['user'=>$thing->user_id])}}">{{$thing->user->name}}</a></td>
                <td>{{$thing->title}}</td>
                @if($thing->user_id==$user->id)
                    <td><a href="{{route('edit',['thing'=>$thing->id])}}">to edit</a></td>
                    <td><a href="{{route('delete',['thing'=>$thing->id])}}">to delete</a></td>
                @else
                    <td></td>
                    <td></td>
                @endif

                @if(App\Models\Like::is_like($thing->id,\Illuminate\Support\Facades\Auth::id()))
                    <td class="toggle_like like" data-thing="{{$thing->id}}" data-route="{{route('like')}}">
                        <a><span>{{count($thing->likes()->get())}}</span> <i class="fas fa-heart"></i></a>
                        @else
                    </td><td class="toggle_like" data-thing="{{$thing->id}}"  data-route="{{route('like')}}">
                        <a><span>{{count($thing->likes()->get())}}</span> <i class="fas fa-heart"></i></a>
                    </td>
                @endif
            </tr>
        </tbody>
    </table>

    <a href="{{route('index')}}" class="btn btn-primary">to index</a>
@endsection

