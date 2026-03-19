@props([
    'number' => null,
])

<div class="page">
    @if (isset($number))
        <div class="page__number">{{ $number }}</div>
    @endif
    <div class="page__content">
        {{ $slot }}
    </div>
</div>
