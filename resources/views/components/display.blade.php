@props(['title'])

<div>
    <div>
        <h2> {{ $title }} </h2>
        {{ $slot }}
    </div>
</div>