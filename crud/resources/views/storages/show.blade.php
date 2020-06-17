@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">{{$storage->name}}</h1>


    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$storage->id}}
        </li>
        <li class="list-group-item">
            Created At: {{$storage->created_at}}
        </li>
        <li class="list-group-item">
            Updated At: {{$storage->updated_at}}
        </li>
        <li class="list-group-item">
            Description: {{$storage->description}}
        </li>
    </ul>



@endsection