@extends('components.layout', ['heading' => $heading])

@section('slot')
    <div class="w-full h-full">
        <div class="flex flex-col items-center px-6 mx-auto">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 w-full">
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST" novalidate>
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="example@domain.com">
                            @error('email')
                                <div class="text-red-800 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasło</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="••••••••">
                            @error('password')
                                <div class="text-red-800 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Zaloguj</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Chcesz założyć konto? <a href="/register"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Zarejestruj się!</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
