@props([
    'number' => null,
])
<div class="step">
    <div class="step-number">
        {{ $number }}
    </div>
    <div class="step-content">
        {{ $slot }}
    </div>
</div>
