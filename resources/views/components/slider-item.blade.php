@props(['classes' => 'splide__slide pt-5 pb-5'])
<li {{ $attributes->merge(['class' => $classes]) }}>
    <div class="splide__slide__container h-100">
        {{ $slot }}
    </div>
</li>
