<div class="px-4 sm:px-6 lg:px-8 mt-10">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">View Our Pet Directory</h1>
            <p class="mt-2 text-sm text-gray-700">A directory of company pets, don't mind that we all enjoy similar breeds!</p>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr class="divide-x divide-gray-200">
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm font-semibold text-gray-900 sm:pl-6">Pet Name</th>
                            <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Age</th>
                            <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Breed</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($pets as $pet)
                                <tr class="divide-x divide-gray-200">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                        <a class="hover:text-blue-700" href="/pets/{{ $pet->id }}" alt="Pet Details for {{ $pet->name }}"> {{ $pet->name }} </a>
                                    </td>
                                    <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($pet->date_of_birth)->diffForHumans(null, true) }} old</td>
                                    <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{ $pet->breed->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
            <div class="pt-5">
                {{ $pets->links() }}
            </div>
        </div>
    </div>
</div>
