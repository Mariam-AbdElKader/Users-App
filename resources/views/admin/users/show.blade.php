<x-admin.layout title="User Profile #{{ $user->id }}">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-gray-800 rounded-xl shadow-xl">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-white">{{ $user->name }}</h1>
            <div class="flex space-x-3">
                <a href="{{ route('admin.users.edit', $user) }}"
                   class="px-5 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-lg shadow hover:scale-105 transition">
                   Edit
                </a>
                @if ($user->id !== auth()->user()->id)
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-5 py-2 bg-red-600 text-white rounded-lg shadow hover:scale-105 transition">
                            Delete
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <!-- User Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <p class="text-gray-400 font-medium">Email</p>
                <p class="text-white break-words">{{ $user->email }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-gray-400 font-medium">Phone</p>
                <p class="text-white">{{ $user->country_code . ' ' . $user->phone }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-gray-400 font-medium">Role</p>
                @if ($user->is_admin)
                    <span class="px-3 py-1 inline-block bg-green-600 text-white rounded-full text-sm font-semibold">Admin</span>
                @else
                    <span class="px-3 py-1 inline-block bg-red-600 text-white rounded-full text-sm font-semibold">Client</span>
                @endif
            </div>
            <div class="space-y-2">
                <p class="text-gray-400 font-medium">Joined</p>
                <p class="text-white">{{ $user->created_at->format('M d, Y h:i A') }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-gray-400 font-medium">Last Updated</p>
                <p class="text-white">{{ $user->updated_at->format('M d, Y h:i A') }}</p>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-8">
            <a href="{{ route('admin.users.index') }}"
               class="px-6 py-2 bg-gray-700 text-gray-200 rounded-lg shadow hover:scale-105 transition">
               Back to Users
            </a>
        </div>
    </div>

    <x-admin.login-histories.table :user="$user" />
</x-admin.layout>


