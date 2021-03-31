@props(['json'])

<div
    x-data
    x-init="   
        bodymovin.loadAnimation({
            container: $refs.bodymovin,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ $json }}'
        })
    "
    {{ $attributes }}
    >
    <div x-ref="bodymovin" class="w-full h-screen"></div>
</div>