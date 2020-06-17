@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Homepage</h1>

    <section class="mobiles">
        <h2 class="text-primary">Smartphone List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mobiles as $mobile)
                    <tr>
                        <td>{{ $mobile->name }}</td>
                        <td>{{ $mobile->year }}</td>
                        <td>{{ $mobile->type }}</td>
                        <td>{{ $mobile->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection