@extends('original.layout')

@section('title','EDIT')

@section('content')
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label>title:</label>
            <input class="form-control" type="text" name="title" value="{{$thing->title}}">
        </div>
        <div class="form-group">
            <label for="">content:</label>
            <input class="form-control" type="text" name="content" value="{{$thing->content}}">
        </div>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="submit" class="btn btn-primary">edit</button>
    </form>
@endsection
