{{-- <!-- resources/views/deals/index.blade.php -->

@extends('layouts\base')

@section('content')
    <h1>Deals</h1><br><br>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deal)
                <tr>
                    <td>{{ $deal->id }}</td>
                    <td>{{ $deal->title }}</td>
                    <td>{{ $deal->description }}</td>
                   
                    <td>
                        <a href="{{ route('deals.show', $deal->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('deals.edit', $deal->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('deals.create') }}" class="btn btn-success">Create Deal</a>
@endsection --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family:'Roboto', sans-serif ;
            margin: 20px;
        }


        .dashboard-container {
            display: flex;
            flex-direction: column;
        }

        .crud-section {
            flex: 1;
            margin-right: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 5px;
        }

        .btn-danger {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    @extends('layouts\base')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>OrganizatioN</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deal)
                <tr>
                    <td>{{ $deal->id }}</td>
                    <td>{{ $deal->title }}</td>
                    <td>{{ $deal->description }}</td>
                    <td>{{ $deal->organization->name}}</td>
                   
                    <td>
                        <a href="{{ route('deals.show', $deal->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('deals.edit', $deal->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('deals.destroy', $deal->id) }}" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table><br><br>
    <a href="{{ route('deals.create') }}" class="btn btn-success">Create Deal</a>
@endsection
</body>
</html>