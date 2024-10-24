@extends('components.layout')

@section('slot')
    @foreach ($clients as $client)
        <div
            class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $client['first_name'] . ' ' . $client['last_name'] }}
            </h5>
            <div class="border border-blue-600"></div>
            <p class="mt-3 font-normal text-gray-700 dark:text-gray-400">Email: {{ $client['email'] }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Numer: {{ $client['phone'] }}</p>
            <a href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg
                hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Więcej
            </a>
        </div>
    @endforeach
@endsection
