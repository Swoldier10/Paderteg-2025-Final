<video {{ $attributes->merge(['class' => '']) }} loop muted autoplay>
    <source src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($src) }}" type="video/mp4">
</video>

