@php
    $types = [
        'success' => [
            'color' => 'bg-gradient-to-r from-green-600 to-green-500 border-green-800',
            'icon'  => 'fa-solid fa-circle-check',
        ],
        'error' => [
            'color' => 'bg-gradient-to-r from-red-600 to-red-500 border-red-800',
            'icon'  => 'fa-solid fa-circle-xmark',
        ],
        'warning' => [
            'color' => 'bg-gradient-to-r from-yellow-600 to-yellow-500 border-yellow-800',
            'icon'  => 'fa-solid fa-triangle-exclamation',
        ],
        'info' => [
            'color' => 'bg-gradient-to-r from-blue-600 to-blue-500 border-blue-800',
            'icon'  => 'fa-solid fa-circle-info',
        ],
    ];
@endphp

@foreach(['success', 'error', 'warning', 'info'] as $type)
    @if(session($type))
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 5000)"
            class="fixed top-5 right-5 z-50 w-80 p-4 rounded-lg shadow-lg text-white flex items-center justify-between space-x-4 border {{ $types[$type]['color'] }}"
        >
            <div class="flex items-center space-x-3">
                <i class="{{ $types[$type]['icon'] }} text-xl"></i>
                <span class="text-sm font-medium">{{ session($type) }}</span>
            </div>
            <button @click="show = false" class="text-white hover:text-gray-200 text-xl">&times;</button>
        </div>
    @endif
@endforeach
