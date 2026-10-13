@extends('layouts.admin')

@section('admin_title', 'Pengaturan Website')

@section('admin_content')
    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-6 text-gray-800">Konfigurasi Website</h3>
            
            <form action="{{ route('settings.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    @foreach($settings as $setting)
                        <div class="border-b border-gray-200 pb-6 last:border-b-0">
                            <label for="setting_{{ $setting->key }}" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                            </label>
                            
                            @if($setting->description)
                                <p class="text-sm text-gray-500 mb-3">{{ $setting->description }}</p>
                            @endif

                            @if($setting->type === 'number')
                                <input type="number" id="setting_{{ $setting->key }}" name="settings[{{ $setting->key }}]" value="{{ old('settings.' . $setting->key, $setting->value) }}" min="1" max="50" class="mt-1 block w-full md:w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                            @elseif($setting->type === 'boolean')
                                <select id="setting_{{ $setting->key }}" name="settings[{{ $setting->key }}]" class="mt-1 block w-full md:w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option value="1" {{ $setting->value == '1' ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ $setting->value == '0' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            @else
                                <input type="text" id="setting_{{ $setting->key }}" name="settings[{{ $setting->key }}]" value="{{ old('settings.' . $setting->key, $setting->value) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 flex items-center justify-between">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
