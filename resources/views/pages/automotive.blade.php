@extends('layouts.app')

@section('title', 'Automotive')

@section('content')
    <div class="px-[5%] py-16 md:py-24 lg:py-28 flex flex-col gap-20 my-12 md:mt-0 ">
        <div class="flex flex-col">
            <div class="rb-12 md:mb-18 lg:mb-20">
                <div class="w-full max-w-lg">
                    <x-typography.header text="Connecting Solutions for a Brighter Tomorrow"/>
                    <x-typography.paragraph class="mt-4"
                                            text="Explore our cutting-edge cable assembly solutions designed for the automotive industry’s unique challenges."/>
                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                        <x-buttons.simple-button label="Contact"/>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
            <div>
                <x-typography.header text="Expert Solutions for the Automotive Industry"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we specialize in providing advanced cable assembly
                    solutions tailored for the automotive sector. Our extensive experience
                    ensures that we meet the highest standards of quality and reliability."/>
                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <div>
                        <x-typography.small-header text="Innovative Designs"/>
                        <x-typography.paragraph text="We create cutting-edge solutions that enhance vehicle performance
                            and safety."/>
                    </div>
                    <div>
                        <x-typography.small-header text="Quality Assurance"/>
                        <x-typography.paragraph text="Our rigorous testing processes guarantee the highest quality in
                            every product we deliver."/>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div class="flex flex-col items-start">
            <div class="rb-12 mb-12 w-full max-w-lg md:mb-18 lg:mb-20">
                <x-typography.header text="Innovative Cable Assembly Solutions for the Automotive Industry"/>
            </div>
            <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12">
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Advanced System Technology Tailored for Automotive Applications"
                    description="We provide high-quality cable assembly and system technology
                        specifically designed for automotive needs."
                />
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Commitment to Quality Management in Automotive Manufacturing"
                    description="Our rigorous quality management processes ensure reliability and
                        excellence in every product."
                />
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Seamless Integration of Technology in Automotive Systems"
                    description="We specialize in integrating advanced technologies for enhanced
                        automotive performance."
                />
            </div>
        </div>

        <div>
            <div
                class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-8 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20"
            >
                <x-typography.header text="Driving Innovation: Our Success Stories in the Automotive Industry"/>
                <x-typography.paragraph text="At Paderteg, we pride ourselves on delivering cutting-edge cable
                    solutions that enhance automotive manufacturing processes. Our
                    collaboration with leading automotive brands has resulted in significant
                    efficiency improvements and innovative product designs. Explore our case
                    studies to see how we drive success in the automotive sector."/>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
        </div>

        <div>
            <div
                class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20"
            >
                <div>
                    <x-typography.header text="Automotive Solutions That Accelerate Your Success"/>
                    <x-typography.paragraph class="mt-4" text="Our automotive solutions have successfully completed over 200
                        projects, ensuring high standards of quality and efficiency. With a
                        client satisfaction rate of 95%, we are dedicated to exceeding
                        expectations in every endeavor."/>
                </div>
                <div>
                    <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                        <div>
                            <x-typography.header text="95%"/>
                            <x-typography.paragraph text="Delivering excellence in automotive connectivity solutions."/>
                        </div>
                        <div>
                            <x-typography.header text="30%"/>
                            <x-typography.paragraph text="Improving efficiency across all automotive projects."/>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-wrap items-center gap-4">
                        <x-buttons.simple-button label="Contact"/>
                    </div>
                </div>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
        </div>

        <div>
            <div class="w-full max-w-lg">
                <x-typography.header text="Get Your Automotive Solutions Today"/>
                <x-typography.paragraph class="mt-4" text="Contact us now for tailored automotive solutions and expert
                    consultations to enhance your operations."/>

                <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Certifications and Standards in Automotive Manufacturing"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we adhere to stringent automotive industry standards,
                        ensuring top-tier quality and safety. Our commitment to excellence is
                        reflected in our certifications, which guarantee compliance with
                        international regulations."/>
                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <div>
                        <x-typography.small-header text="ISO Certification"/>
                        <x-typography.paragraph text="We are ISO 9001 certified, ensuring quality management throughout
                                our production processes."/>
                    </div>
                    <div>
                        <x-typography.small-header text="Automotive Standards"/>
                        <x-typography.paragraph text="Our products meet IATF 16949 standards for the automotive sector,
                                ensuring reliability and performance."/>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Driving the Future of Automotive Technology"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we are committed to pioneering advancements in automotive
                    technology. Our focus on electric vehicles, smart connectivity, and
                    sustainable practices positions us at the forefront of industry
                    innovation."/>

            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>
    </div>
@endsection
