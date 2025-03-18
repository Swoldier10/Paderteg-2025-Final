@extends('layouts.app')

@section('title', 'Home Appliance')

@section('content')
    <div class="flex flex-col gap-12 px-[5%] py-16 md:py-24 lg:py-28">
        <div class="flex flex-col gap-5 md:flex-row md:gap-12 lg:gap-20">
            <div class="w-full max-w-lg">
                <x-typography.header text="Home Appliance Solutions"/>
            </div>
            <div class="w-full max-w-lg">
                <x-typography.paragraph text="At Paderteg Connecting Solutions, we specialize in delivering
                    high-quality cable assembly and system technology tailored for the
                    home appliances sector. Our innovative solutions ensure reliability
                    and efficiency, enhancing the performance of your appliances."/>
                <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Custom Cable Solutions for Home Appliances"/>
                <x-typography.paragraph class="mt-4" text="Our custom cable assembly solutions are designed to enhance the
                    functionality and efficiency of home appliances. We ensure
                    high-quality production tailored to meet the unique needs of your
                    products."/>

                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Uncompromising Quality Standards for Home Appliance Component
                    Production"/>

                <x-typography.paragraph class="mt-4" text="At Paderteg, we adhere to rigorous quality standards and
                    certifications to ensure the reliability of our home appliance
                    components. Our commitment to excellence guarantees that every product
                    meets industry benchmarks for safety and performance."/>

                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <div>
                        <x-typography.small-header text="Quality Assurance"/>
                        <x-typography.paragraph text="Certified processes ensure top-tier performance and safety in our
                            components."/>
                    </div>
                    <div>
                        <x-typography.small-header text="Industry Standards"/>
                        <x-typography.paragraph text="We comply with international standards to deliver superior quality
                            products."/>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div>
            <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg">
                    <x-typography.header text="Unlock Efficiency and Quality in Home Appliance Manufacturing with
                        Paderteg"/>
                </div>
            </div>
            <div
                class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
            >
                <div class="flex flex-col items-center text-center">
                    <div class="mb-5 md:mb-6">
                        <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    </div>
                    <x-typography.small-header text="Experience Seamless Production and Tailored Solutions for Your Home
                        Appliances"/>
                    <x-typography.paragraph text="Partnering with Paderteg means gaining access to innovative
                        manufacturing solutions that enhance your product offerings."/>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="mb-5 md:mb-6">
                        <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    </div>
                    <x-typography.small-header
                        text="Reliable Supply Chain Management for Home Appliance Manufacturers"/>
                    <x-typography.paragraph text="Our streamlined processes ensure timely delivery and optimal inventory
                        management for your projects."/>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="mb-5 md:mb-6">
                        <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    </div>
                    <x-typography.small-header text="Commitment to Quality and Continuous Improvement in Appliance
                        Manufacturing"/>
                    <x-typography.paragraph text="We uphold the highest standards of quality management to guarantee
                        product excellence."/>
                </div>
            </div>
        </div>

        <div>
            <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg">
                    <x-typography.header text="Collaborative Journey: From Concept to Delivery for Home Appliances"/>
                </div>
            </div>
            <div
                class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
            >
                <div class="flex flex-col items-center text-center">
                    <x-elements.image class="w-12 mb-5 md:mb-6"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.small-header
                        text="Seamless Integration: Partnering with Home Appliance Manufacturers"/>
                    <x-typography.paragraph text="Our process ensures that every step is tailored to meet your needs."/>
                </div>
                <div class="flex flex-col items-center text-center">
                    <x-elements.image class="w-12 mb-5 md:mb-6"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.small-header text="Design and Development: Bringing Ideas to Life"/>
                    <x-typography.paragraph
                        text="We collaborate closely with your team to refine and enhance designs."/>
                </div>
                <div class="flex flex-col items-center text-center">
                    <x-elements.image class="w-12 mb-5 md:mb-6"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.small-header text="Production Excellence: Efficient Manufacturing for Home Appliances"/>
                    <x-typography.paragraph text="Our state-of-the-art facilities ensure high-quality production and
                        timely delivery."/>

                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Enhance Your Home Appliances with Paderteg's Reliable Cable
                    Solutions"/>
                <x-typography.paragraph class="mt-4" text="Paderteg's cable solutions ensure optimal performance and
                    durability for your home appliances. Experience enhanced efficiency
                    and longevity, making your everyday life easier and more enjoyable."/>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>
    </div>
@endsection
