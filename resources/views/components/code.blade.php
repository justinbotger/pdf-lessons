@props([])

<div {{ $attributes->class(['workshop-code']) }}>
    @if($label)
        <div class="workshop-code__label">{{ $label }}</div>
    @endif

    <pre class="workshop-code__pre @if($lineNumbers) workshop-code__pre--lines @endif"><code class="workshop-code__code language-{{ $language }}">{!! $highlightedCode !!}</code></pre>
</div>
