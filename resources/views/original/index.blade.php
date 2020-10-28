@extends('original.layout')

@section('title','INDEX')

@section('content')

    <a href="{{route('add')}}" class="btn btn-primary">add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">user</th>
                <th scope="col">title</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($things as $thing)
                <tr>
                    <th scope="row"><a href="{{route('show',['thing'=>$thing->id])}}">{{$thing->id}}</a></th>
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
                        <td class="toggle_like like" data-thing="{{$thing->id}}">
                            <a><span>{{count($thing->likes()->get())}}</span> <i class="fas fa-heart"></i></a>
                    @else
                        </td><td class="toggle_like" data-thing="{{$thing->id}}">
                            <a><span>{{count($thing->likes()->get())}}</span> <i class="fas fa-heart"></i></a>
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $things->links('vendor.pagination.bootstrap-4') }}
    </div>

@endsection
