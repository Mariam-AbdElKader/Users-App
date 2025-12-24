<x-admin.layout title="Login">
    @error('login')
        <div class="max-w-md mx-auto bg-red-600 text-white p-4 rounded-lg mb-6">
            <ul class="list-disc list-inside">
                <li>{{ $message }}</li>
            </ul>
        </div>
    @enderror
    <form method="POST" action="{{ route('authenticate') }}"
        class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-300 mb-2">Email</label>
            <input type="text" name="email" id="email" required
                class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
                value="{{ old('email') }}">
        </div>
        @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
        <div class="mb-6">
            <label for="password" class="block text-gray-300 mb-2">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-gray-300">Remember Me</label>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-md shadow hover:scale-105 transition">Login</button>
        </div>
    </form>
    </x-client.layout>
