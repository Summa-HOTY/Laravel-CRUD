<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Auto toevoegen
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-900">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Toevoegen</h3>
                </div>

                <form class="px-6" action="{{ route('cars.store') }}" method="POST">
                    @csrf

                    <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <label for="license_plate" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kenteken</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <input type="text" name="license_plate" id="license_plate" autocomplete="license_plate" maxlength="6" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <label for="brand" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Merk</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <input type="text" name="brand" id="brand" autocomplete="brand" maxlength="25" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <label for="color" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Kleur</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <input type="text" name="color" id="color" autocomplete="color" maxlength="25" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <label for="construction_year" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Bouwjaar</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <input type="number" name="construction_year" id="construction_year" autocomplete="construction_year" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <label for="owner_name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Eigenaar</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <input type="text" name="owner_name" id="owner_name" autocomplete="owner_name" maxlength="75" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="float-right ml-2 mt-3 flex items-center justify-end gap-x-6">
                        <button type="reset" class="inline-flex justify-center rounded-md text-indigo-600 outline-indigo-600 px-3 py-2 text-sm font-semibold shadow-sm hover:text-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Annuleren
                        </button>
                    </div>

                    <div class="float-right mt-3 flex items-center justify-end gap-x-6">
                        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Toevoegen
                        </button>
                    </div>
                    <br>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
