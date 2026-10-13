@extends('layouts.admin')

@section('admin_title', 'Buku Tamu')

@section('admin_content')
    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Daftar Pesan Tamu</h3>
                <span class="text-sm text-gray-500">{{ $daftar_pesan->total() }} pesan</span>
            </div>

            <div class="space-y-4">
                @forelse ($daftar_pesan as $pesan)
                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                            <div>
                                <h4 class="font-semibold text-gray-800">{{ $pesan->nama }}</h4>
                                <p class="text-sm text-gray-500">{{ $pesan->email }}</p>
                            </div>
                            <span class="text-xs text-gray-500">{{ $pesan->created_at->format('d M Y, H:i') }}</span>
                        </div>

                        <p class="mt-3 text-gray-700">{{ $pesan->pesan }}</p>

                        <div class="mt-4 flex justify-end">
                            <form action="{{ route('bukutamu.admin.destroy', $pesan) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-3 py-2 rounded-md">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                        <p>Belum ada pesan yang masuk.</p>
                    </div>
                @endforelse
            </div>

            @if ($daftar_pesan->hasPages())
                <div class="mt-6">
                    {{ $daftar_pesan->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection

