@extends('layouts.app')

@section('title', 'Medical')

@section('content')
    <div class="relative px-[5%] py-16 md:py-24 lg:py-28 mt-12">
        <div class="container relative z-10">
            <div class="w-full max-w-lg">
                <x-typography.header text="Innovative Medical Solutions"/>
                <x-typography.paragraph class="mt-4" text="Paderteg specializes in high-quality cable assembly and system
                    technology for the medical industry."/>
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

    <div class="px-[5%] py-16 md:py-24 lg:py-28">
        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20"
        >
            <div>
                <x-typography.header text="Ensuring Quality in Medical Technology"/>
                <x-typography.paragraph class="mt-4" text="Reliable and high-quality cable assemblies are crucial in medical
                    technology. They ensure the safety and efficiency of medical devices,
                    directly impacting patient care."/>

                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Safety First"
                        description="Our assemblies meet stringent standards for medical device safety and performance."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Innovative Solutions"
                        description="We provide cutting-edge solutions tailored to the unique needs of
                            the healthcare industry."
                    />
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-4"
        >
            <div>
                <x-typography.header text="Commitment to Medical Industry Excellence"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we prioritize stringent medical standards to ensure the
                    highest quality in our cable assembly solutions. Our commitment to
                    compliance and innovation enables us to support the healthcare
                    industry effectively."/>
                <div class="grid grid-cols-1 gap-6 py-2 lg:grid-cols-2">
                    <div>
                        <x-typography.header text="Quality"/>
                        <x-typography.paragraph class="mt-4"
                                                text="Certified to meet rigorous medical industry requirements."/>
                    </div>
                    <div>
                        <x-typography.header text="Innovation"/>
                        <x-typography.paragraph class="mt-4" text="Leading-edge solutions for healthcare technology."/>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-4"
        >
            <div>
                <x-typography.header text="Custom Solutions for Medical Devices and Technology"/>
                <x-typography.paragraph class="mt-4" text="At Paderteg, we specialize in delivering tailored solutions for the
                    medical industry. Our innovative cable assemblies ensure reliability
                    and performance in critical healthcare applications."/>
                <ul class="grid grid-cols-1 gap-4 py-2">
                    <li class="flex self-start">
                        <x-elements.image class="w-6 mr-4" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        <x-typography.paragraph text="Enhancing patient care through advanced technology solutions."/>
                    </li>
                    <li class="flex self-start">
                        <x-elements.image class="w-6 mr-4" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        <x-typography.paragraph text="Reliable connections for medical device manufacturers."/>
                    </li>
                    <li class="flex self-start">
                        <x-elements.image class="w-6 mr-4" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        <x-typography.paragraph text="Quality and compliance for healthcare technology."/>
                    </li>
                </ul>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>

        <div>
            <div class="rb-12 mb-12 md:mb-18 lg:mb-20 mt-8">
                <div class="mx-auto max-w-lg text-center">
                    <x-typography.header text="Innovative Medical Solutions"/>
                    <x-typography.paragraph class="mt-4" text="Precision technology for healthcare applications."/>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 md:gap-8">
                <div
                    class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:gap-8 lg:grid-cols-4"
                >
                    <x-cards.bordered-card-with-image/>
                    <div class="flex flex-col border border-border-primary">
                        <div class="flex flex-col justify-center p-6">
                            <div>
                                <x-typography.paragraph class="mb-2 text-sm font-semibold" text="Expertise"/>
                                <x-typography.small-header text="Diagnostic Equipment"/>
                                <x-typography.paragraph text="Reliable connections for accurate diagnostics."/>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <x-elements.image class="w-full object-cover" src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </div>
                    </div>
                    <div class="flex flex-col border border-border-primary">
                        <div class="flex flex-col justify-center p-6">
                            <div>
                                <x-typography.paragraph class="mb-2 text-sm font-semibold" text="Expertise"/>
                                <x-typography.small-header text="Diagnostic Equipment"/>
                                <x-typography.paragraph text="Reliable connections for accurate diagnostics."/>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <x-elements.image class="w-full object-cover" src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-12 md:mb-18 lg:mb-20 mt-12">
                <div class="w-full max-w-lg">
                    <x-typography.header text="Transforming Healthcare with Reliable Connectivity"/>
                    <x-typography.paragraph class="mt-4" text="Paderteg's cable assemblies are designed to meet the rigorous
                        demands of the medical industry. Our commitment to quality ensures
                        that healthcare providers can rely on our products for critical
                        applications."/>
                </div>
            </div>
            <div
                class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
            >
                <x-cards.image-card
                    image-src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                    title="Enhanced Reliability for Medical Applications"
                    description="Our cable assemblies are engineered for maximum performance and
                        durability."
                />
                <x-cards.image-card
                    image-src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                    title="Superior Quality You Can Trust"
                    description="We utilize advanced manufacturing techniques to ensure unmatched
                        quality."
                />
                <x-cards.image-card
                    image-src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-landscape.svg"
                    title="Compliance with Medical Standards Guaranteed"
                    description="Our products meet stringent medical regulations for safety and
                        efficacy."
                />
            </div>
            <div class="mt-10 flex items-center gap-4 md:mt-14 lg:mt-16">
                <x-buttons.simple-button label="Contact"/>
            </div>
        </div>

        <div>
            <div class="mb-12 md:mb-18 lg:mb-20 mt-12">
                <div class="mx-auto max-w-lg text-center">
                    <x-typography.header text="Streamlined Process for Medical Solutions"/>
                    <x-typography.paragraph class="mt-4" text="Our process begins with in-depth consultations to understand your
                        specific needs. We then design tailored solutions that ensure optimal
                        performance and compliance."/>
                </div>
            </div>
            <div
                class="grid place-items-center gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:grid-cols-[1fr_1.5fr_1fr] lg:gap-x-12"
            >
                <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-5 md:mb-6">
                            <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.header class="mb-3 text-xl md:text-xl font-bold md:mb-4" text="Consultation and Design"/>
                        <x-typography.paragraph text="We collaborate closely with clients to develop customized designs
                            that meet stringent medical standards."/>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-5 md:mb-6">
                            <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.header class="mb-3 text-xl md:text-xl font-bold md:mb-4" text="Production Excellence"/>
                        <x-typography.paragraph text="Our state-of-the-art facilities ensure high-quality production and
                            efficient manufacturing processes."/>
                    </div>
                </div>
                <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1">
                    <x-elements.image class="h-auto w-full object-cover" src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
                </div>
                <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-5 md:mb-6">
                            <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.header class="mb-3 text-xl md:text-xl font-bold md:mb-4" text="Quality Assurance"/>
                        <x-typography.paragraph text="Rigorous testing and quality checks guarantee that our products
                            exceed industry standards."/>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="mb-5 md:mb-6">
                            <x-elements.image class="w-12" src="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"/>
                        </div>
                        <x-typography.header class="mb-3 text-xl md:text-xl font-bold md:mb-4" text="Continuous Improvement"/>
                        <x-typography.paragraph text="We embrace feedback and innovation to enhance our processes and
                            product offerings continuously."/>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20 mt-12"
        >
            <div>
                <x-typography.header text="Transforming Healthcare: Paderteg’s Commitment to the Medical Industry"/>
                <x-typography.paragraph class="mt-4" text="Paderteg Connecting Solutions is dedicated to enhancing medical
                    technology through innovative cable assembly. Our expertise ensures
                    reliable connectivity in life-saving medical devices."/>
                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <div>
                        <x-typography.header text="70%"/>
                        <x-typography.paragraph text="of our products meet stringent medical standards."/>
                    </div>
                    <div>
                        <x-typography.header text="30%"/>
                        <x-typography.paragraph text="of our workforce specializes in medical applications."/>
                    </div>
                </div>
            </div>
            <div>
                <x-elements.image src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"/>
            </div>
        </div>
    </div>
@endsection
