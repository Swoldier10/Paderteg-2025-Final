<div class="w-[300px] h-[300px] rounded-2xl border-2 border-[#2596be] p-4 flex flex-col gap-2 items-center justify-center">
    <div class="font-bold text-2xl text-center">{{ $title }}</div>
    <div class="font-bold text-xl">{{ $subTitle }}</div>
    <div class="text-center text-sm">
        {{ $description }}
    </div>
    <div class="text-center text-sm text-gray-500">
        {{ $address }}
    </div>
    <a href="{{ $href }}" class="underline text-sm text-gray-500 text-center">
        Get Directions
    </a>
</div>
