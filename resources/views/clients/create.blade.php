<!--ADD NEW CLIENT MODAL-->
<div id="addClientModal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!--MODAL CONTENT-->
        <div class="relative bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <!--MODAL HEADER-->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    UTWÓRZ NOWEGO KLIENTA
                </h3>
                <button type="button" onclick="closeModal()"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900
                    rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="addClientModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!--MODAL BODY-->
            <div class="p-4 md:p-5">
                <form class="space-y-5" action="/clients" method="POST">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imię</label>
                        <input type="text" name="first_name" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Jan" required />
                    </div>
                    <div>
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nazwisko</label>
                        <input type="text" name="last_name" id="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Kowalski" required />
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="example@doamin.com" required />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numer telefonu</label>
                        <input type="text" name="phone" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="123456789" required />
                    </div>
                    <div></div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
                        rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">DODAJ KLIENTA
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--MODAL BACKGROUND-->
<div id="modalBackground" class="fixed inset-0 bg-black bg-opacity-70 hidden"></div>
