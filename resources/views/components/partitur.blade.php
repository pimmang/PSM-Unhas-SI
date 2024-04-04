<div
    class="mb-6 bg-slate-50 text-sm w-full justify-between flex gap-4 items-center border-solid shadow-md rounded-xl px-2 py-2">
    <div class=" flex items-center gap-2">
        <div class="w-10 h-10 rounded-lg bg-red-700 flex items-center justify-center">
            <p class="font-semibold text-white text-sm">{{ $partitur->lokasi }}</p>
        </div>
        <div>
            <p class="font-bold text-slate-900 text-sm leading-3">{{ $partitur->judul }}</p>
            <p class="text-2xs leading-none text-slate-500">Jml. {{ $partitur->jumlah }}</p>
        </div>
    </div>
    {{-- <i
        class="ph ph-plus font-bold text-md flex items-center justify-center w-7 h-7 text-red-800 border-solid border-2 border-red-700 p-2 rounded-lg"></i> --}}
</div>
