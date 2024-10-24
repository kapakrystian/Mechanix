{{-- @props(['addClientButton' => false]) --}}

<div class="bg-gray-800 pt-6">
    <div
        class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-5 shadow text-2xl text-white flex justify-between items-center">
        <h1 class="font-bold pl-2">{{ $slot }}</h1>
        <div class="mr-8 my-2">
            @if (isset($addClientButton) && $addClientButton === true)
                <x-navbar-link href="#" onclick="openModal()">Nowy klient</x-navbar-link>
            @endif
        </div>
    </div>
</div>
