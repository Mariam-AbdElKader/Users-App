<x-admin.layout title="Admin Users Panel">

    <x-slot:actions>
        <a href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-md shadow hover:scale-105 transition">Add
            User</a>
    </x-slot:actions>

    <!-- Table Section -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            {{-- <input type="text" placeholder="Search..." class="w-1/3 px-4 py-2 bg-gray-700 rounded-md" /> --}}
            {{-- <select class="px-4 py-2 bg-gray-700 rounded-md">
                <option>10</option>
                <option>20</option>
                <option>50</option>
            </select> --}}
        </div>

        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-700">
                    <th class="py-3 px-4">ID</th>
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Admin</th>
                    <th class="py-3 px-4">Phone</th>
                    <th class="py-3 px-4">Created</th>
                    <th class="py-3 px-4">Updated</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <x-admin.table.user-row :user="$user" />
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-between items-center mt-4">
            {{-- <span class="text-sm text-gray-400">Showing 1-10 of 50</span> --}}
            {{-- <div class="space-x-2">
                <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600">Prev</button>
                <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600">1</button>
                <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600">2</button>
                <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600">Next</button>
            </div> --}}
        </div>
    </div>

</x-admin.layout>
