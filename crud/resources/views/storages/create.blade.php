@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Create a new storage</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
    @endif
{{-- //storerà il tutto in store --}}
    <form action="{{ route('storages.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control" value="{{ old('name') }}"
                name="name" placeholder="class name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="{{ old('name') }}"
                name="description" placeholder="class description">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection