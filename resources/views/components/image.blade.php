@props([
    'src' => '',
    'alt' => '',
    'caption' => null,
])

<figure class="image">
    @if($caption)
    <figcaption>{{ $caption }}</figcaption>
    @endif
    <div class="image__frame">
        <img src="{{ $src }}" alt="{{ $alt }}">
    </div>
</figure>
