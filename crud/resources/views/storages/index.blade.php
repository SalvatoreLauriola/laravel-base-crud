@extends('layouts.main')

@section('main-content')
{{-- Se c'è la session attiva lui mostra il banner al delete --}}
@if (session('deleted'))
    <div class="alert alert-success">
        {{ session('deleted') }} Succesfully Deleted.
    </div>
@endif
    <h1 class="mb-4">Storages</h1>

    <section class="storages">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>ID</th>
                    <th>ID</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($storages as $storage)
                    <tr>
                        <td>{{ $storage->id }}</td>
                        <td>{{ $storage->name }}</td>
                        <td>                                                
                            <a class="btn btn-success "href="{{ route('storages.show', $storage->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('storages.edit', $storage->id) }}">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('storages.destroy', $storage ->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection