<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartphone CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">Boolean Smartphone</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class ="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class ="nav-link" href="{{ route('storages.index') }}">Storages</a>
                </li>
                <li class="nav-item">
                    <a class ="nav-link" href="{{ route('storages.create') }}">Add Storage</a>
                </li>
            </ul>
        </nav>
    </header>
