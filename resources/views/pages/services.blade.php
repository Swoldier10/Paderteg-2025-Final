@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <x-cards.background-video-card
        title="Services"
        description="Our long experience in the automotive industry means our main partners can consider us a basic partner for them."
    />

    <div class="my-14 2xl:my-24">
        <div class="mx-auto">
            <div class="mx-auto w-[2px] h-[100px] 2xl:h-[200px] bg-[#1466ab]"></div>
        </div>
        <div
            class="text-center w-[400px] lg:w-[500px] 2xl:w-[600px] mx-auto my-14 xl:my-20 tracking-tighter leading-[1.6em] text-[20px] 2xl:text-[30px]">
            In the automotive industry, reliability and efficiency are paramount. Our high-quality cable solutions
            ensure seamless connectivity, durability, and performance, meeting the rigorous demands of modern vehicles.
        </div>
        <div class="mx-auto">
            <div class="mx-auto w-[2px] h-[100px] 2xl:h-[200px] bg-[#1466ab]"></div>
        </div>
    </div>


    <div class="w-full mb-20">
        <img
            alt="planning"
            class="mx-auto h-[360px] lg:h-[560px] rounded-2xl"
            src="{{ asset('assets/pages/services/planning.jpg') }}"/>
    </div>

    <div class="mx-20 flex flex-col gap-6">
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Support</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Planning</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Improvement</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
    </div>

    <div class="w-full my-20">
        <img
            alt="production"
            class="mx-auto h-[360px] lg:h-[560px] rounded-2xl"
            src="{{ asset('assets/pages/services/production.webp') }}"/>
    </div>

    <div class="mx-20 flex flex-col gap-6">
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Production</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Order Transaction</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">SC Management</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in
                denen wir tätig sind.
            </div>
        </div>
    </div>

    <div class="w-full my-20">
        <img
            alt="quality"
            class="mx-auto h-[360px] lg:h-[560px] rounded-2xl"
            src="{{ asset('assets/pages/services/quality.avif') }}"/>
    </div>

    <div class="mx-20 flex flex-col gap-6 mb-20">
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Quality Management</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die
                medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten
                sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in denen wir tätig
                sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Environment & OHS</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die
                medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten
                sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in denen wir tätig
                sind.
            </div>
        </div>
        <div class="flex flex-col gap-6 pb-10 border-b border-[#1466ab]">
            <div class="text-[25px] text-[#1466ab] font-[400] leading-[25px] ">Certification</div>
            <div class="text-[16px] font-[400] leading-[28px]">
                Die CiS-Gruppe verpflichtet sich, nachhaltig und verantwortungsbewusst zu handeln. Mit Projekten wie der
                Unterstützung von Plan International fördern wir die schulische Ausbildung von Kindern in
                Entwicklungsländern und setzen uns durch Partnerschaften mit Organisationen wie der Andheri Hilfe für
                die
                medizinische Versorgung erblindeter Kinder und Erwachsener ein. Lokal unterstützt CiS Schulen,
                Kindergärten
                sowie kulturelle Initiativen und trägt somit zur Entwicklung der Gemeinschaften bei, in denen wir tätig
                sind.
            </div>
        </div>
    </div>
@endsection
