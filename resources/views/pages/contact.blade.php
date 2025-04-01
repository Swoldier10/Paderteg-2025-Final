@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="px-10 flex flex-col gap-16 md:gap-24 lg:gap-28 py-20">
        <div class="relative h-[500px] flex items-center p-4">
            <div class="relative z-10 max-w-lg text-center">
                <h1 class="mb-5 text-6xl font-bold text-text-alternative md:mb-6 md:text-6xl">
                    Get in Touch
                </h1>
                <p class="text-text-alternative md:text-md">
                    We’re here to answer your questions and help you connect with our
                    solutions.
                </p>
            </div>
            <div class="absolute inset-0 z-0">
                <x-elements.image class="size-full object-cover"
                                  src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
        </div>

        <div>
            <div
                class="mb-12 grid auto-cols-fr grid-cols-1 gap-x-12 gap-y-12 md:mb-20 md:grid-cols-[1fr_.75fr] md:gap-x-20 md:gap-y-16">
                <div class="rb-12 max-w-lg flex flex-col justify-center">
                    <x-typography.header text="Get in Touch"/>
                    <x-typography.paragraph class="mt-4"
                                            text="We’re here to assist you with any inquiries or support you may need."/>
                </div>
                <div class="flex flex-col">
                    <div class="grid auto-cols-fr grid-cols-1 gap-x-4 gap-y-6 py-2">
                        <div class="flex flex-row items-center">
                            <div class="mr-4 md:mb-4">
                                <svg
                                    stroke="currentColor"
                                    fill="currentColor"
                                    stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="size-6"
                                    height="1em"
                                    width="1em"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-md font-bold leading-[1.4] md:text-xl">
                                    Email
                                </h3>
                                <a class="underline" href="#">info@paderteg.com</a>
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <div class="mr-4 md:mb-4">
                                <svg
                                    stroke="currentColor"
                                    fill="currentColor"
                                    stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="size-6"
                                    height="1em"
                                    width="1em"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-md font-bold leading-[1.4] md:text-xl">
                                    Phone
                                </h3>
                                <a class="underline" href="#">+40 (123) 456-7890</a>
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <div class="mr-4 md:mb-4">
                                <svg
                                    stroke="currentColor"
                                    fill="currentColor"
                                    stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="size-6"
                                    height="1em"
                                    width="1em"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"
                                    ></path>
                                    <path
                                        d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-md font-bold leading-[1.4] md:text-xl">
                                    Office
                                </h3>
                                <p>456 Industrial Rd, Copșa Mică, Romania</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
            </div>
        </div>

        <div class="max-w-xl mx-auto">
            <div class="mx-auto mb-8 w-full max-w-xl text-center md:mb-10 lg:mb-12">
                <x-typography.header text="Get in Touch"/>
                <x-typography.paragraph class="mt-4" text="We’re here to assist you with your inquiries."/>
            </div>
            <form class="grid grid-cols-1 grid-rows-[auto_auto] gap-6">
                <div class="grid grid-cols-2 gap-6">
                    <div class="grid w-full items-center">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2"
                            for="firstName"
                        >First Name</label
                        >
                        <div class="relative flex w-full items-center">
                            <input
                                type="text"
                                class="flex size-full min-h-11 border border-border-primary bg-background-primary py-2 align-middle file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 px-3"
                                id="firstName"
                            />
                        </div>
                    </div>
                    <div class="grid w-full items-center">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2"
                            for="lastName"
                        >Last Name</label
                        >
                        <div class="relative flex w-full items-center">
                            <input
                                type="text"
                                class="flex size-full min-h-11 border border-border-primary bg-background-primary py-2 align-middle file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 px-3"
                                id="lastName"
                            />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="grid w-full items-center">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2"
                            for="email"
                        >Email</label
                        >
                        <div class="relative flex w-full items-center">
                            <input
                                type="email"
                                class="flex size-full min-h-11 border border-border-primary bg-background-primary py-2 align-middle file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 px-3"
                                id="email"
                            />
                        </div>
                    </div>
                    <div class="grid w-full items-center">
                        <label
                            class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2"
                            for="phone"
                        >Phone Number</label
                        >
                        <div class="relative flex w-full items-center">
                            <input
                                type="text"
                                class="flex size-full min-h-11 border border-border-primary bg-background-primary py-2 align-middle file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 px-3"
                                id="phone"
                            />
                        </div>
                    </div>
                </div>
                <div class="grid w-full items-center">
                    <label
                        class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mb-2"
                        for="message"
                    >Message</label
                    ><textarea
                        class="flex w-full border border-border-primary bg-neutral-white p-3 placeholder:text-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 min-h-[11.25rem] overflow-auto"
                        id="message"
                        placeholder="Enter your message..."
                    ></textarea>
                </div>
                <div class="text-center">
                    <x-buttons.simple-button label="Submit"/>
                </div>
            </form>
        </div>
    </div>
@endsection
