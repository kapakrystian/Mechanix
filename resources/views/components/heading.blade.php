{{-- @props(['addClientButton' => false]) --}}

<div class="bg-gray-800 pt-6">
    <div
        class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-5 shadow text-2xl text-white justify-between flex items-center">
        <h1 class="font-bold pl-2">{{ $slot }}</h1>
        <div class="flex justify-end items-center space-x-4">
            <!-- CONDITION FOR DISPLAYING SERACH BAR -->
            @if (isset($searchBar) && $searchBar === true)
                <div>
                    @include('components.search-bar')
                </div>
            @endif
            <!-- CONDITION FOR DISPLAYING ADD CLIENT BUTTON -->
            @if (isset($addClientButton) && $addClientButton === true)
                <div class="mr-8 my-2 addClientButton">
                    <x-navbar-link href="#" onclick="openModal()">Nowy klient</x-navbar-link>
                </div>
            @endif
        </div>

    </div>
</div>
