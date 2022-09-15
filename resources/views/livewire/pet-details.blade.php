<div>
    <div class="sm:flex sm:items-center mt-5">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">View Details on Registered Pet <span class="text-bold text-xl">{{ $pet->name }}</span></h1>
            <p class="mt-2 text-sm text-gray-700">A directory of company pets, don't mind that we all enjoy similar breeds!</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-7xl flex-grow lg:flex xl:px-8 pt-5">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-3 gap-6 md:grid-cols-2 sm:grid-cols-1">
                <div
                    class="flex justify-center p-6  bg-gray-100 border-2 border-gray-300 rounded-xl"
                >
                    <div>
                        <span class="text-xl underline">Pet Details</span>
                        <p class="pt-5">
                            <span class="font-bold text-right">Name:</span>
                            {{ $pet->name }}
                        </p>
                        <p class="pt-2">
                            <span class="font-bold text-right">Date of Birth:</span>
                            {{ \Carbon\Carbon::parse($pet->date_of_birth)->format('m/d/Y') }}
                        </p>
                        <p class="pt-2">
                            <span class="font-bold text-right">Age:</span>
                            {{ \Carbon\Carbon::parse($pet->date_of_birth)->diffForHumans(null, true) }} old
                        </p>
                        <p class="pt-2">
                            <span class="font-bold text-right">Breed:</span>
                            {{ $pet->breed->name }}
                        </p>
                    </div>
                </div>
                <div
                    class="flex justify-center p-6  bg-gray-100 border-2 border-gray-300 rounded-xl"
                >
                    <div>
                        <span class="text-xl underline">Pet Owner</span>
                        <p class="pt-5">
                            <span class="font-bold text-right">Name:</span>
                            {{ $pet->owner_name }}
                        </p>
                    </div>

                </div>
                <div
                    class="flex justify-center p-6  bg-gray-100 border-2 border-gray-300 rounded-xl"
                >
                    <div>
                        <span class="text-xl underline">Breed Details</span>
                        <p class="pt-5">
                            <span class="font-bold text-right">Name:</span>
                            {{ $pet->breed->name }}
                        </p>
                        <p class="pt-2">
                            {{ $pet->breed->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto text-center w-full my-10">
        <a href="{{route('pets_index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </a>
    </div>
</div>
