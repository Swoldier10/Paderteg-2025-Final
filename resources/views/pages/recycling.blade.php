@extends('layouts.app')

@section('title', 'Recycling')

@section('content')
    <div class="px-[5%] py-16 md:py-24 lg:py-28 mt-12">
        <div class="grid grid-cols-1 items-start gap-x-12 gap-y-5 md:grid-cols-2 lg:gap-x-20 lg:gap-y-16">
            <div>
                <x-typography.header text="Sustainable Recycling Solutions"/>
            </div>
            <div>
                <x-typography.paragraph text="At Paderteg Connecting Solutions, we are dedicated to promoting
                    recycling and sustainability in our operations. Our commitment to
                    eco-friendly practices ensures that we minimize waste and contribute
                    positively to the environment."/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12"
        >
            <div>
                <x-typography.header text="Our Commitment to Recycling and Environmental Sustainability
                Initiatives"/>

                <x-typography.paragraph class="mt-4" text="At Paderteg, we prioritize eco-friendly practices in our operations.
                Our recycling initiatives are designed to minimize waste and promote
                sustainability across all manufacturing processes."/>

                <ul class="grid grid-cols-1 gap-4 py-2">
                    <li class="flex self-start">
                        <div class="mr-4 flex-none self-start">
                            <x-elements.image class="w-6" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.paragraph text="Innovative recycling solutions for a sustainable future."/>
                    </li>
                    <li class="flex self-start">
                        <div class="mr-4 flex-none self-start">
                            <x-elements.image class="w-6" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.paragraph text="Commitment to reducing environmental impact through recycling."/>
                    </li>
                    <li class="flex self-start">
                        <div class="mr-4 flex-none self-start">
                            <x-elements.image class="w-6" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.paragraph
                            text="Partnering for a greener tomorrow through responsible practices."/>
                    </li>
                </ul>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
        </div>

        <div>
            <div class="flex flex-col items-center mt-20">
                <x-typography.header class="text-center" text="Innovative Solutions for Sustainable Recycling"/>
                <x-typography.paragraph class="mt-4 text-center md:w-1/2" text="At Paderteg, we prioritize recycling as a crucial aspect of our
                    production process. Our commitment to sustainability drives us to
                    implement advanced recycling techniques that minimize waste and
                    promote environmental responsibility."/>
            </div>
            <div
                class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12 mt-8">
                <div class="flex w-full flex-col items-center text-center">
                    <x-elements.image class="rb-5 mb-5 md:mb-6 w-12"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.header class="md:text-xl mb-5" text="Our Recycling Process and Technology"/>
                    <x-typography.paragraph text="We utilize state-of-the-art technology to enhance recycling
                        efficiency."/>
                </div>
                <div class="flex w-full flex-col items-center text-center">
                    <x-elements.image class="rb-5 mb-5 md:mb-6 w-12"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.header class="md:text-xl mb-5" text="Benefits of Our Recycling Initiatives"/>
                    <x-typography.paragraph text="Our initiatives reduce environmental impact while maximizing
                    resource recovery."/>
                </div>
                <div class="flex w-full flex-col items-center text-center">
                    <x-elements.image class="rb-5 mb-5 md:mb-6 w-12"
                                      src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                    <x-typography.header class="md:text-xl mb-5" text="Commitment to Sustainable Practices"/>
                    <x-typography.paragraph text="We are dedicated to promoting sustainability in every aspect of our
                    operations."/>
                </div>
            </div>
            <div class="mt-10 flex justify-center items-center gap-4 md:mt-14 lg:mt-16">
                <x-buttons.simple-button class="mx-auto" label="Contact"/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12"
        >
            <div>
                <x-typography.header text="Our Commitment to Sustainable Recycling Practices and Environmental
                    Partnerships"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we proudly collaborate with leading environmental
                    organizations to promote sustainable recycling practices. Our
                    adherence to international recycling standards ensures that we
                    minimize waste and maximize resource recovery, contributing to a
                    greener future."/>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12">
            <div>
                <x-typography.header text="The Impact of Our Recycling Initiatives"/>
                <x-typography.paragraph class="mt-4" text="Our recycling efforts significantly reduce waste and promote
                    environmental sustainability. By reusing materials, we minimize our
                    carbon footprint and contribute to a healthier planet."/>

                <div class="grid grid-cols-1 gap-8 py-2 xl:grid-cols-2">
                    <div>
                        <x-typography.header text="Community"/>
                        <x-typography.paragraph class="mt-4" text="Supporting local initiatives through responsible recycling
                            practices."/>
                    </div>
                    <div>
                        <x-typography.header text="Customers"/>
                        <x-typography.paragraph class="mt-4" text="Providing eco-friendly solutions that enhance customer
                            satisfaction."/>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12"
        >
            <div>
                <x-typography.header text="The Impact of Recycling: Transforming Waste into Resources for a
                    Sustainable Future"/>

                <x-typography.paragraph class="mt-4" text="Recycling efforts have significantly reduced waste and conserved
                    valuable resources. By repurposing materials, we contribute to a
                    healthier planet and a sustainable economy."/>

                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <div>
                        <x-typography.header text="75%"/>
                        <x-typography.paragraph text="Waste reduction achieved through innovative recycling programs."/>
                    </div>
                    <div>
                        <x-typography.header text="60%"/>
                        <x-typography.paragraph text="Energy savings realized from recycled materials and processes."/>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>
@endsection
