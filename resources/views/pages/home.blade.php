@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="px-[5%] py-20 md:py-24 lg:py-28 flex flex-col gap-20">
        <div class="mt-8">
            <x-sections.text-section>
                <x-typography.header text="Connecting Solutions for a Brighter Tomorrow"/>
                <div>
                    <x-typography.paragraph text="At Paderteg Connecting Solutions, we specialize in innovative cable
                        assembly and system technology. Our commitment to quality and
                        efficiency drives us to connect industries and enhance operational
                        excellence."/>
                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                        <x-buttons.simple-button label="Learn More"/>
                        <x-buttons.simple-button label="Contact"/>
                    </div>
                </div>
            </x-sections.text-section>
            <x-elements.video src="PaderTeg Home Video-1.mp4"
                              class="w-full object-cover"/>
        </div>

        <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
            <div class="flex flex-col gap-6">
                <x-typography.header text="A Legacy of Innovation and Growth"/>

                <x-typography.paragraph text="Since our founding in 2004, we have evolved significantly, adapting to
                        the changing landscape of technology and industry. Our journey
                        reflects our commitment to excellence in cable assembly and system
                        solutions."/>

                <x-typography.header text="History"/>
                <x-typography.paragraph text="From local roots to global connections."/>

                <div class="flex flex-wrap items-center gap-4">
                    <x-buttons.simple-button label="Learn More"/>
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <x-elements.image class="w-full object-cover"
                              src="{{ asset('assets/home-1.JPG') }}"/>
        </div>

        <div>
            <x-sections.text-section>
                <x-typography.header text="Connecting the World with Reliable and Efficient Technology Solutions"/>
                <x-typography.paragraph text="                    At Paderteg Connecting Solutions, we are dedicated to delivering
                    innovative technology that ensures seamless connectivity across
                    industries. Our mission is to provide high-quality cable assembly and
                    system solutions that enhance operational efficiency. With a commitment
                    to excellence, we empower businesses to thrive in a rapidly evolving
                    technological landscape."/>
            </x-sections.text-section>
            <x-elements.video
                class="w-full object-cover"
                src="{{ asset('assets/PaderTeg Home-2 Video-1.mp4') }}"/>
        </div>

        <div>
            <div class="flex flex-col">
                <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-lg flex flex-col justify-center items-center gap-6 mx-auto text-center">
                        <x-typography.header text="Our Commitment to People and Community"/>
                        <x-typography.paragraph text="At Paderteg, we believe our people are our greatest asset. We are
                            committed to fostering a motivated workforce that drives our success
                            and supports our community."/>
                        <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                            <x-buttons.simple-button label="Learn More"/>
                            <x-buttons.simple-button label="Contact"/>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
                >
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Efficiency Through Strategic Collaboration"
                        description="Our closely located facilities enhance production efficiency and
                            collaboration."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Supporting Local Economic Growth"
                        description="As the largest employer in Copșa Mică, we create stable jobs and
                            support professional growth."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Join Us in Making a Difference"
                        description="Together, we can build a stronger community."
                    />
                </div>
            </div>
        </div>

        <div>
            <x-sections.text-section>
                <x-typography.header text="Services for Every Industry"/>
                <x-typography.paragraph text="At Paderteg, we offer a full suite of services designed to enhance
                        your production and supply chain processes. Our expertise in cable
                        assembly and system technology ensures that we deliver tailored
                        solutions that meet your unique needs. Partner with us to experience
                        innovation and efficiency at every step."/>
            </x-sections.text-section>
            <div class="mt-4 mb-8 flex items-center justify-center gap-4 md:mt-18 lg:mt-20">
                <x-buttons.simple-button label="Learn More"/>
            </div>
            <div class="grid grid-cols-1 items-start gap-y-12 md:grid-cols-3 md:gap-x-8 lg:gap-x-12">
                <x-cards.image-card
                    image-src="{{ asset('assets/support_consulting.png') }}"
                    title="Support & Consulting"
                    description="Our expert team provides guidance to optimize your operations."
                />
                <x-cards.image-card
                    image-src="{{ asset('assets/planning_process optimization.jpg') }}"
                    title="Planning & Process Optimization"
                    description="We analyze your workflows to enhance efficiency and productivity."
                />
                <x-cards.image-card
                    image-src="{{ asset('assets/improvement.jpg') }}"
                    title="Continuous Improvement"
                    description="Our commitment to excellence drives ongoing enhancements in our
                        services."
                />
            </div>
        </div>

        <div>
            <x-sections.text-section>
                <x-typography.header text="Discover Our Impact: Key Statistics About Paderteg Connecting
                        Solutions"/>
                <x-typography.paragraph text="With over 500 dedicated employees, Paderteg Connecting Solutions has
                        been a leader in cable assembly and system technology since 2004. Our
                        commitment to innovation and efficiency has allowed us to establish
                        three manufacturing sites in Romania. We proudly serve a diverse range
                        of industries, ensuring quality and reliability in every project."/>
            </x-sections.text-section>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <x-cards.number-card
                    title="Years in Operation"
                    number="19"
                    description="Years of dedicated service and growth."/>
                <x-cards.number-card
                    title="Production Sites"
                    number="3"
                    description="Strategically located for optimal efficiency."/>
                <x-cards.number-card
                    title="Employee Count"
                    number="500+"
                    description="Our most valuable asset driving our success."/>
            </div>
        </div>

        <div>
            <div class="flex flex-col items-center justify-center gap-6">
                <x-typography.header text="Get in Touch Today"/>
                <x-typography.paragraph text="Contact us for innovative solutions and to request a quote tailored to
                        your needs."/>
                <div class="flex flex-wrap gap-4 md:mt-4">
                    <x-buttons.simple-button label="Inquire"/>
                    <x-buttons.simple-button label="Learn More"/>
                </div>
            </div>
        </div>

        <div
            class="container grid grid-cols-1 items-start md:grid-flow-row md:gap-x-12 lg:gap-x-20"
        >
            <div class="rb-12 mb-12 max-w-lg md:mb-18 lg:mb-20 flex flex-col gap-4">
                <x-typography.header text="Our Team"/>
                <x-typography.paragraph text="Meet the dedicated professionals driving our success."/>
            </div>
            <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-8 lg:gap-16 mb-20">
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Milonean Ioan Marius.png') }}"
                    name="Milonean Ioan Marius"
                    role="Owner"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Anca Ganfalean.jpg') }}"
                    name="Anca Ganfalean"
                    role="Finance & HR"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Dura Cristian.png') }}"
                    name="Dura Cristian"
                    role="Sale & Engineering"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Stanciu Dana.png') }}"
                    name="Stanciu Dana"
                    role="Quality & EHS"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Necsuleu Cosmin.png') }}"
                    name="Necsuleu Cosmin"
                    role="Production & Technic"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Barac Ramona.png') }}"
                    name="Barac Ramona"
                    role="Logistics"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Oancea Gheorghe.png') }}"
                    name="Oancea Gheorghe"
                    role="IT"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
                <x-cards.person-card
                    avatar-src="{{ asset('assets/Papara Carmen.png') }}"
                    name="Papara Carmen"
                    role="Purchasing"
                    description="Leading our vision with a commitment to innovation and excellence."
                    phone="0745345390"
                    email="neculai.inocentiu@gmail.com"
                />
            </div>
        </div>
    </div>
@endsection
