@extends('components.layout')

@section('slot')
    <!-- CONDITION FOR DISPLAYING BACK BUTTON -->
    @if (isset($backButton) && $backButton === true)
        <div class="w-full mb-4">
            <a href="/clients" class="underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l9-9m-9 9l9 9" />
                </svg>
                <span>Powrót</span>
            </a>
        </div>
    @endif
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

    <!--PAGINATION-->
    <div class="pagination">
        {{ $clients->links() }}
    </div>

    <!--LOADING ADD NEW CLIENT MODAL FORM-->
    @include('clients.create')
@endsection

<!--MODAL SCRIPTS-->
<script src="{{ asset('js/scripts/addClientModal.js') }}"></script>
