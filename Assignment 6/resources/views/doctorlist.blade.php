<x-app-layout>
    <div class="flex flex-col w-screen min-h-screen p-10 mx-15 text-gray-800">
        <!-- Component Start -->
        <h1 class="text-3xl">Doctor List</h1>
        {{-- <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mt-6">
                <button class="relative text-sm focus:outline-none group mt-4 sm:mt-0">
                    <div
                        class="flex items-center justify-between w-40 h-10 px-3 border-2 border-gray-300 rounded hover:bg-gray-300">
                        <span class="font-medium">
                            Popular
                        </span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div
                        class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg rounded group-focus:flex">
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Popular</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Featured</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Newest</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Lowest Price</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Highest Price</a>
                    </div>
                </button>
        </div> --}}
        <div
            class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-12 w-full mt-6 justify-around">
            <!-- Product Tile Start -->
            @foreach ($doctor as $d)
                <div>
                    <a href="{{ route('form') }}" class="block h-90 rounded-lg shadow-lg bg-white"><img
                            src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-fit h-fit"></a>
                        <div class="flex items-center justify-start mt-3">
                            <div>
                                <a href="{{ route('form') }}" class="font-medium"> {{ $d->doctor_name }}</a>
                            </div>
                        </div>
                </div>
                <!-- Product Tile End -->
            @endforeach
        </div>
        <div class="my-20">
            <div class="flex justify-center space-x-1">
                <button class="flex items-center justify-center h-8 w-8 rounded text-gray-400">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="flex items-center justify-center h-8 px-2 rounded text-sm font-medium text-gray-400"
                    disabled>
                    Prev
                </button>
                <button
                    class="flex items-center justify-center h-8 w-8 rounded bg-indigo-200 text-sm font-medium text-indigo-600"
                    disabled>
                    1
                </button>
                <button
                    class="flex items-center justify-center h-8 w-8 rounded hover:bg-indigo-200 text-sm font-medium text-gray-600 hover:text-indigo-600">
                    2
                </button>
                <button
                    class="flex items-center justify-center h-8 w-8 rounded hover:bg-indigo-200 text-sm font-medium text-gray-600 hover:text-indigo-600">
                    3
                </button>
                <button
                    class="flex items-center justify-center h-8 px-2 rounded hover:bg-indigo-200 text-sm font-medium text-gray-600 hover:text-indigo-600">
                    Next
                </button>
                <button
                    class="flex items-center justify-center h-8 w-8 rounded hover:bg-indigo-200 text-gray-600 hover:text-indigo-600">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
    </div>

    {{-- </div> --}}
</x-app-layout>
