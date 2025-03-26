@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="px-[5%] py-16 md:py-24 lg:py-28 flex flex-col gap-18">
        <div class="mt-10">
            <div class="flex flex-col lg:flex-row text-center justify-center gap-4">
                <div>
                    <x-typography.header text="Our Vision"/>
                    <x-typography.paragraph class="mt-4" text="At Paderteg, we connect industries through innovative solutions and a
                    commitment to excellence."/>
                    <div class="mt-6 flex flex-wrap gap-4 md:mt-8 justify-center">
                        <x-buttons.simple-button label="Contact"/>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="max-w-2xl mx-auto text-center">
                <x-typography.header class="mb-4" text="Our Journey: From 2004 to Today"/>
                <x-typography.paragraph text="Paderteg Kabeltechnik has evolved significantly since its inception in
                        2004. Our journey reflects a commitment to innovation and excellence
                        in cable assembly and system technology."/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 text-center mt-18 gap-4">
                <x-section.title-description
                    title="2004 - Founding Years"
                    description="Founded in 2004, we began our mission to connect the world through
                                technology."
                />
                <x-section.title-description
                    title="2011 - BMB Kabeltechnik"
                    description="Acquired by BMB Kabeltechnik in 2011, expanding our capabilities
                                and reach."
                />
                <x-section.title-description
                    title="2015 - CIS Automotive SRL"
                    description="The Group CIS electronic acquires BMB Kabeltechnik"
                />
                <x-section.title-description
                    title="2025 - Paderteg Kabeltechnik SRL"
                    description="Company goes back to it's original name"
                />
            </div>
        </div>

        <div>
            <div
                class="mb-12 grid grid-cols-1 items-start justify-between gap-x-12 gap-y-8 md:mb-18 md:grid-cols-2 md:gap-x-12 md:gap-y-8 lg:mb-20 lg:gap-x-20"
            >
                <x-typography.header text="Connecting the World with Reliable and Efficient Technology Solutions"/>
                <x-typography.paragraph text="At Paderteg Connecting Solutions, our mission is to bridge gaps through
                    innovative technology. We specialize in cable assembly and system
                    technology, ensuring seamless connectivity across various industries.
                    Our commitment to quality and efficiency drives us to deliver
                    exceptional solutions that empower businesses worldwide."/>
            </div>
            <x-elements.image src="{{ asset('assets/connecting-the-world.png') }}"/>
        </div>

        <div class="grid grid-cols-1 gap-y-12 md:grid-flow-row md:grid-cols-2 md:items-center md:gap-x-12 lg:gap-x-20">
            <div>
                <x-typography.header text="Reclaiming Our Identity: A Commitment to Legacy and Expertise"/>
                <x-typography.paragraph class="mt-4" text="In 2025, we proudly reclaimed our original name, Paderteg Kabeltechnik
                    SRL. This change reflects our dedication to our heritage and our
                    expertise in cable assembly and system technology."/>

                <div class="grid grid-cols-1 gap-6 py-2 sm:grid-cols-2">
                    <x-section.title-description
                        title="Legacy Matters"
                        description="Our name signifies our commitment to quality and innovation in
                            every connection we make."
                    />
                    <x-section.title-description
                        title="Expertise Reinforced"
                        description="Reclaiming our name strengthens our bond with clients and
                            showcases our industry knowledge."
                    />
                </div>
            </div>
            <div>
                <x-elements.image src="{{ asset('assets/reclaiming-our-identity.JPG') }}"/>
            </div>
        </div>

        <div>
            <div class="rb-12 mb-12 max-w-lg md:mb-18 lg:mb-20">
                <x-typography.header text="Our Facilities"/>
                <x-typography.paragraph text="Strategically positioned for optimal production efficiency."/>
            </div>
            <div
                class="flex flex-col gap-8 lg:flex-row w-full relative"
            >
                <div class="w-1/3 grid auto-cols-fr grid-cols-1 gap-x-4 gap-y-10">
                    <x-cards.location-card
                        title="Manufacturing site"
                        sub-title="Copsa Mica"
                        description="over 3.000 m² production area,
                            warehouse & offices"
                        address="Aleea Salcamilor 18, Copșa Mică 555400"
                        href="https://www.google.com/maps/place/Aleea+Primăverii+11,+Copșa+Mică+555400/@46.1118904,24.2286564,235m/data=!3m1!1e3!4m6!3m5!1s0x474b8b9707dda2c5:0xfa15166384addb34!8m2!3d46.1128352!4d24.2294168!16s%2Fg%2F11l1jrlqjw?entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoASAFQAw%3D%3D"
                    />
                    <x-cards.location-card
                        title="Extended Manufacturing site"
                        sub-title="Copsa Mica"
                        description="1,200 m² production area and warehouse."
                        address="Aleea Salcamilor 19, Copșa Mică 555400"
                        href="https://www.google.com/maps/place/Aleea+Primăverii+11,+Copșa+Mică+555400/@46.1118904,24.2286564,235m/data=!3m1!1e3!4m6!3m5!1s0x474b8b9707dda2c5:0xfa15166384addb34!8m2!3d46.1128352!4d24.2294168!16s%2Fg%2F11l1jrlqjw?entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoASAFQAw%3D%3D"
                    />
                    <x-cards.location-card
                        title="Manufacturing site"
                        sub-title="Axente Sever"
                        description="over 1.000 m² production area, warehouse & offices Expansion up to 30,000 m²"
                        address="DN 14B, Nr 1B, 557025 Axente Sever"
                        href="https://www.google.com/maps/place/CIS+AUTOMOTIVE/@46.1087911,24.214978,2208m/data=!3m1!1e3!4m6!3m5!1s0x474b8b8cec0bed73:0xb2fd8ab4fe3c49c0!8m2!3d46.1087913!4d24.2182941!16s%2Fg%2F11nfs7g0c4?entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoASAFQAw%3D%3D"
                    />
                </div>
                <div id="map" class="lg:w-2/3 w-full lg:absolute right-0 h-[300px] lg:h-full"></div>
            </div>
        </div>

        <div>
            <div class="flex flex-col">
                <div class="rb-12 mb-12 md:mb-18 lg:mb-20">
                    <div class="w-full max-w-lg">
                        <x-typography.header text="Our Commitment to Employee Development"/>
                        <x-typography.paragraph class="mt-4" text="At Paderteg, we believe our employees are our greatest asset. We
                            invest in their growth through continuous training and engagement
                            initiatives."/>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
                >
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Fostering a Culture of Engagement"
                        description="We prioritize open communication and collaboration to enhance
                            workplace satisfaction."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Continuous Learning and Professional Growth"
                        description="Our training programs are designed to equip employees with the
                            skills needed for success."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Building a Strong Community Together"
                        description="We engage with our local community to create a positive impact."
                    />
                </div>
            </div>
        </div>

        <div>
            <div class="mb-12 md:mb-18 lg:mb-20">
                <div class="mx-auto max-w-lg text-center">
                    <x-typography.header text="Seamless Collaboration for Enhanced Production"/>
                    <x-typography.paragraph class="mt-4" text="Our production sites are strategically located just 1 km apart,
                        fostering collaboration and efficiency. This proximity allows us to
                        streamline processes and enhance productivity across our operations."/>
                </div>
            </div>
            <div
                class="grid place-items-center gap-x-8 gap-y-12 sm:grid-cols-2 md:gap-y-16 lg:grid-cols-[1fr_1.5fr_1fr] lg:gap-x-12"
            >
                <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Optimized Production Flow"
                        description="Close facilities enable quick communication and rapid response to
                            production demands."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Collaborative Work Environment"
                        description="Our teams work closely together, ensuring high-quality output and
                            timely project completion."
                    />
                </div>
                <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1">
                    <x-elements.image src="{{ asset('assets/collaboration.jpg') }}"/>
                </div>
                <div class="grid w-full grid-cols-1 gap-x-20 gap-y-12 md:gap-y-16">
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Streamlined Manufacturing Process"
                        description="Efficient logistics between sites reduce downtime and enhance
                            overall operational efficiency."
                    />
                    <x-cards.borderless-card-with-icon
                        icon="https://d22po4pjz3o32e.cloudfront.net/relume-icon.svg"
                        title="Commitment to Excellence"
                        description="Our focus on collaboration drives innovation and ensures we meet our
                            clients needs effectively."
                    />
                </div>
            </div>
            <div
                class="mt-12 flex flex-wrap items-center justify-center gap-4 md:mt-18 lg:mt-20"
            >
                <x-buttons.simple-button label="Contact"/>
            </div>
        </div>

        <div>
            <div class="rb-12 mb-12 text-center md:mb-18 lg:mb-20">
                <div class="mx-auto w-full max-w-lg">
                    <x-typography.header text="Empowering Our Community Through Sustainable Practices and Job
                        Creation"/>
                </div>
            </div>
            <div
                class="grid grid-cols-1 items-start justify-center gap-y-12 md:grid-cols-3 md:gap-x-8 md:gap-y-16 lg:gap-x-12"
            >
                <x-cards.image-card
                    image-src="data:image/jpeg;base64,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"
                    title="Investing in Local Development and Community Engagement Initiatives"
                    description="We actively contribute to the local economy by creating stable jobs
                        and fostering professional growth."
                />
                <x-cards.image-card
                    image-src="https://img.freepik.com/premium-vector/community-care-icons-team-help-illustration_911078-7846.jpg?semt=ais_hybrid"
                    title="Supporting Sustainable Practices for a Brighter Future"
                    description="Our commitment to sustainability drives initiatives that benefit both
                        our community and the environment."
                />
                <x-cards.image-card
                    image-src="data:image/png;base64,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"
                    title="Fostering Growth Through Professional Development and Training
                        Programs"
                    description="We provide continuous training opportunities to empower our workforce
                        and enhance their skills."
                />
            </div>
        </div>

        <div
            class="mb-12 md:mb-0 grid auto-cols-fr grid-cols-1 border border-border-primary rounded-2xl lg:grid-cols-2 p-8"
        >
            <div class="flex flex-col justify-center">
                <div>
                    <x-typography.header text="Discover Our Innovative Solutions"/>
                    <x-typography.paragraph class="mt-4" text="Explore how our services can enhance your connectivity and
                        operational efficiency today."/>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 md:mt-8">
                    <x-buttons.simple-button label="Contact"/>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <x-elements.image src="{{ asset('assets/discover.png') }}"/>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZMcV0P7mXOOkw33U9tuoNBlCZzslBklQ&callback=initMap"
            async defer></script>
    <script>
        function initMap() {
            // Define all marker locations
            const locations = [
                {lat: 46.1085067, lng: 24.2169003, title: "Axente Sever Site"},
                {lat: 46.1114869, lng: 24.2267992, title: "Copsa Mica Site"},
                {lat: 46.1121761, lng: 24.2288757, title: "Extended Site"},
            ];

            // Initialize the map centered at the first location
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: locations[1],
            });

            // Add markers
            locations.forEach((location) => {
                new google.maps.Marker({
                    position: {lat: location.lat, lng: location.lng},
                    map: map,
                    title: location.title,
                });
            });
        }
    </script>
@endsection
