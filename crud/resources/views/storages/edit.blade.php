@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Edit</h1>

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
    <form action="{{ route('storages.update', $storage->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" value="{{ old('name', $storage->name) }}"
                name="name" id="name" placeholder="class name">
        </div>
        <div class="form-group">
            <label for="description">Description *</label>

            {{-- se non trova description da passare in old metti il default --}}
            <input type="text" class="form-control" value="{{ old('description', $storage->description) }}"
                name="description" id="description" placeholder="class description">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection