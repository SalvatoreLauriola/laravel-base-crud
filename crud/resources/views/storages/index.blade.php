@extends('layouts.main')

@section('main-content')
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
                        <td>{{ storage->id }}</td>
                        <td>{{ storage->name }}</td>
                        <td>SHOW</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection