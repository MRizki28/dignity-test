<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Flash message -->
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-red-400 text-left">ID</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Gender</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Birthdate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patientsx as $p)
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-300 px-4 py-2">{{ $p->id }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $p->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        @if ($p->gender === 'male')
                                            Male
                                        @elseif ($p->gender === 'female')
                                            Female
                                        @else
                                            Unknown
                                        @endif
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ \Carbon\Carbon::parse($p->birthdate)->format('d M Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <a href="/patients/create"
                            class="inline-block border border-green-600 px-4 py-2 rounded-2xl text-green-700 hover:bg-green-200 transition">
                            Add Patient
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
