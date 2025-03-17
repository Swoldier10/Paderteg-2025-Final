@extends('layouts.app')

@section('title', 'Home Appliance')

@section('content')
    <x-cards.background-video-card
        title="Home Appliance"
        description="Our long experience in the automotive industry means our main partners can consider us a basic partner for them."
    />

    {{--Start Transition Text    --}}
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
    {{--End Transition Text--}}

    <x-cards.cable-card-component
        :image-position="'left'"
        :image-url="asset('assets/pages/automotive/product-1.jpg')"
        :title="'Safety First! Mit unseren Hochvolt Kabelkonfektionen sind Sie auf der sicheren Seite!'"
        :description="'In Zeiten von Elektromobilität und Hybridantrieben gewinnen Hochvoltkabel immer mehr an Bedeutung. Sie
                sind ein wichtiger Bestandteil von Elektro- und Hybridfahrzeugen und ermöglichen die unsichtbare
                Kraftübertragung zwischen den einzelnen Komponenten. Lassen Sie uns gemeinsam die Vision eines grünen
                Bordnetzes unterstützen und mit unseren Hochvoltleitungen eine umweltfreundlichere Mobilität fördern.'"
    />

    <div class="mx-auto">
        <div class="mx-auto my-14 w-[2px] h-[100px] 2xl:h-[200px] bg-[#1466ab]"></div>
    </div>

    <x-cards.cable-card-component
        :image-position="'right'"
        :image-url="asset('assets/pages/automotive/product-2.jpg')"
        :title="'Safety First! Mit unseren Hochvolt Kabelkonfektionen sind Sie auf der sicheren Seite!'"
        :description="'In Zeiten von Elektromobilität und Hybridantrieben gewinnen Hochvoltkabel immer mehr an Bedeutung. Sie
                sind ein wichtiger Bestandteil von Elektro- und Hybridfahrzeugen und ermöglichen die unsichtbare
                Kraftübertragung zwischen den einzelnen Komponenten. Lassen Sie uns gemeinsam die Vision eines grünen
                Bordnetzes unterstützen und mit unseren Hochvoltleitungen eine umweltfreundlichere Mobilität fördern.'"
    />

    <div class="mx-auto">
        <div class="mx-auto my-14 w-[2px] h-[100px] 2xl:h-[200px] bg-[#1466ab]"></div>
    </div>

    <x-cards.cable-card-component
        :image-position="'left'"
        :image-url="asset('assets/pages/automotive/product-3.jpg')"
        :title="'Safety First! Mit unseren Hochvolt Kabelkonfektionen sind Sie auf der sicheren Seite!'"
        :description="'In Zeiten von Elektromobilität und Hybridantrieben gewinnen Hochvoltkabel immer mehr an Bedeutung. Sie
                sind ein wichtiger Bestandteil von Elektro- und Hybridfahrzeugen und ermöglichen die unsichtbare
                Kraftübertragung zwischen den einzelnen Komponenten. Lassen Sie uns gemeinsam die Vision eines grünen
                Bordnetzes unterstützen und mit unseren Hochvoltleitungen eine umweltfreundlichere Mobilität fördern.'"
    />
@endsection
