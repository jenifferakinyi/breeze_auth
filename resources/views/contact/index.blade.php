@extends('layouts.base')
@section('content')
    {{-- use flowbite for the ui --}}
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Contact name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Organization
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- loop through the contacts and display them -->
                <!--check if the contacts is not empty -->
                <!--use the isset() function to check if the contacts variable is not empty -->
                {{-- @if (isset($contacts)) --}}
                @if ($contacts->isEmpty())
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4" colspan="4">
                            No contacts found.
                        </td>
                    </tr>
                @else
                    @foreach ($contacts as $contact)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{--  display contact first_name from the fillables --}}
                                {{ $contact->first_name }} {{ $contact->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{-- contact organization --}}
                                {{ $contact->organization->name }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection





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
                <th>Contact name</th>
                <th>Email</th>
                <th>phone</th>
                <th>organization</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deal)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td> {{ $contact->first_name }} {{ $contact->last_name }}</td>
                    <td>{{ $cotact->description }}</td>
                   
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
