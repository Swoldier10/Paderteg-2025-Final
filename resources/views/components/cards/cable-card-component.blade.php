<div class="mx-10 lg:flex gap-6 mb-20">
    @if($imagePosition == 'left')
        <div class="lg:w-1/2 flex items-center justify-center mb-10 md:mb-0">
            <img class="w-[350px] h-[310px] md:w-[560px] md:h-[510px] rounded-2xl" src="{{ $imageUrl }}" alt="product-1">
        </div>
        <div class="lg:w-1/2 flex flex-col gap-6 justify-center">
            <div class="font-normal lg:leading-[1.5] text-[25px] md:text-[40px] lg:tracking-wide text-center">
                {{ $title }}
            </div>
            <div class="lg:leading-[2] lg:tracking-wide text-center">
                {{ $description }}
            </div>
        </div>
    @else
        <div class="lg:hidden lg:w-1/2 flex items-center justify-center mb-10 md:mb-0">
            <img class="w-[350px] h-[310px] md:w-[560px] md:h-[510px] rounded-2xl" src="{{ $imageUrl }}" alt="product-1">
        </div>
        <div class="lg:w-1/2 flex flex-col gap-6 justify-center">
            <div class="font-normal lg:leading-[1.5] text-[25px] md:text-[40px] lg:tracking-wide text-center">
                {{ $title }}
            </div>
            <div class="lg:leading-[2] lg:tracking-wide text-center">
                {{ $description }}
            </div>
        </div>
        <div class="hidden lg:flex lg:w-1/2 items-center justify-center mb-10 md:mb-0">
            <img class="w-[350px] h-[310px] md:w-[560px] md:h-[510px] rounded-2xl" src="{{ $imageUrl }}" alt="product-1">
        </div>
    @endif
</div>
