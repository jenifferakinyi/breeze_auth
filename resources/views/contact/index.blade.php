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
