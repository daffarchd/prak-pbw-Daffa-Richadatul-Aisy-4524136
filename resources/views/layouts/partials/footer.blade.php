<footer class="bg-white border-t border-gray-200 mt-10">
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-3 text-sm text-gray-600">
            <p>© {{ date('Y') }} SMP Mentari. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ url('/bukutamu') }}" class="hover:text-blue-600">Buku Tamu</a>
            </div>
        </div>
    </div>
</footer>
