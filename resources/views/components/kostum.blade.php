<div class=" border border-solid border-red-800 w-36 p-2 bg-white  rounded-lg h-fit">
    <img src={{ asset('storage/kostum/' . $kostum->foto) }} alt={{ $kostum->foto }}
        class="w-full h-31 object-cover object-center rounded-md">
    <div class="mt-1">
        <div class="mb-1 ">
            <h1 class=" text-base font-semibold text-red-800 leading-none">
                {{ $kostum->nama }}
            </h1>
            <p class="text-xs leading-none">Lok. {{ $kostum->lokasi }}</p>
        </div>
        <div class="text-gray-500 text-xs w-full flex items-center justify-between">
            <p>{{ $kostum->kondisi }}</p>
            <p>{{ $kostum->jumlah }}</p>
        </div>
    </div>
</div>
