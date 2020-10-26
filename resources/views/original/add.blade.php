@extends('original.layout')
@section('title','ADD')

@section('content')
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label>title:</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="">content:</label>
            <input class="form-control" type="text" name="content">
        </div>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="submit" class="btn btn-primary">add</button>
    </form>
@endsection
