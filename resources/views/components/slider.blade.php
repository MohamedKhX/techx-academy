@props([
    'id',
    'col'     => 'col-10',
    'classes' => 'row justify-content-center mt-5 pt-2 gap-4',
    'perPage' => 3,
    'breakPoints' => null
])

<div {{ $attributes->merge(['class' => $classes]) }} >
    <div class="{{ $col }}">
        <div id="{{ $id }}" class="splide" role="group">
            <div class="splide__track">
                <ul class="splide__list">
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const splide{{ $id }} =  new Splide( '#{{ $id }}', {
            type       : 'loop',
            perPage    : {{ (int) $perPage }},
            gap        : '24px',
            arrows     : false,
            pagination : true,
            breakpoints: {{ $breakPoints ?? '{
                1000: {
                    perPage: 2
                },
                766: {
                    perPage: 1
                }
            }' }}
        });


        splide{{ $id }}.on( 'pagination:mounted', function ( data ) {
            data.list.classList.add( 'splide__pagination--custom' );

            data.items.forEach( function ( item ) {
                item.button.classList.add('slider_circle')
            } );
        } );

        splide{{ $id }}.mount();
    </script>
@endpush

