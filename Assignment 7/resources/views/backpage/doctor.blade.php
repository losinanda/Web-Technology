<x-backpage>
    <div class="w-full mt-5">
        <p class="text-xl pb-4 flex items-center">
            Doctor List
        </p>
        <div class="flex">
            <a href="{{ route('admin_adddoctor') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                data</a>
        </div>
        <div class="bg-white overflow-auto mb-6">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            No.</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Name</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Specialization</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Description</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Action</th>
                    </tr>
                </thead>
                {{-- @php
                    $no = 1;
                @endphp --}}
                <tbody>
                    @foreach ($doctor as $key => $d)
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light"> {{ ($doctor->currentpage()-1) * $doctor->perpage() + $key + 1 }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $d->doctor_name }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $d->specialization }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $d->doctor_desc }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                <div class="flex">
                                    <a href="/admin/edit_doctor/{{ $d->id_doctor }}"
                                        class="text-white text-center bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-600 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-4 dark:bg-yellow-500 dark:hover:bg-yellow-600 focus:outline-none dark:focus:ring-yellow-600"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="/admin/delete_doctor/{{ $d->id_doctor }}"
                                        onclick="return confirm('Are you sure want to delete the data?');"
                                        class="text-white text-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-4 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"><i
                                            class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $doctor->links() }}
    </div>
</x-backpage>
