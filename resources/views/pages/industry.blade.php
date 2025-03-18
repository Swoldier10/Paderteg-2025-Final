@extends('layouts.app')

@section('title', 'Industry')

@section('content')
    <div class="px-[5%] py-16 md:py-24 lg:py-28">
        <div
            class="grid grid-cols-1 items-start gap-x-12 gap-y-5 md:grid-cols-2 lg:gap-x-20 lg:gap-y-16"
        >
            <x-typography.header text="Industries We Serve"/>
            <x-typography.paragraph text="At Paderteg Connecting Solutions, we proudly serve a wide array of
                    industries, including automotive, healthcare, and energy. Our
                    innovative cable assembly and system technology solutions are designed
                    to meet the unique needs of each sector, ensuring reliability and
                    efficiency."/>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12">
            <div>
                <x-typography.header text="Empowering the Automation Industry with Custom Cable and System
                    Solutions"/>
                <x-typography.paragraph class="mt-4" text="In the fast-paced world of automation, tailored cable and system
                    solutions are essential. At Paderteg, we specialize in providing
                    innovative products that enhance efficiency and reliability."/>

                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2 mt-4">
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Out Expertise"
                        description="We deliver high-quality solutions designed to meet the unique
                            needs of automation."
                    />

                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Tailored Solutions"
                        description="Our products ensure seamless integration and optimal performance
                            in automated systems."
                    />
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
                <x-typography.header text="Tailored Solutions for the Industrial Sector"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we understand the unique challenges faced by the
                    industrial sector. Our specialized solutions are designed to enhance
                    efficiency and connectivity, ensuring your operations run smoothly."/>

                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12"
        >
            <div>
                <x-typography.header text="Innovative Solutions for the Energy and Environmental Technologies
                    Industry"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we specialize in delivering cutting-edge cable assembly
                    solutions tailored for the Energy and Environmental Technologies
                    sector. Our commitment to sustainability and efficiency empowers
                    industries to thrive while minimizing their environmental impact."/>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div class="flex flex-col items-start mt-12">
            <div
                class="rb-12 mb-12 grid grid-cols-1 items-start justify-between gap-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20"
            >
                <x-typography.header text="Tailored Solutions for Every Industry"/>
                <x-typography.paragraph text="At Paderteg, we understand that each industry has unique challenges
                        and requirements. Our tailored cable assembly and system solutions
                        are designed to meet the specific needs of various sectors, ensuring
                        optimal performance and reliability. With our expertise, we empower
                        businesses to achieve their operational goals seamlessly."/>

            </div>
            <div
                class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
            >
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Automation Solutions for Enhanced Efficiency"
                    description="Our automation solutions streamline processes and boost
                        productivity."
                />
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Automation Solutions for Enhanced Efficiency"
                    description="We provide cutting-edge solutions that enhance vehicle performance."
                />
                <x-cards.borderless-card-with-icon
                    icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                    title="Healthcare Solutions: Ensuring Patient Safety"
                    description="Our healthcare solutions prioritize reliability and compliance."
                />
            </div>
            <div class="mt-10 flex items-center gap-4 md:mt-14 lg:mt-16">
                <x-buttons.simple-button label="Contact"/>
            </div>
        </div>

        <div class="mt-12">
            <div
                class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-5 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20"
            >
                <div>
                    <x-typography.header text="Transforming Industries with Innovative Cable Solutions and Unmatched
                        Expertise"/>
                </div>
                <div>
                    <x-typography.paragraph text="At Paderteg, we take pride in our extensive experience across multiple
                        sectors. Our commitment to quality and innovation has led to
                        significant achievements in enhancing operational efficiency."/>

                    <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                        <div>
                            <x-typography.header text="75%"/>
                            <x-typography.paragraph text="Increase in production efficiency across all sectors."/>
                        </div>
                        <div>
                            <x-typography.header text="90%"/>
                            <x-typography.paragraph text="Customer satisfaction rating from our diverse clients."/>
                        </div>
                    </div>
                </div>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
        </div>
    </div>
@endsection
