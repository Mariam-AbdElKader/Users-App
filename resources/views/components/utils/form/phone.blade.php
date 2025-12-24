@php
    $countries = PragmaRX\Countries\Package\Countries::all();
@endphp
<div class="mb-4">
    <label for="phone" class="block text-gray-300 mb-2">Phone</label>

    <div class="flex items-center gap-3">
        <!-- Country Code -->
        <select name="country_code" id="country_code"
            class="px-3 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 w-32">
            @foreach ($countries as $country)
                @if (!empty($country->calling_codes[0]))
                    <option value="{{ $country->calling_codes[0] }}"
                        {{ old('country_code', $user->country_code ?? '+20') == $country->calling_codes[0] ? 'selected' : '' }}>
                        {{ $country->cca2 }} {{ $country->calling_codes[0] }}
                    </option>
                @endif
            @endforeach
        </select>

        <!-- Phone -->
        <input type="tel" name="phone" id="phone" maxlength="20"
            class="flex-1 px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
            oninput="this.value = this.value.replace(/[^0-9]/g, '')" required
            value="{{ old('phone', $user->phone ?? '') }}">
    </div>

    @error('phone')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
