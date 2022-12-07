<x-frontpage>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <section
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-10 gap-x-10 mt-10 mb-10">
        @foreach ($doctor as $d)
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <a href="/form/{{ $d->id_doctor }}">
                    <img src="{{ asset('assets/doctor.png') }}" alt="Doctor" class="h-80 w-72 object-cover object-top rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <p class="text-lg font-bold text-black truncate block capitalize">{{ $d->doctor_name }}</p>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-3 capitalize text-sm"> {{ $d->specialization }} </span>
                        </div>
                    </div>
                    <div
                    class="w-fit py-3 mx-auto">
                    <a href="/form/{{ $d->id_doctor }}"
                        class="group font-semibold block px-6 py-3 mb-3 rounded-2xl bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white transition duration-200 hover:shadow-2xl">
                        Reserve Now
                    </a>
                </div>
                </a>
            </div>
        @endforeach
        
    </section>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 my-8">

        {{ $doctor->links() }}
    </div>
    

</x-frontpage>
