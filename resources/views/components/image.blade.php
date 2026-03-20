@props([
    'src' => '',
    'alt' => '',
    'caption' => null,
])

<figure class="image">
    @if($caption)
    <figcaption>{{ $caption }}</figcaption>
    @endif
    <img src="{{ $src }}" alt="{{ $alt }}">
</figure>
