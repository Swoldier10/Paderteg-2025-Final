<div
    class="grid grid-cols-1 items-start gap-5 sm:gap-y-6 md:grid-cols-2 md:gap-x-8"
>
    <div class="w-full overflow-hidden">
        <img
            src="{{ $avatarSrc }}"
            alt="Relume placeholder image 1"
            class="aspect-square size-full object-cover w-[198px] h-[198px]"
        />
    </div>
    <div class="flex flex-col justify-center">
        <div class="mb-3 md:mb-4">
            <h5 class="text-md font-semibold md:text-lg">{{ $name }}</h5>
            <h6 class="md:text-md">{{ $role }}</h6>
        </div>
        <p>
            {{ $description }}
        </p>
        <div class="flex flex-col gap-2 mt-4">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <div class="text-xs">
                    {{ $phone }}
                </div>
            </div>
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                </svg>
                <div class="text-xs">
                    {{ $email }}
                </div>
            </div>
        </div>
    </div>
</div>
