<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mechanix</title>
    <meta name="author" content="Krystian Kapa">
    <meta name="description" content="An application supporting the work of a car repair shop">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href={{ asset('css/layout.css') }}>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>

<body class="font-sans w-full">
    <header>
        <!--NAVIGATION-->
        <nav aria-label="menu nav"
            class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 fixed w-full z-20 top-0 flex justify-between items-center">

            <!--LOGO-->
            <div class="flex justify-start text-white">
                <a href="#" aria-label="Home">
                    <span class="text-xl pl-6 font-bold">MECHANIX</span>
                </a>
            </div>

            <!--USER MENU DROPDOWN-->
            <div class="flex py-2">
                <ul class="flex flex-1 md:flex-none">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span
                                    class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg
                                    class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg></button>
                            <div id="myDropdown"
                                class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <a href="#"
                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                        class="fa fa-user fa-fw"></i> Profile</a>
                                <div class="border border-gray-800"></div>
                                <a href="#"
                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                        class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <main>
        <!-- SIDE MENU-->
        <div class="flex flex-col md:flex-row w-full min-h-screen">
            <nav aria-label="alternative nav" class="alternative-nav">
                <div class="bg-gray-800 shadow-xl md:relative h-full z-10 w-full md:w-48 content-center">

                    <div
                        class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                        <ul
                            class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left mt-2">
                            <x-sidebar-link href="/clients" :active="request()->is('clients')">Klienci</x-sidebar-link>
                            <x-sidebar-link href="/services" :active="request()->is('services')">Usługi</x-sidebar-link>
                            <x-sidebar-link href="/parts" :active="request()->is('parts')">Części</x-sidebar-link>
                            <x-sidebar-link href="/payments" :active="request()->is('payments')">Płatności</x-sidebar-link>
                        </ul>
                    </div>

                </div>
            </nav>

            <!--MAIN SECTION-->
            <section class="w-full">
                <div id="main" class="main-content bg-gray-100">

                    <!--HEADING-->
                    <x-heading>Heading</x-heading>

                    <!--MAIN CONTENT-->
                    <div class="flex flex-wrap py-4 px-7">
                        {{ $slot }}
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="{{ asset('js/scripts/userMenuDropdown.js') }}"></script>

</body>

</html>
