@extends('layouts.app')

@section('title', 'Resources')

@section('content')
    <div class="flex flex-col gap-16 md:gap-24 lg:gap-28 px-2 md:px-10 md:my-16">
        <div class="grid grid-cols-1 items-center gap-y-16 pt-16 md:pt-24 lg:grid-cols-2 lg:pt-0 mt-20">
            <div
                class="mx-[5%] md:justify-self-start lg:ml-[5vw] lg:mr-20 lg:justify-self-end"
            >
                <x-typography.header text="Explore Our Comprehensive Resource Hub"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg Connecting Solutions, we provide a wealth of resources
                designed to support your needs. Discover valuable insights, tools, and
                guidance to enhance your operations and connectivity."/>
                <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                    <x-buttons.simple-button
                        label="Contact"
                    />
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div>
            <div class="mb-12 md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg text-center">
                    <x-typography.header text="Explore Our Resources"/>
                    <x-typography.paragraph class="mt-2" text="Discover insights and solutions for your industry."/>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                <div class="flex size-full flex-col items-start justify-start text-start">
                    <a href="#" class="mb-6 w-full">
                        <x-elements.image class="aspect-[3/2] size-full object-cover"
                                          src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                    </a>
                    <a class="mb-2 flex justify-start text-start" href="#">
                        <h2 class="text-xl font-bold md:text-2xl">
                            Understanding Cable Assembly Innovations
                        </h2>
                    </a>
                    <p>Learn about the latest advancements in cable technology.</p>
                </div>
                <div class="flex size-full flex-col items-start justify-start text-start">
                    <a href="#" class="mb-6 w-full"
                    >
                        <x-elements.image class="aspect-[3/2] size-full object-cover"
                                          src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                    </a>
                    <a class="mb-2 flex justify-start text-start" href="#"
                    ><h2 class="text-xl font-bold md:text-2xl">
                            Success Stories in Automation
                        </h2></a
                    >
                    <p>Explore how we transformed automation processes for our clients.</p>
                </div>
                <div class="flex size-full flex-col items-start justify-start text-start">
                    <a href="#" class="mb-6 w-full"
                    >
                        <x-elements.image class="aspect-[3/2] size-full object-cover"
                                          src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                    </a>
                    <a class="mb-2 flex justify-start text-start" href="#"
                    ><h2 class="text-xl font-bold md:text-2xl">
                            Our Product Offerings
                        </h2></a
                    >
                    <p>
                        Download our comprehensive product brochures for detailed information.
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-12 md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg text-center">
                    <x-typography.header text="Explore Our Key Resources"/>
                    <x-typography.paragraph class="mt-4"
                                            text="Discover the latest insights and trends in our industry."/>
                </div>
            </div>
            <div class="flex flex-col justify-start" x-data x-tabs>
                <div x-tabs:list
                     class="no-scrollbar mb-12 ml-[-5vw] flex w-screen items-center justify-start overflow-scroll pl-[5vw] md:mb-16 md:ml-0 md:w-full md:justify-center md:overflow-hidden md:pl-0">
                    <a x-tabs:tab
                       :class="$tab.isSelected ? 'border border-gray-800 text-gray-800' : 'border-transparent'"
                       class="inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors disabled:pointer-events-none disabled:opacity-50 text-text-primary bg-background-primary px-4 py-2"
                    >View all</a
                    ><a x-tabs:tab
                        :class="$tab.isSelected ? 'border border-gray-800 text-gray-800' : 'border-transparent'"
                        class="inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors disabled:pointer-events-none disabled:opacity-50 text-text-primary gap-2 border px-4 py-2"
                    >Automation Solutions</a
                    ><a x-tabs:tab
                        :class="$tab.isSelected ? 'border border-gray-800 text-gray-800' : 'border-transparent'"
                        class="inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors disabled:pointer-events-none disabled:opacity-50 text-text-primary gap-2 border px-4 py-2"
                    >Automotive Innovations</a
                    ><a x-tabs:tab
                        :class="$tab.isSelected ? 'border border-gray-800 text-gray-800' : 'border-transparent'"
                        class="inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors disabled:pointer-events-none disabled:opacity-50 text-text-primary gap-2 border px-4 py-2"
                    >Healthcare Advances</a
                    ><a x-tabs:tab
                        :class="$tab.isSelected ? 'border border-gray-800 text-gray-800' : 'border-transparent'"
                        class="inline-flex items-center justify-center whitespace-nowrap ring-offset-white transition-colors disabled:pointer-events-none disabled:opacity-50 text-text-primary gap-2 border px-4 py-2"
                    >Energy Solutions</a
                    >
                </div>
                <div x-tabs:panels class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3 w-full">
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image
                                class="aspect-[3/2] size-full object-cover"
                                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                            />
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    The Future of Automation Technology
                                </h2>
                            </a>
                            <p>Explore how automation is shaping industries for the better.</p>
                        </div>
                    </div>
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    Innovations in Automotive Technology
                                </h2>
                            </a>
                            <p>Discover the latest advancements in automotive connectivity.</p>
                        </div>
                    </div>
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    Healthcare Technology Trends
                                </h2>
                            </a>
                            <p>Learn about the latest trends in healthcare technology.</p>
                        </div>
                    </div>
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    Sustainable Energy Solutions
                                </h2>
                            </a>
                            <p>Explore our commitment to sustainable energy practices.</p>
                        </div>
                    </div>
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    The Future of Industrial Technology
                                </h2>
                            </a>
                            <p>
                                Discover how industrial technology is evolving for greater
                                efficiency.
                            </p>
                        </div>
                    </div>
                    <div x-tabs:panel
                         class="flex size-full flex-col items-center justify-start border border-border-primary">
                        <a href="#" class="w-full">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </a>
                        <div class="px-5 py-6 md:p-6">
                            <a class="mb-2" href="#">
                                <h2 class="text-xl font-bold md:text-2xl">
                                    Exploring Home Appliance Innovations
                                </h2>
                            </a>
                            <p>Learn about the latest in home appliance technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative h-[500px] flex items-center">
            <div class="relative z-10 max-w-lg text-center m-4">
                <h1 class="mb-5 text-5xl font-bold text-text-alternative md:text-6xl w-[50%]">
                    Explore Our Latest Industry Insights and Articles
                </h1>
            </div>
            <div class="absolute inset-0 z-0">
                <x-elements.image class="size-full object-cover"
                                  src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
        </div>

        <div>
            <div
                class="rb-12 mb-12 grid grid-cols-1 items-start justify-start gap-y-8 md:mb-18 md:grid-cols-[1fr_max-content] md:items-end md:justify-between md:gap-x-12 md:gap-y-4 lg:mb-20 lg:gap-x-20"
            >
                <div class="md:mr-12 lg:mr-0">
                    <div class="w-full max-w-lg">
                        <x-typography.header text="Latest Industry Insights"/>
                        <x-typography.paragraph class="md:text-md mt-4"
                                                text="Stay updated with our latest news and articles."/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-12 md:grid-cols-2 md:gap-y-16 lg:grid-cols-3">
                <div>
                    <a href="#" class="mb-6 inline-block w-full max-w-full">
                        <div class="w-full overflow-hidden">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </div>
                    </a>
                    <a href="#" class="mb-2 block max-w-full">
                        <h5 class="text-xl font-bold md:text-2xl">
                            Innovations in Cable Technology
                        </h5>
                    </a>
                    <p>
                        Explore the latest advancements in cable assembly technology and
                        industry applications.
                    </p>
                </div>
                <div>
                    <a href="#" class="mb-6 inline-block w-full max-w-full">
                        <div class="w-full overflow-hidden">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </div>
                    </a>
                    <a href="#" class="mb-2 block max-w-full">
                        <h5 class="text-xl font-bold md:text-2xl">
                            Sustainability in Manufacturing
                        </h5>
                    </a>
                    <p>
                        Learn how we are reducing our environmental impact through sustainable
                        practices.
                    </p>
                </div>
                <div>
                    <a href="#" class="mb-6 inline-block w-full max-w-full">
                        <div class="w-full overflow-hidden">
                            <x-elements.image class="aspect-[3/2] size-full object-cover"
                                              src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </div>
                    </a>
                    <a href="#" class="mb-2 block max-w-full"
                    ><h5 class="text-xl font-bold md:text-2xl">
                            The Future of Automotive Technology
                        </h5></a
                    >
                    <p>
                        Discover trends shaping the automotive industry and our role in it.
                    </p>
                </div>
            </div>
            <div class="md:hidden">
                <button
                    class="focus-visible:ring-border-primary inline-flex gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-border-primary text-text-primary bg-background-primary px-6 py-3 mt-10"
                    title="View all"
                >
                    View all
                </button>
            </div>
        </div>

        <div>
            <div
                class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
            >
                <div>
                    <x-typography.header text="Unlock Valuable Insights and Stay Ahead with Paderteg's Resources"/>
                    <x-typography.paragraph class="mt-4" text="Accessing Paderteg's resources empowers you to stay informed
                            about the latest industry trends. Gain essential technical knowledge
                            that enhances your understanding and application of our innovative
                            solutions."/>
                    <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                        <div>
                            <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                Industry Insights
                            </h6>
                            <p>
                                Stay updated with the latest advancements and best practices in
                                cable assembly technology.
                            </p>
                        </div>
                        <div>
                            <h6 class="mb-3 text-md font-bold leading-[1.4] md:mb-4 md:text-xl">
                                Technical Knowledge
                            </h6>
                            <p>
                                Enhance your expertise with in-depth resources tailored to your
                                industry needs.
                            </p>
                        </div>
                    </div>
                </div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div class="relative h-[500px] flex items-center">
            <div class="relative z-10 w-1/3">
                <div class="w-full max-w-lg m-4">
                    <h2 class="mb-5 text-5xl font-bold text-text-alternative md:mb-6 md:text-6xl">
                        Stay Connected with Paderteg
                    </h2>
                    <p class="text-text-alternative md:text-md">
                        Subscribe to our newsletter for the latest updates and insights on our
                        innovative solutions.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                        <x-buttons.simple-button label="Contact"/>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 z-0">
                <x-elements.image class="size-full object-cover"
                                  src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
        </div>
    </div>
@endsection
