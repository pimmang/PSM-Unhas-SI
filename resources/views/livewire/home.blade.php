<div class="w-full">
    {{-- @php
        dd($partiturs);
    @endphp --}}
    <div class="relative gap-5  w-full bg-red-500 rounded-b-3xl h-72">
        <div class=" overflow-hidden z-50 absolute p-2 ps-4 flex items-center justify-between w-full">
            <h1 class="font-bold text-lg text-white">PSM UNHAS</h1>
            <img src={{ asset('/img/logo.png') }} alt="" class=" w-16 h-16 object-cover object-center">
        </div>
        <div class="w-full h-full absolute !z-20 bg-red-700 opacity-50 rounded-b-3xl">

        </div>
        <img src={{ asset('/img/hero.jpg') }} alt=""
            class="rounded-b-3xl absolute !z-10 w-full h-full object-cover object-center">
        <form action="" class=" z-30 absolute bottom-0 w-3/4 left-1/2 -translate-x-1/2 translate-y-1/2 ">
            <input type="search" id="base-input" placeholder="Cari data" wire:model.live="search"
                class="shadow-lg placeholder:text-red-500 placeholder:italic text-red-700 border-solid  !border-red-800 text-sm rounded-lg !focus:ring-secondary !focus:border-red-300 block w-full p-4  dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </form>
    </div>

    <div class="flex gap-3 overflow-x-scroll p-5 mt-10">

        <a href="/" class="w-20 h-20 ">
            <div
                class=" {{ $status == 'partitur' ? ' !bg-red-900' : '' }} w-full h-full flex flex-col justify-center items-center bg-red-700 p-5 rounded-md">
                <i class="ph ph-scroll text-2xl text-white"></i>
                <p class="text-white text-sm">Partitur</p>
            </div>
        </a>

        <a href="/kostum" class="w-20 h-20">
            <div
                class=" {{ $status == 'kostum' ? ' !bg-red-900' : '' }} w-full h-full flex flex-col justify-center items-center bg-red-700 p-5 rounded-md">
                <i class="ph ph-t-shirt text-2xl text-white"></i>
                <p class="text-white text-sm">Kostum</p>
            </div>
        </a>

        <a href="/sertifikat" class="w-20 h-20">
            <div class="w-full h-full flex flex-col justify-center items-center bg-red-700 p-5 rounded-md">
                <i class="ph ph-exam text-2xl text-white"></i>
                <p class="text-white text-sm">Sertifikat</p>
            </div>
        </a>

        <a href="/surat" class="w-20 h-20">
            <div class="w-full h-full flex flex-col justify-center items-center bg-red-700 p-5 rounded-md">
                <i class="ph ph-paper-plane-tilt text-2xl text-white"></i>
                <p class="text-white text-sm">Surat</p>
            </div>
        </a>

        <a href="/sk" class="w-20 h-20">
            <div class="w-full h-full flex flex-col justify-center items-center bg-red-700 p-5 rounded-md">
                <i class="ph ph-scroll text-2xl text-white"></i>
                <p class="text-white text-sm">SK</p>
            </div>
        </a>
    </div>

    @if ($status == 'partitur')
        <div class="p-5">
            <div class="bg-red-200 p-7 rounded-xl">
                @foreach ($partiturs as $partitur)
                    <x-partitur :partitur="$partitur" />
                @endforeach

                {{ $partiturs->links() }}

            </div>
        </div>
    @endif

    @if ($status == 'kostum')
        <div class="p-5 flex flex-wrap gap-3 justify-center">
            @foreach ($kostums as $kostum)
                <x-kostum :kostum="$kostum" />
            @endforeach

            {{ $kostums->links() }}

        </div>
    @endif
</div>
